<?php
	require "../admin/adminPage.php";
	require '../controllers/ManagerController.php';
	$manager = getAllManagers();
	
	if(isset($_POST['searchManager']))
	{	
		$manager= searchManager();
	}
?>
<html>
<head>
	<link rel="stylesheet" href="../css/mystyle.css">
</head>
<body>

<table align="right" align="center" width="30%" height="200">
	<tr>
		<td>
			<?php require "editmanagerform.php";?>
		</td>
	</tr>
</table>

<table border="2" align="center" width="70%" height="300" bgcolor="#B7B0B0">	 

	<form method="post" action="">
		<input style="width:960px" type="text" placeholder="Search By Name" name="search_value">
		<input style="width:100px; background-color:#6565ff; color:white" type="submit" name="searchManager" value="Search">
	</form>
	
	
	
	<tr align="center" bgcolor="#00FFFFFF">
		<td colspan=11><a href="manager.php">Manager List</a></td>
	</tr> 			
	<tr align="center">
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>Date-Of-Birth</td>
		<td>Phone-No</td>
		<td>Address</td>
		<td>Gender</td>
		<td>Work-Experience</td>
		<td colspan=2>Action</td>
	</tr>
<?php
	$query="SELECT * FROM manager";
	$manager=get($query);
		
	foreach($manager as $r)
	{
		echo "<tr align='center'>";
		echo "<td>".$r["id"]."</td>";
		echo "<td>".$r["name"]."</td>";
		echo "<td>".$r["email"]."</td>";
		echo "<td>".$r["password"]."</td>";
		echo "<td>".$r["date_of_birth"]."</td>";
		echo "<td>".$r["phone_no"]."</td>";
		echo "<td>".$r["address"]."</td>";
		echo "<td>".$r["gender"]."</td>";
		echo "<td>".$r["work_experience"]."</td>";
		echo '<td><a href="editmanager.php?id='.$r["id"].'" class="btn btn-success">Edit</a></td>';
		echo '<td><a href="deletemanager.php?id='.$r["id"].'" class="btn btn-danger">Delete</a></td>';
		echo "</tr>";
	}
?>
</table>
</body>
</html>