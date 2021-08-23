<?php
	include 'header_add.php';
	include 'controllers/manager_controller.php';
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
		<title>Edit Manager</title>
	</head>
	<body>
		
		<h1>Welcome to Edit Manager</h1>
		<form method="post" onsubmit="return validate()" action="">
			
				<table>

				<tr>
					<td align="left"><b>Manager Name*</b></td>
					<td><input type="text"  name="mname" value="<?php echo $row['mname']; ?>" id="mname">
						<span><?php echo $err_mname; ?></span><span id="err_mname"></span>
					</td>
				</tr>
				<tr>
					<td align="left"><b>Email*</b></td>
					<td><input type="text"  name="email" value="<?php echo $row['email']; ?>" id="email">
						<span><?php echo $err_email; ?></span><span id="err_email"></span>
					</td>
				</tr>
				
				<tr>
						<td align="left"><b>Gender*</b></td>
						<td>
							<input type="radio" name="gender" id="gender" value="Male"> Male
							<input type="radio" name="gender" id="gender" value="Female"> Female   
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
					<td align="left"><b>Salary</b></td>
					<td><input type="text" name="salary" value="<?php echo $row['salary']; ?>" id="salary">
					<span><?php echo $err_salary; ?></span><span id="err_salary"></span></td>
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
		<script src="js/editManager.js">
			
		</script>
	</body>
	
</html>