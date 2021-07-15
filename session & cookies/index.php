<?php
	
	session_start();
	$username="";
	$err_username="";
	$password="";
	$err_password="";
   
	$hasError = false;
	$users = array("Tanvir"=>"12345678","Sarrick"=>"123456789","Rakib"=>"1234567890");

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
		elseif(strlen($_POST["password"]) < 8){
		$err_password=" *Password must be 8 characters long";
		$hasError = true;
		}
		else{
		$password=$_POST["password"];
		}
		if(!$hasError){
			foreach ($users as $u=>$p){
				if($username==$u && $password==$p){
					$_SESSION["loggeduser"]= $username;
					header("location: dashboard.php");
				}
			}
			// if($username == "Sarrick1010" && $password == "123456789"){
				
			// }
			echo "Invalid Username or Password";
		}		
	}
?>


<html>
<head>
    <title>Log-In</title>
    
</head>
<body>
    
    <form action="" method="post">
				<h1 align="center">Log In</h1>
				<table align="center">
					<tr>
                        <td align="right">Username:</td>
                        <td><input name="username" value="" type="text">
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
				</table>
			
		</form>
</body>
</html>