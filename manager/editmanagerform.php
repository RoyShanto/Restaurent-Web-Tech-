<html>
<head>
	<link rel="stylesheet" href="../css/managerStyle.css">
</head>
<body>
<?php
	require_once ('../controllers/ManagerController.php');
	$mid = $_GET["id"];
	//echo $mid;
	$manager=getManager($mid);  
?>
<!--editproduct starts -->
<div class="registrationBox">
<h1>Edit Manager</h1>
<form method="post" action="../controllers/ManagerController.php" enctype="multipart/form-data" class="form-horizontal form-material">
	<table>
			<input type="hidden" name="id" value="<?php echo $manager["id"]?>" >
		<tr>
			<td><p>Name:</p></td>
			<td><input type="text" name="name" value="<?php echo $manager["name"]?>" class="form-control"></td>
		</tr>
		<tr>
			<td><p>E-mail: </p></td>
			<td><input type="email" name="email" value="<?php echo $manager["email"]?>" class="form-control"></td>
		</tr>
		<tr>
			<td><p>Password:</p></td>
			<td> <input type="text" name="password" value="<?php echo $manager["password"]?>" class="form-control"></td>
		</tr>
		<tr>
			<td><p>Date Of Birth: </p></td>
			<td><input type="date" name="date_of_birth" value="<?php echo $manager["date_of_birth"]?>" class="form-control"></td>
		</tr>
		<tr>
			<td><p>Phone No: </p></td>
			<td><input type="text" name="phone_no" value="<?php echo $manager["phone_no"]?>" class="form-control"></td>
		</tr>
		<tr>
			<td><p>Address: </p></td>
			<td><input type="text" name="address" value="<?php echo $manager["address"]?>" class="form-control"></td>
		</tr>
		<tr>
			<td><p>Gender: </p></td>
			<td><br><input type="radio" name="gender" value="Male"> <span class="n">Male</span>
					<input type="radio" name="gender" value="Female"> <span class="n">Female</span></td>
		</tr>
		<tr>
			<td><p>Work Experience:</p></td>
			<td><br>
			<input type="radio" name="work_experience" value="No Experience"><span class="n">No Experience</span><br>
			<input type="radio" name="work_experience" value="Less Than 2 Year"><span class="n">Less Than 2 Year</span><br>
			<input type="radio" name="work_experience" value="More Than 2 Year"><span class="n">More Than 2 Year</span><br>		
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" class="btn btn-success" name="edit_manager" value="Edit Manager" class="form-control">
			</td>
		</tr>
	</table>	
</form>			
</div>

<!--editproduct ends -->
<body>
</html>