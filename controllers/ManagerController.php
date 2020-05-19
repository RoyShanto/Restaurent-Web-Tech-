<?php
	require_once "../db/db_connect.php";
	if(isset($_POST["add_manager"]))
	{
		insertManager();
	}
	else if(isset($_POST["edit_manager"]))
	{
		editManager();
	}
	function getAllManagers()
	{
		$query ="SELECT * FROM manager";
		$manager = get($query);
		return $manager;	
	}
	function getManager($id)
	{
		$query="SELECT * FROM manager WHERE id=$id";
		$manager=get($query);
		return $manager[0];
	}
	function searchManager()
	{
		$searchKey= $_POST['search_value'];
		$query="SELECT * FROM manager WHERE name LIKE '%$searchKey%'";
		$manager=get($query);
		return $manager;
		header("Location:../manager/manager.php");
	}
	 function deleteManager($id)
	 {
		$query="DELETE FROM manager WHERE id=$id";
		$product=get($query);
		header("Location:../manager/manager.php");
	 }
	function insertManager()
	{
		
		// $name=$_POST["name"];
		// $email=$_POST['email'];
		// $pass=$_POST['pass'];
		// $cpass=$_POST['cpass'];
		// $DOB=$_POST['dob'];
		// $phone=$_POST['phone'];
        // $address=$_POST['address'];
        // $gender=$_POST['gender'];
		// $work_experience=$_POST['work_experience'];
		
		// $query="INSERT INTO `manager` (`id`, `name`, `email`, `password`,`date_of_birth`, `phone_no`, `address`, `gender`, `work_experience`)
		// VALUES ('NULL','$name','$email','$pass','$DOB','$phone','$address','$gender','$work_experience');";
		// execute($query);
		// header("Location:../manager/manager.php");
		
	}
	function editManager()
	{
		$id = $_POST["id"];  //it is not get id
		echo $id;
		$name=$_POST["name"];
		echo $name;
		$email=$_POST['email'];
		$password=$_POST['password'];
		$date_of_birth=$_POST['date_of_birth'];
		$phone_no=$_POST['phone_no'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
		$work_experience=$_POST['work_experience'];
		
		$query="UPDATE manager SET name='$name',email='$email',password=$password,date_of_birth='$date_of_birth',
		phone_no=$phone_no, address='$address', gender='$gender', work_experience='$work_experience' WHERE id=$id";
		execute($query);
		header("Location:../manager/manager.php");
	}
?>