<?php
require "../db/db_connect.php";
	$oid = $_GET['id'];
	function order($oid)
	{
		$query="SELECT * FROM `order` WHERE id=$oid";
		$order=get($query);
		return $order[0];
	}
	$order = order($oid);
	
	$oid = $order["id"];
	$c_id = $order["c_id"];
	$c_name = $order["c_name"];
	$c_email = $order["c_email"];
	$p_name = $order["p_name"];
	$p_quantity = $order["p_quantity"];
	$p_price = $order["p_price"];
	$T_price = $order["p_t_price"];
	$p_date = $order["date"];
	
	echo $c_id;
	echo $c_name;
	echo $c_email;
	echo $p_name;
	echo $p_quantity;
	echo $p_price;
	echo $T_price;
	echo $p_date;
	$query="INSERT INTO `confirm_order` 
	VALUES (NULL, $c_id, '$c_name', '$c_email', '$p_name', $p_quantity, $p_price, $T_price, '$p_date', current_timestamp())";
	$result=get($query);
	$query1="DELETE FROM `order` WHERE id=$oid";
	$result1=get($query1);
	header("Location:managerPage.php");
	
?>