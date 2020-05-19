<html>
<head>
	<title>Dashboard - Add Admin</title>
	<link rel="stylesheet" href="../css/managerStyle.css">
	<script>
		function validate_form()
		{
			var valid = true;
			document.getElementById("err_fname").innerHTML = "";
			var name=document.forms["myForm"]["name"].value;

			document.getElementById("err_email").innerHTML = "";
			var email=document.forms["myForm"]["email"].value;
			
			document.getElementById("err_pass").innerHTML = "";
			var pass=document.forms["myForm"]["pass"].value;
			
			document.getElementById("err_pass2").innerHTML = "";
			var pass2=document.forms["myForm"]["pass2"].value;
			
			document.getElementById("err_mobile_no").innerHTML = "";
			var mobile_no=document.forms["myForm"]["mobile_no"].value;
			
			document.getElementById("err_address").innerHTML = "";
			var address=document.forms["myForm"]["address"].value;

				
			
			document.getElementById("err_gender").innerHTML = "";
			var gender=document.forms["myForm"]["gender"].value;

			
			if(name == "" || name == null)
			{
				
				document.getElementById("err_fname").innerHTML="Please Enter Your Name";
				valid = false;
			}
			if(email == "" || email == null)
			{
				
				document.getElementById("err_email").innerHTML="Please Enter Your Email Address";
				valid = false;
			}
			if(pass== "" || pass == null)
			{
				
				document.getElementById("err_pass").innerHTML="Please Enter Your Password";
				valid = false;
			}
			if(pass.length<8)
			{
				document.getElementById("err_pass").innerHTML="Password At Least 8 Character";
				valid = false;
			}
			if(pass2== "" || pass2 == null)
			{
				
				document.getElementById("err_pass2").innerHTML="Please Enter Your Confirm Password";
				valid = false;
			}
			if(pass != pass2)
			{
				
				document.getElementById("err_pass2").innerHTML="Password Don't Match";
				valid = false;
			}
			if(mobile_no == "" || mobile_no == null)
			{
				
				document.getElementById("err_mobile_no").innerHTML="Please Enter Your Mobile Number";
				valid = false;
			}
			if(address== "" || address == null)
			{
				
				document.getElementById("err_address").innerHTML="Please Enter Your Address";
				valid = false;
			}
			if(gender == "" || gender == null)
			{
				
				document.getElementById("err_gender").innerHTML="Please Select Your Gender";
				valid = false;
			}
			return valid;
		}
	</script>
</head>
<body><br><br><br>
	<div class="registrationBox" >
		<h1>Registration</h1>
		<form id="register" method="POST" onsubmit="return validate_form()" enctype="multipart/form-data" action="../controllers/CustomerController.php" name="myForm">
			<table>
				<tr>
					<td><p>Name:</p></td>
					<td><input type="text" name="name" placeholder="Enter The First Name" class="from-control" id="name"> <br> <p style="color: red;" id="err_fname"></p></td>
				</tr>
				<tr>
					<td><p>E-mail:</p></td>
		            <td><input type="email" name="email" placeholder="Enter The Email" class="from-control" id="email"><br> <p style="color: red;" id="err_email"> </p></td>
				</tr>
				<tr>
					<td><p>Password:</p></td>
					<td><input type="password" name="pass" placeholder="Enter The Password" class="from-control" id="pass"><br> <p style="color: red;" id="err_pass"> </p></td>
				</tr>
				<tr>
					<td><p>Confirm Password:</p></td>
					<td><input type="password" name="pass2" placeholder="Enter The Confirm Password" class="from-control" id="pass2"><br> <p style="color: red;" id="err_pass2"> </p></td>
				</tr>
				<tr>
					<td><p>Phone No:</p></td>
					<td><input type="number" placeholder="Enter The Mobile Number" name="mobile_no" class="from-control" id="mobile_no"><br> <p style="color: red;" id="err_mobile_no"> </p></td>
				</tr>
				<tr>
					<td><p>Address:</p></td>
					<td><input type="text" name="address" placeholder="Enter The Address" class="from-control" id="address"><br> <p style="color: red;" id="err_address"> </p></td>
				</tr>
				<tr>
					<td><p>Gender:</p></td>
					<td><br><input type="radio" name="gender" id="gender" value="Male"> <span class="n">Male</span> 
					<input type="radio" name="gender" id="gender" value="Female"> <span class="n">Female</span><br> 
					<p style="color: red;" id="err_gender"> </p></td>
				</tr>
				<tr>
					<td colspan="3">
						<input class="btn" type="submit" name="add_customer" id="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>