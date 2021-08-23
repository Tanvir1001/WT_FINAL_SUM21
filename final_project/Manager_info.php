<?php 
	include 'header_info.php';
	include 'controllers/manager_controller.php';
	$allmanager = getallmanager();	

	//cookies

	if(!isset($_COOKIE["username"]) && !isset($_COOKIE["password"]))
	{
		header("Location: login.php");
 	 }
?>

		<h1 align="center">Manager Info</h1>
		
		<b><a href="addManager.php">Add New Manager</a></b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		


		<b><input type="text" align="right" name="search" placeholder="Search Here">
		<a href="search.php"><button>Search</button></a></b>	

		<br>
		<br>

			<table border="1" align="center">
					
				<tr>
					<td><b>Manager ID</b></td>
					<td><b>Manager Name</b></td>
					<td><b>Email</b></td>
					<td><b>Gender</b></td>
					<td><b>Birth Date</b></td>
					<td><b>Phone</b></td>
					<td><b>Salary</b></td>
					<td><b>Address</b></td>
					<td><b>Edit</b></td>
					<td><b>Delete</b></td>
				</tr>
					
				<?php 
					foreach($allmanager as $manager)
					{
						
						echo "<tr>";
							echo "<td>".$manager["mid"]."</td>";
							echo "<td>".$manager["mname"]."</td>";
							echo "<td>".$manager["email"]."</td>";
							echo "<td>".$manager["gender"]."</td>";
							echo "<td>".$manager["birth_date"]."</td>";
							echo "<td>".$manager["phone"]."</td>";
							echo "<td>".$manager["salary"]."</td>";
							echo "<td>".$manager["address"]."</td>";
							echo "<td><a href=editManager.php?id=".$manager["mid"].">Edit</a></td>";
							echo "<td><a href=deleteManager.php?id=".$manager["mid"].">Delete</a></td>";
							
						echo "</tr>";
					}
				?>
					
			</table>
			
	</body>
	
</html>