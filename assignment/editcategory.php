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
    <a href="">All Category</a> <br><br>
    <a href="">Edit Category</a> <br><br>
    
    <h5><?php echo $err_db; ?></h5>
    <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>">
            <input type="submit" name="edit_category" class="btn btn-success" value="Edit Category">
    </form>
</body>
</html>