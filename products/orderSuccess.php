<?php 
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:../index.php");
	}
	if(isset($_POST['logout']))
	{
		setcookie("loggedinuser","",time()-60,"/");
		header("Location:../index.php");
	}
 ?>

<html>
<head>
	<link rel="stylesheet" href="../css/mystyle.css">
	<style>

	</style>
</head>
<body>
<center><h1 class="head">*** Welcome To Our Restaurent ***</h1></center><br>
<?php
	if(!isset($_SESSION))
	{
		session_start();
		$cid = $_SESSION["cid"];
		require_once("../controllers/CustomerController.php");
		$customer = getCustomer($cid);
		
		global $c_id;
		$c_id = $customer["id"];
		$c_name = $customer["name"];
		
		echo "<center><h1>Order Successful by $c_name</h1></center>";
	}
?>
	<form method="post" action="">
		<input type="submit" name="logout" class="logout" value="Log Out"><br>
	</form>
	<center><h2><a href="show.php?id=<?php echo $c_id; ?>">Click hear</a> For more product..!</h2></center>
</body>
</html>