<?php //include 'admin_header.php';
	  require_once ('../controllers/ManagerController.php');
	  $pid = $_GET["id"];
	  $manager=deleteManager($pid);
?>