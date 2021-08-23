<?php
include ('session.php');
?>
<html>
<head>
    <title>Inventory || Dashboard </title>
  	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table, td {
          border: 1px solid black;
        }

        table {
          width: 100%;
          border-collapse: collapse;
        }
    </style>
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
          <span class="nav-link" style="color:#7411F6;">Logged in by <?php echo $_SESSION['username'];?> </span>
        </li>
      </ul>

    </div>
    </div>
  </nav>