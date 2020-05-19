<?php
	require "db/db_connect.php";
	
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$err_invalid="";
	$has_error=false;
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['email']))
		{
			$err_email="*Email Required";
			$has_error=true;
		}
		else
		{
			$email=$_POST['email'];
		}
		
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		if(!$has_error)
		{
			$type=$_POST['type'];
			
			if($type == 'admin')
			{
				$query = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
				
				$result=get($query);
				print_r ($result);
				
				if(count($result)>0)
				{
					$rs=$result[0];
					//session_start();
					//$_SESSION['loggedinuser'] = $uname;
					setcookie("loggedinuser",$rs["name"],time()+600, "/");
					header("Location:admin/adminPage.php");
				}
				else
				{
					echo "invalid";
				}
			}
			else if($type == 'Manager')
			{
				$query = "SELECT * FROM manager WHERE email='$email' AND password='$pass'";
				
				$result=get($query);
				print_r ($result);
				
				if(count($result)>0)
				{
					$rs=$result[0];
					//session_start();
					//$_SESSION['loggedinuser'] = $uname;
					setcookie("loggedinuser",$rs["name"],time()+600, "/");
					header("Location:manager/managerPage.php");
				}
				else
				{
					echo "invalid";
				}
			}
			else
			{
				$query = "SELECT * FROM customer WHERE email='$email' AND password='$pass'";
				
				$result=get($query);
				print_r ($result);
				if(count($result)>0)
				{
					$rs=$result[0];
					//session_start();
					$id = $rs["id"];
					setcookie("loggedinuser",$rs["name"],time()+86400, "/");
					header("Location:products/show.php?id=$id");
				}
				else
				{
					echo "invalid";
				}
			}
		}		
	}
?>

<html>
	<head><title>Login</title>
	<link rel="stylesheet" href="css/LoginStyle.css">
	<style>

</style>
	</head>
	<body><br><br>
	<div class="loginBox">
		<img src="storage/image/usericon.png" class="user">
		<h2>Log In Here</h2>
			<form method="post" action="">
				<p>Email</p><input type="text" name="email" placeholder="abc@gmail.com"><span style="color:red"> <?php echo $err_email;?></span>
				<p>Password</p><input type="password" name="pass" placeholder="Enter Password"><span style="color:red"> <?php echo $err_pass;?></span><br>
					<select class="type" name="type">
						<option selected = "true">admin</option>
						<option>Manager</option>
						<option>Customer</option>
					</select>
				
				<input type="submit" name="submit" value="Log In"><br>
				<a href="customer/CustomerRegistation.php">Registation</a>
			</form>
	</div>


</body>
</html>