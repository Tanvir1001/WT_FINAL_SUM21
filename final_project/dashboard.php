<?php
include 'session.php';
//cookies
if(!isset($_COOKIE["username"]) && !isset($_COOKIE["password"])){
  header("Location: login.php");
}
?>

<html>
<head>
    <title>Inventory || Dashboard </title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Admin_info.php">Admin</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Manager_info.php">Menager</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Employee_info.php">Empolayee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
        <li class="nav-item">
          <span class="nav-link" style="color:#7411F6;">Logged in by <?php echo $_SESSION['username'];?></span>
        </li>
      </ul>

    </div>
  </div>
</nav>

<section>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col ">
    <div class="card h-100">
      
      <div class="card-body card text-white bg-secondary align-items-center">
        <h3 class="card-title">Total Admin</h3>
        <?php
          include 'models/db_connect.php';

          $query = "SELECT aid FROM admins ORDER BY aid";
          $query_run = mysqli_query($conn, $query); 
          $row = mysqli_num_rows($query_run);
          echo '<h2>'.$row.'</h2>';
        ?>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 ">
      
      <div class="card-body card text-white bg-success  align-items-center">
        <h3 class="card-title">Total Manager</h3>
        <?php
          include 'models/db_connect.php';

          $query = "SELECT mid FROM managers ORDER BY mid";
          $query_run = mysqli_query($conn, $query); 
          $row = mysqli_num_rows($query_run);
          echo '<h2>'.$row.'</h2>';
        ?>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
     
      <div class="card-body card text-white bg-danger align-items-center">
        <h3 class="card-title">Total Employee</h3>
        <?php
          include 'models/db_connect.php';

          $query = "SELECT eid FROM employees ORDER BY eid";
          $query_run = mysqli_query($conn, $query); 
          $row = mysqli_num_rows($query_run);
          echo '<h2>'.$row.'</h2>';
        ?>
      </div>
    </div>
  </div>
  
</div>
</section>
</body>
</html>