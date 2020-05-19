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
<title>Login form</title>
<link rel="stylesheet" href="">
<style>
body
{
	margin:0;
	padding:0;
	background:url("../storage/image/background.jpg");
	/*background-color: white;*/
	background-size:cover;
	font-family:sans-serif;
}
h1
{
	color:white;
	background-color:Black;
	margin:auto;
	padding:15px;
	font-size:50px
}

.do
{
	max-width:350px;
	/*border-radius:20px;*/
	/*margin:auto;*/
	background:url("../storage/image/background.jpg");
	background-size:cover;
	/*background:rgba(0,0,0,0.5);
	box-sizing:border-box;
	padding:20px;*/
	color:white;
	border: 2px solid #008CBA;
	
	/*background-color: white; 
    color: black; */
	
	padding: 100px 180px;
	font-weight:bold;
	font-size:25px;
	margin-right:40px;
	margin-left:40px;
	border-radius:10px;
	
	
}/*
.do[type="submit"]:hover
{
	border-color:red;
}
*/

.logout
{
	width:100px;
	height:50px;
	background:rgba(0,0,0,0.5);
	color:white;
	font-weight:bold;
	font-size:20px;
	border-radius:20px;
	position:absolute;
	top:calc(18%);
	left:calc(100% - 200px);
}
.logout[type="submit"]:hover
{
	background:#efed40;
	border-color:red;
	color:#262626;
}
center
{
	color:white;
}
#one
{
	background:image/chicken_biryani.jpg;
}
</style>

</head>
<body>


	<center><h1>*** Welcome To Our Restaurent ***</h1></center>
	<br><br><br><br><br>
	<form method="post" action="">
		<center>
		<table>
			<tr>
				<td>
					<a href=""><input type="submit" name="submit" class="do" id="one" value=""></a><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				<td>
				<a href=""><input type="submit" name="submit" class="do" value=""></a><br>
					<center>Chicken biryani<br>Peice: $150</center><br><br>
				</td>
				<td>
					<input type="submit" name="submit" class="do" value=""><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" class="do" value=""><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				<td
					><input type="submit" name="submit" class="do" value=""><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				<td>
					<input type="submit" name="submit" class="do" value=""><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" class="do" value=""><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				<td
					><input type="submit" name="submit" class="do" value=""><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				<td>
					<input type="submit" name="submit" class="do" value=""><br>
					<center>Rice<br>Peice: $50</center><br><br>
				</td>
				
			</tr>			
		
		</table>
		</center>
		<input type="submit" name="logout" class="logout" value="Log Out"></a><br>	
	</form>




			


</body>
</html>