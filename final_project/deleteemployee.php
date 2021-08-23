<?php 
	require_once 'controllers/employee_controller.php';
	deleteemployee($_GET['id']);
	header("Location: Employee_info.php");

?>