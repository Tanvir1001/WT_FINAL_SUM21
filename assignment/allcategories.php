<?php
    include 'controllers/CategoryController.php';
	$categories = getAllCategories();
?>


<html>
<head>
    <title>All Category</title>
</head>
<body>
<h2>Admin</h2>
    <a href="dashboard.php">Dashboard</a> <br><br>
    <a href="">All Products</a> <br><br>
    <a href="">Add Products</a> <br><br>
    <a href="allcategories.php">All Category</a> <br><br>
    <a href="addcategory.php">Add Category</a> <br>
	<br>
	<h3>Add Category</h3>
    <table>
    <thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product Count </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					$id = $c["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo '<td><a href="editcategory.php?id='.$id.'">Edit</a></td>';
						echo '<td><a href="">Delete </a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
        
    </table>
</body>
</html>