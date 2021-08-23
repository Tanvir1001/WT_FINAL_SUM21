<?php 
	include 'header_add.php';
	include 'controllers/admin_controller.php';
	//cookies

	if(!isset($_COOKIE["username"]) && !isset($_COOKIE["password"]))
	{
		header("Location: login.php");
 	 }
?>

		
		<h1 align="left">Add Admin Info</h1>
		<form action="" onsubmit="return validate()" method="post">
			
				<table>

				<tr>
					<td align="left"><b>Admin ID</b></td>
					<td><input type="text" value="<?php echo $aid ?>" name="aid" id="aid">
					<span><?php echo $err_aid; ?></span><span id="err_aid"></span>
				</td>
				</tr>
				<tr>
					<td align="left"><b>Admin Name*</b></td>
					<td><input type="text" value="<?php echo $aname ?>" name="aname" id="aname">
						<span><?php echo $err_aname; ?></span><span id="err_aname"></span>
					</td>
				</tr>
                <tr>
					<td align="left"><b>Admin Username*</b></td>
					<td><input type="text"  name="username" value="<?php echo $username; ?>" id="username">
						<span><?php echo $err_username; ?></span><span id="err_username"></span>
					</td>
				</tr>
                <tr>
					<td align="left"><b>Admin Password*</b></td>
					<td><input type="text"  name="password" value="<?php echo $password; ?>" id="password">
						<span><?php echo $err_password; ?></span><span id="err_password"></span>
					</td>
				</tr>
				<tr>
					<td align="left"><b>Email*</b></td>
					<td><input type="text" value="<?php echo $email; ?>" name="email" id="email">
						<span><?php echo $err_email; ?></span><span id="err_email"></span>
					</td>
				</tr>
				
		
				<tr>
						<td align="left"><b>Birth Date*</b></td>
						<td>
							<input type="text"  value="<?php echo $birth_date; ?>" name="birth_date" id="birth_date" >
								<span><?php echo $err_birth_date; ?></span><span id="err_birth_date"></span>
						</td>
				</tr>
				<tr>
					<td align="left"><b>Phone*</b></td>
					<td><input type="text" value="<?php echo $phone ?>" name="phone" id="phone">
						<span><?php echo $err_phone; ?></span><span id="err_phone"></span>
					</td>
				</tr>

				<tr>
						<td align="left"><b>Address*</b></td>
						<td>
							<input type="text"  value="<?php echo $address; ?>" name="address" id="address">
							<span><?php echo $err_address; ?></span>
							<span id="err_address"></span>
						</td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
			
		</form>
		<script src="js/addAdmin.js">
			
		</script>
	</body>
	
</html>