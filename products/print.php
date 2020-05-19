<?php
require "../admin/adminPage.php";
	$id= $_GET['id'];
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbName="restaurent";
	$conn = mysqli_connect($serverName, $userName,  $password, $dbName);

	$query="SELECT * FROM products WHERE id='$id'";
    $rs=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/managerStyle.css">
<link rel="stylesheet" href="../css/mystyle.css">
	<title></title>
</head>
<body>
	<table border="2" align="center" width="70%" height="200" bgcolor="#B7B0B0">
		<tr align="center" bgcolor="#00FFFFFF">
			<th colspan=10>Search Product</th>	
		</tr> 
		<tr align="center">
			<th>Sl#</th>
			<th> Name</th>
			<th> Price</th>
			<th> Quantity</th>
			<th> Description</th>
			<th> Image</th>
			<th colspan=2>Action</th>
		</tr>
		<?php
			while($row = mysqli_fetch_assoc($rs))
	        {
	           echo "<tr>";	
	           echo "<td>".$row["id"]."</td>";
	           echo "<td>".$row["name"]."</td>";	
	           echo "<td>".$row["unit_price"]."</td>";
	           echo "<td>".$row["unit_qty"]."</td>";
	           echo "<td>".$row["description"]."</td>";
			   echo "<td>".$row["image"]."</td>";
				echo '<td><a href="editproductPage.php?id='.$row["id"].'" class="btn btn-success">Edit</a></td>';
				echo '<td><a href="deleteproduct.php?id='.$row["id"].'" class="btn btn-danger">Delete</a></td>';
	           echo "</tr>";			
	        }
		?>
    </table>
	
</body>
</html>