<?php 
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:../index.php");
	}
	if(isset($_POST['logout']))
	{
		setcookie("loggedinuser","",time()-60);
		header("Location:../index.php");
	}
 ?>
<html>
<head>
	<link rel="stylesheet" href="../css/mystyle.css">
	<link rel="stylesheet" href="../css/LoginStyle.css">
</head>
<?php
	require "../admin/adminPage.php";
	require "../db/db_connect.php";
?>
<body>
<table border="2" align="left" width="50%" height="180px" bgcolor="#B7B0B0" >	 
	<tr align="center" bgcolor="#00FFFFFF">
		<th colspan=10>Confirm Order</th>
	</tr> 			
	<tr align="center">
		<th>Id</td>
		<th>Customer Id</th>
		<th>Customer Name</th>
		<th>Customer Email</th>
		<th>Product Name</th>
		<th>Product Quantity</th>
		<th>Product Price</th>
		<th>Total Price</th>
		<th>Order Price</th>
		<th>Confirm Date</th>
	</tr>
<?php
	$query="SELECT * FROM `confirm_order`";
	$result=get($query);
		
	foreach($result as $r)
	{
		echo "<tr align='center'>";
		echo "<td>".$r["id"]."</td>";
		echo "<td>".$r["c_id"]."</td>";
		echo "<td>".$r["c_name"]."</td>";
		echo "<td>".$r["c_email"]."</td>";
		echo "<td>".$r["p_name"]."</td>";
		echo "<td>".$r["p_quantity"]."</td>";
		echo "<td>".$r["p_price"]."</td>";
		echo "<td>".$r["p_t_price"]."</td>";
		echo "<td>".$r["o_date"]."</td>";
		echo "<td>".$r["c_date"]."</td>";
		echo "</tr>";
	}
?>

</table>
<table border="2" align="right" width="47%" height="180px" bgcolor="#B7B0B0" >	 
	<tr align="center" bgcolor="#00FFFFFF">
		<th colspan=10>Order List</th>		
	</tr> 			
	<tr align="center">
		<th>Id</th>
		<th>Customer Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Product Name</th>
		<th>Product Quantity</th>
		<th>Product Price</th>
		<th>Total Price</th>
		<th>Date</th>
		<th>Panding Order</th>
	</tr>
<?php
	$query="SELECT * FROM `order`";
	$result=get($query);
		
	foreach($result as $r)
	{
		echo "<tr align='center'>";
		echo "<td>".$r["id"]."</td>";
		echo "<td>".$r["c_id"]."</td>";
		echo "<td>".$r["c_name"]."</td>";
		echo "<td>".$r["c_email"]."</td>";
		echo "<td>".$r["p_name"]."</td>";
		echo "<td>".$r["p_quantity"]."</td>";
		echo "<td>".$r["p_price"]."</td>";
		echo "<td>".$r["p_t_price"]."</td>";
		echo "<td>".$r["date"]."</td>";
		echo '<td><a href="confirmOrderForAdmin.php?id='.$r["id"].'" class="btn btn-success">Confirm</a></td>';
		echo "</tr>";
	}
			
?>
</table>

	<form action="" method="post"> 
		<input type="submit" name="logout" class="logout" value="Log Out"><br>
	</form>

</body>
</html>