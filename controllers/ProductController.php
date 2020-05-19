<?php
	require_once "../db/db_connect.php";
	if(isset($_POST["add_product"]))
	{
		insertProduct();
	}
	else if(isset($_POST["edit_product"]))
	{
		editProduct();
	}
	// else if(isset($_POST["order"]))
	// {
		// order();
	// }
	// function order()
	// {
		// $query = INSERT INTO `order` (`id`, `c_id`, `c_name`, `c_email`, `p_name`, `p_quantity`, `p_price`, `date`)
		// VALUES (NULL, '$c_id', '$c_name', '$c_email', '$p_name', '$p_quantity', '$p_t_price', current_timestamp());
		// $result=get($query);
	// }
	function getAllProducts()
	{
		$query ="SELECT * FROM products";
		$products = get($query);
		return $products;	
	}
	function getProduct($id)
	{
		$query="SELECT * FROM products WHERE id=$id";
		$product=get($query);
		return $product[0];
		
	}
	 function deleteProduct($id)
	 {
		$query="DELETE FROM products WHERE id=$id";
		$product=get($query);
		header("Location:../products/productHome.php");
	 }
	function insertProduct()
	{
		$name=$_POST["name"];
		$price=$_POST["price"];
		$qty=$_POST["quantity"];
		$desc=$_POST["description"];
		 //file upload
        $target_dir="../storage/product_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		//echo $target_file;
		$query="INSERT INTO products VALUES(NULL,'$name',$price,$qty,'$desc','$target_file')";
		execute($query);
		header("Location:../products/productHome.php");
		
	}
	function editProduct()
	{
		$target_file=$_POST["prev_image"];
		$id=$_POST["id"];
		$name=$_POST["name"];
		$price=$_POST["unit_price"];
		$qty=$_POST["unit_qty"];
		$desc=$_POST["description"];
		if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) 
		{
			$target_dir="../storage/product_image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			//echo 'No upload';
		}
		$query="UPDATE products SET name='$name',unit_price=$price,unit_qty=$qty,description='$desc',
		image='$target_file' WHERE id=$id";
		echo $query;
		execute($query);
		header("Location:../products/productHome.php");
	}
?>