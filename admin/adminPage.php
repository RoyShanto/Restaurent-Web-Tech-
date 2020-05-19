<?php 
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:../index.php");
	}
	if(isset($_POST['logout']))
	{
		setcookie("loggedinuser","",time()-60,"/");
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
	max-width: 350px;
    border-radius: 25px;
    margin: auto;
    background: rgba(0,0,0,0.5);
    /* box-sizing: border-box; */
    padding: 10px;
    color: white;
    font-weight: bold;
    font-size: 30px;
	margin-left: 180px;
    /*margin-top: 10px;*/
}
.do[type="submit"]:hover
{
	background:#efed40;
	color:#262626;
}
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
	top:calc(5%);
	left:calc(100% - 125px);
}
.logout[type="submit"]:hover
{
	background:#efed40;
	color:#262626;
}
</style>

</head>
<body>


	<center><h1>*** Admin Page ***</h1></center>
	<a href="../manager/manager.php"><input type="submit" name="submit" class="do" value="Manager"></a>
	<a href="../customer/customerList.php"><input type="submit" name="submit" class="do" value="Customer"></a>
	<a href="../manager/managerPageForAdmin.php"><input type="submit" name="submit" class="do" value="Order"></a>
	<a href="../products/productHome.php"><input type="submit" name="submit" class="do" value="Food"></a><br>


	<form action="" method="post"> 
		<input type="submit" name="logout" class="logout" value="Log Out"><br>
	</form>
</body>
</html>