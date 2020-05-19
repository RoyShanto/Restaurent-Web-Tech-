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
	require_once("../controllers/ProductController.php");
	$pid = $_GET["id"];
	$product=getProduct($pid);
?>
<?php
// $cid = $_COOKIE["loggedinuser"];
require_once '../db/db_connect.php';
	if(isset($_POST["order"]))
	{
		if(!isset($_SESSION))
		{
			session_start();
			$cid = $_SESSION["cid"];
			require_once("../controllers/CustomerController.php");
			$customer = getCustomer($cid);
			
			$c_id = $customer["id"];
			$c_name = $customer["name"];
			$c_email = $customer["email"];
			
			$p_name = $product["name"];
			$p_price = $product["unit_price"];
			$p_quantity = $_POST["quantity"];
			$p_t_price = $p_price * $p_quantity;
			
			$query = "INSERT INTO `order` VALUES (NULL, $c_id, '$c_name', '$c_email', '$p_name', $p_quantity, $p_price, $p_t_price, current_timestamp())";
			$result=get($query);
			header("Location:orderSuccess.php");
		}
	}
?>
<center><h1 class="head">*** Welcome To Our Restaurent ***</h1></center>
<br>
<!--item starts -->
<div class="center">
	<form method="post" action="">
		<table>
			<tr>
				<td>
					<img class="item-image" src="<?php echo $product["image"];?>"></img><br>
					<input type="number" name="quantity" placeholder="1" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"><br>
					<input type="submit" name="order" class="btn btn-success" value="Add to Cart" style="width:185px;font-family:consolas;margin-top:5px;">
				</td>
				<td>
					<h1 class="text"><?php echo $product["name"];?></h1>
					<h2 class="text">BDT <?php echo $product["unit_price"];?></h2>
					<p class="text"> <?php echo $product["description"];?></p>
				</td>
			</tr>
		</table>
	
		<input type="submit" name="logout" class="logout" value="Log Out"><br>
	</form>
</div>
</body>
</html>