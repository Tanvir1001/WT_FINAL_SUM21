<?php
	
	session_start();
	$username="";
	$err_username="";
	$password="";
	$err_password="";

	$hasError = false;
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
        //UserName
		if(empty($_POST["username"])){
			$err_username=" *Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 4){
			$err_username="*Username must be 4 characters";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
        //Password
		if(empty($_POST["password"])){
		$err_password=" *Password required";
		$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 6){
		$err_password=" *Password must be 6 characters long";
		$hasError = true;
		}
		else{
		$password=$_POST["password"];
		}
		
		//No error
		if(!$hasError){
			
			$sql= "SELECT * FROM admins WHERE username='$username' && password='$password'";

			include 'models/db_connect.php';
			$qry=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($qry);
			
			if($count==1){
				
				$_SESSION['username']=$username;
				setcookie("username",$username,time() + 600);
				setcookie("password",$password,time() + 600);
				header('location:dashboard.php');
      			}
		}
		echo "Invalid Username or Password";	
	}		
   
?>


<html>
<head>
    <title>Log-In</title>
    
</head>
<body>
<html>
<head>
    <title>Inventory || Home-Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Inventory Management System</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="signup.php">Sign Up</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="login.php">Log In</a>
				</li>
			</ul>

			</div>
		</div>
	</nav>


    <section>
		<form action="" method="post">
				<h3 align="center">Log In</h3>
				<table align="center">
					<tr>
                        <td align="right">Username:</td>
                        <td><input name="username" value="<?php echo $username?>" type="text">
                        <span><?php echo $err_username;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input name="password" value="" type="password">
                        <span><?php echo $err_password;?></span></td>
                    </tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="Log-In"></td>
					</tr>
					<!-- <tr>
                        <td align="right"><input name="remember" value="1" type="checkbox">
						Keep Me Sign In</td>
                    </tr> -->
				</table>
			
		</form>
	</section>
</body>
</html>