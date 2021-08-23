<?php 
	require_once 'controllers/admin_controller.php';
	deleteadmin($_GET['id']);
	header("Location: Admin_info.php");

?>