<?php 
	require_once 'controllers/manager_controller.php';
	deletemanager($_GET['id']);
	header("Location: Manager_info.php");

?>