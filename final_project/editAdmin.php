<?php
	include 'header_add.php';
	include 'controllers/admin_controller.php';
	//cookies

	if(!isset($_COOKIE["username"]) && !isset($_COOKIE["password"]))
	{
		header("Location: login.php");
 	 }
	$id = $_GET['id'];


    $user = Getuser($id);
    $row = mysqli_fetch_assoc($user);
?>

<html>
	<head>
		<title>Edit Admin</title>
	</head>
	<body>
		
		<h1>Welcome to Edit Admin</h1>
		<form method="post" onsubmit="return validate()" action="">
			
				<table>

				<tr>
					<td align="left"><b>Admin Name*</b></td>
					<td><input type="text"  name="aname" value="<?php echo $row['aname']; ?>" id="aname">
						<span><?php echo $err_aname; ?></span><span id="err_aname"></span>
					</td>
				</tr>
                <tr>
					<td align="left"><b>Admin Username*</b></td>
					<td><input type="text"  name="username" value="<?php echo $row['username']; ?>" id="username">
						<span><?php echo $err_username; ?></span><span id="err_username"></span>
					</td>
				</tr>
                <tr>
					<td align="left"><b>Admin Password*</b></td>
					<td><input type="text"  name="password" value="<?php echo $row['password']; ?>" id="password">
						<span><?php echo $err_password; ?></span><span id="err_password"></span>
					</td>
				</tr>
				<tr>
					<td align="left"><b>Email*</b></td>
					<td><input type="text"  name="email" value="<?php echo $row['email']; ?>" id="email">
						<span><?php echo $err_email; ?></span><span id="err_email"></span>
					</td>
				</tr>
				

				<tr>
						<td align="left"><b>Birth Date*</b></td>
						<td>
							<input type="text" name="birth_date" value="<?php echo $row['birth_date']; ?>" id="birth_date" >
							<span><?php echo $err_birth_date; ?></span><span id="err_birth_date"></span>
						</td>
				</tr>
				<tr>
					<td align="left"><b>Phone*</b></td>
					<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>" id="phone">
					<span><?php echo $err_phone; ?></span><span id="err_phone"></span></td>
				</tr>

				<tr>
						<td align="left"><b>Address*</b></td>
						<td>
							<input type="text" name="address" value="<?php echo $row['address']; ?>" id="address">
							<span><?php echo $err_address; ?></span><span id="err_address"></span>
						</td>
				</tr>
		
				<tr>
					<td colspan="2" align="center"><input type="submit" name="Edit" value="Edit"></td>
				</tr>
				</table>
			
		</form>
		<script src="js/editAdmin.js">
			
		</script>
	</body>
	
</html>