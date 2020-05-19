<?php //include 'admin_header.php';
	  require_once ('../controllers/ProductController.php');
	  $pid = $_GET["id"];
	  $product=deleteProduct($pid);
?>