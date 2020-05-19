<?php
	 $serverName="localhost";
	 $userName="root";
	 $password="";
	 $dbName="restaurent";

	 $key=$_GET['sk'];
	$conn = mysqli_connect( $serverName, $userName, $password, $dbName);

	$query="SELECT name ,id FROM products WHERE name LIKE '%$key%'";
    $result=mysqli_query($conn,$query);
?>
<html>
<head>
<style>
a{
	text-decoration: none;
}
</style>
</head>
<table>
	<?php
		while($row = mysqli_fetch_assoc($result))
        {
           echo "<tr>";
           $id=$row["id"];
           $name=$row["name"];
           echo "<td>"."<a href='print.php?id=$id'>".$row["name"]."</a>"."</td>";
           echo "</tr>";			
        }
	?>
</table>