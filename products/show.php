<?php 
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:../index.php");
	}
	if(isset($_POST['logout']))
	{
		setcookie("loggedinuser","",time()-60, "/");
		header("Location:../index.php");
	}
 ?>
<html>
<head>
	<link rel="stylesheet" href="../css/mystyle.css">
</head>
<body>
	
	
<?php
	include "../db/db_connect.php";
	require '../controllers/ProductController.php';
	$products=getAllProducts();
?>
<?php
	if(!isset($_SESSION))
	{
		session_start();
		$_SESSION["cid"] = $_GET["id"];
		$cid = $_SESSION["cid"];
		require '../controllers/CustomerController.php';
		$customer=getCustomer($cid);
		
		$c_id = $customer["id"];
		$c_name = $customer["name"];
		$c_email = $customer["email"];
		// echo $c_id;
		// echo $c_name;
		// echo $c_email;
	}
	
	
?>

<center><h1 class="head">*** Welcome To Our Restaurent ***</h1></center>
<br>
<div class="card-display col-md-12">
		<?php
			foreach($products as $product)
			{
		?>
			
			<div class="card-product col-md-4">

					<a href="item.php?id=<?php echo $product["id"];?>">
						<img class="card-image" src="<?php echo $product["image"];?>"></img>
						<b class="text" name="submit"> <?php echo $product["name"];?></b>
					
					<div class="price-label"><span ><b><?php echo $product["unit_price"];?> BDT</b></span></div>
					<div class="add-to-cart"><p class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</p></div>
					</a>
			</div>
			
		<?php
			}
		?>
</div>
	<form method="post" action="">
		<input type="submit" name="logout" class="logout" value="Log Out"><br>
	</form>
</body>
</html>