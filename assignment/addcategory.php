<?php
	include 'controllers/CategoryController.php';
?>

<html>
<head>
    <title>Add Category</title>
</head>
<body>
<h2>Admin</h2>
    <a href="dashboard.php">Dashboard</a> <br><br>
    <a href="">All Products</a> <br><br>
    <a href="">Add Products</a> <br><br>
    <a href="allcategories.php">All Category</a> <br><br>
    <!-- <a href="">Edit Category</a> <br><br> -->
    
    <h5><?php echo $err_db; ?></h5>
    <h3>Add Category</h3>
    <form action="" method="post">
        Name:<input type="text" name="name"  value="<?php echo $name;?>">
        <span><?php echo $err_name;?></span> <br><br>
        <input type="submit" name="add_category"value="Add Category">
    </form>
</body>
</html>