<?php
    session_start();
    if(!isset($_SESSION ["loggeduser"])){
        header("location: index.php");
    }
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
     <h3 align="center">Logged in by <?php echo $_SESSION ["loggeduser"]; ?></h3>
     <br>
     <br>
     <h1 align="center">Welcome to Dashboard</h1>
     <br>
     <a href="addproduct.php">Add Product</a>
     <a href="">All product</a>
     <a href="">All User</a>
     <a href="">All categories</a>
</body>
</html>