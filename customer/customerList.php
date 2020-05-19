<html>
<head>
	<link rel="stylesheet" href="../css/LoginStyle.css">
</head>
<body>
<?php
require "../admin/adminPage.php";
require '../controllers/CustomerController.php';
$customer = getAllCustomer();
$s_value="";
if(isset($_POST['searchManager']))
	{	
		$customer= searchCustomer();
		$s_value = $_POST['search_value'];
	}
?>

<table border="2" align="center" width="80%" bgcolor="#B7B0B0">

	<form method="post" action="">
		<tr><td colspan=6><input style="width:100%;" type="text" placeholder="Search By Name" name="search_value" value="<?php echo $s_value; ?>"></td>
		<td colspan=2><input style="width:100%; background-color:#6565ff; color:white" type="submit" name="searchManager" value="Search"></td></tr>
	</form>
	
	<tr align="center" bgcolor="#00FFFFFF">
		<td colspan=11><a href="customerList.php">Customer List</a></td>		
	</tr> 			
	<tr align="center">
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>Phone-No</td>
		<td>Gender</td>
		<td>Address</td>
	</tr>
<?php
	 // $query="SELECT * FROM customer";
	 // $manager=get($query);
		
	foreach($customer as $r)
	{
		echo "<tr align='center'>";
		echo "<td>".$r["id"]."</td>";
		echo "<td>".$r["name"]."</td>";
		echo "<td>".$r["email"]."</td>";
		echo "<td>".$r["password"]."</td>";
		echo "<td>".$r["phone no"]."</td>";
		echo "<td>".$r["gender"]."</td>";
		echo "<td>".$r["address"]."</td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>