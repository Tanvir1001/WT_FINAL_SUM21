<?php 
	include 'header_info.php';
	include 'controllers/employee_controller.php';
	$allemployee = getallemployee();	
	
	//cookies
	if(!isset($_COOKIE["username"]) && !isset($_COOKIE["password"]))
	{	
		header("Location: login.php");
  	}
?>


		
			<h1 align="center">Employee Info</h1>
			
			<b><a href="addEmployee.php">Add New Employee</a></b>
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
			
			


			<b><input type="text" align="right" name="search" placeholder="Search Here" >
			<a href="search_employee.php"><button>Search</button></a></b>	

			<br>
			<br>

			<table border="1" align="center">
					
				<tr>
					<td><b>Employee ID</b></td>
					<td><b>Employee Name</b></td>
					<td><b>Email</b></td>
					<td><b>Gender</b></td>
					<td><b>Birth Date</b></td>
					<td><b>Phone</b></td>
					<td><b>Salary</b></td>
					<td><b>Address</b></td>
					<td><b>Join Date</b></td>
					<td><b>Edit</b></td>
					<td><b>Delete</b></td>
				</tr>
					
				<?php 
					foreach($allemployee as $employee)
					{
						
						echo "<tr>";
							echo "<td>".$employee["eid"]."</td>";
							echo "<td>".$employee["ename"]."</td>";
							echo "<td>".$employee["email"]."</td>";
							echo "<td>".$employee["gender"]."</td>";
							echo "<td>".$employee["birth_date"]."</td>";
							echo "<td>".$employee["phone"]."</td>";
							echo "<td>".$employee["salary"]."</td>";
							echo "<td>".$employee["address"]."</td>";
							echo "<td>".$employee["join_date"]."</td>";
							echo "<td><a href=editemployee.php?id=".$employee["eid"].">Edit</a></td>";
							echo "<td><a href=deleteemployee.php?id=".$employee["eid"].">Delete</a></td>";
							
						echo "</tr>";
					}
				?>
					
			</table>
			<script src="js/search_employee.js"></script>
	</body>
	
</html>