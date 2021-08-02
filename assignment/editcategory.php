<?php 
	include 'controllers/CategoryController.php';
	$id = $_GET["id"];
	$c = getCategory($id);
?>


<html>
<head>
    <title>Edit Category</title>
</head>
<body>
<h2>Admin</h2>
    <a href="dashboard.php">Dashboard</a> <br><br>
    <a href="">All Products</a> <br><br>
    <a href="">Add Products</a> <br><br>
    <a href="allcategories.php">All Category</a> <br><br>
    <a href="addcategory.php">Add Category</a> <br>
    <h5><?php echo $err_db; ?></h5>
    <h3>Edit Category</h3>
    <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>">
            <input type="submit" name="edit_category" value="Edit Category">
    </form>
</body>
</html>