<html>
	<head>
	<link rel="stylesheet" href="../css/managerStyle.css">
	</head>
	<body>
	<?php
		// require "../db/db_connect.php";
		$err_name="";
		$name="";
		$err_email="";
		$email="";
		$err_pass="";
		$pass="";
		$DOB="";
		$err_phone="";
		$phone="";
		$err_address="";
		$address="";
		$gender="";
		$err_gender="";
		$work_experience="";
		$err_work_experience="";
		$has_error=false;
		if(isset($_POST['add_manager']))
		{
			if(empty($_POST['name']))
			{
				$err_name="*Name Required";
				$has_error=true;
			}
			else
			{			
				$name=htmlspecialchars($_POST['name']);
			}
			if(empty($_POST['email']))
			{
				$err_email="*E-mail required";
				$has_error=true;
			}
			else
			{
				$email=$_POST['email'];
			}
			if (empty($_POST['pass']))
			{
				$err_pass="*Password Required";
				$has_error=true;
			}
			else
			{
				$pass=$_POST['pass'];
			}
			$DOB=$_POST['dob'];
			if (empty($_POST['phone']))
			{
				$err_phone="*Phone No Required";
				$has_error=true;
			}
			else
			{
				$phone=$_POST['phone'];
			}
			if(empty($_POST['address']))
			{
				$err_address="*Address Required";
				$has_error=true;
			}
			else
			{
				$address=$_POST['address'];
			}
			if(empty($_POST['gender']))
			{
				$err_gender="*Gender Required";
				$has_error=true;
			}
			else
			{
				$gender=$_POST['gender'];
			}
			if(empty($_POST['work_experience']))
			{
				$err_work_experience="*Work Experience Required";
				$has_error=true;
			}
			else
			{
				$work_experience=$_POST['work_experience'];
			}
			if(!$has_error)
			{
				$query="INSERT INTO `manager` (`id`, `name`, `email`, `password`,`date_of_birth`, `phone_no`, `address`, `gender`, `work_experience`)
				VALUES ('NULL','$name','$email','$pass','$DOB','$phone','$address','$gender','$work_experience');";
				execute($query);
				header("Location:../manager/manager.php");
			}
		}
	?>
		<div class="registrationBox">
			<h1>Add Manager</h1>
			<form method="post" action="" >
				<table>
					<tr>
						<td><p>Name:</p></td>
						<td><input type="text" placeholder="Enter Name" value="<?php echo $name;?>" name="name" >
							<br><span style="color:red"><?php echo $err_name;?></span></td> 
					</tr>
					<tr>
						<td><p>E-mail: </p></td>
						<td><input type="email" name="email" placeholder="Enter E-mail" value="<?php echo $email; ?>">
						<br><span style="color:red"><?php echo $err_email?></span></td>
					</tr>
					<tr>
						<td><p>Password:</p></td>
						<td> <input type="text" name="pass" placeholder="Enter Password" value="<?php echo $pass;?>">
						<br><span style="color:red"><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td><p>Date Of Birth: </p></td>
						<td><input type="date" name="dob"></td>
					</tr>
					<tr>
						<td><p>Phone No: </p></td>
						<td><input type="text" name="phone" placeholder="Enter Phone No" value="<?php echo $phone; ?>">
						<br><span style="color:red"><?php echo $err_phone; ?></span></td>
					</tr>
					<tr>
						<td><p>Address: </p></td>
						<td><input type="text" name="address" placeholder="Enter Address" value="<?php echo $address; ?>">
						<br><span style="color:red"><?php echo $err_address; ?></span></td>
					</tr>
					<tr>
						<td><p>Gender: </p></td>
						<td><br><input type="radio" name="gender" value="Male"> <span class="n">Male</span> <input type="radio" name="gender" value="Female"> <span class="n">Female</span></td>
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
							<input type="submit" name="add_manager" value="Add">
						</td>
					</tr>	
				</table>
			</form>
		</div>
	</body>
</html>