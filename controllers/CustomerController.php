<?php
	require_once '../db/db_connect.php';
	if(isset($_POST["add_customer"]))
	{
		insertCustomer();
	}
	else if(isset($_POST["edit_category"]))
	{
		editCategory();
	}
	function getAllCustomer()
	{
		$query ="SELECT * FROM customer";
		$customer = get($query);
		return $customer;	
	}
	function searchCustomer()
	{
		$searchKey= $_POST['search_value'];
		$query="SELECT * FROM customer WHERE name LIKE '%$searchKey%'";
		$customer=get($query);
		return $customer;
		header("Location:../customer/customerList.php");
	}
	function insertCustomer()
	{
		$name=$_POST["name"];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$phone_no=$_POST['mobile_no'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$query="INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone no`, `gender`, `address`) 
		VALUES ('NULL','$name','$email','$pass','$phone_no','$gender','$address');";
		execute($query);
		header("location:../customer/CustomerRegistationSuccess.php");
	}
	function getCustomer($id)
	{
		$query="SELECT * FROM customer WHERE id=$id";
		$customer=get($query);
		return $customer[0];
	}
	function editCategory()
	{
		$name=$_POST["name"];
		$id=$_POST["id"];
		$query="UPDATE categories SET name='$name' WHERE id=$id";
		execute($query);
		header('Location:../views/allcategories.php');
	}
?>