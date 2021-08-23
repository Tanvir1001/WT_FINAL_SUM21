<?php  
	
	include 'header_info.php';
	include 'controllers/admin_controller.php';
	$alladmin = getalladmin();	
	//cookies
	if(!isset($_COOKIE["username"]) && !isset($_COOKIE["password"]))
	{
		header("Location: login.php");
  	}
	
?>

		
		<h1 align="center">Admin Info</h1>
		
		<b><a href="addAdmin.php">Add New Admin</a></b>
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
					<td><b>Admin ID</b></td>
					<td><b>Admin Name</b></td>
					<td><b>Admin Username</b></td>
					<td><b>Password</b></td>
					<td><b>Email</b></td>
					<td><b>Birth Date</b></td>
					<td><b>Phone</b></td>
					<td><b>Address</b></td>
					<td><b>Edit</b></td>
					<td><b>Delete</b></td>
				</tr>
					
				<?php 
					foreach($alladmin as $admin)
					{
						
						echo "<tr>";
							echo "<td>".$admin["aid"]."</td>";
							echo "<td>".$admin["aname"]."</td>";
                            echo "<td>".$admin["username"]."</td>";
                            echo "<td>".$admin["password"]."</td>";
							echo "<td>".$admin["email"]."</td>";
							echo "<td>".$admin["birth_date"]."</td>";
							echo "<td>".$admin["phone"]."</td>";
							echo "<td>".$admin["address"]."</td>";
							echo "<td><a href=editAdmin.php?id=".$admin["aid"].">Edit</a></td>";
							echo "<td><a href=deleteAdmin.php?id=".$admin["aid"].">Delete</a></td>";
							
						echo "</tr>";
					}
				?>
					
			</table>
			
	</body>
	
</html>