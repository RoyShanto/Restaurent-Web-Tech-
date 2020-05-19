<?php
	$serverName="localhost";
	$username="root";
	$password="";
	$db_name="restaurent";
	function execute($query)
	{
		global $serverName,$username,$password,$db_name;
		$conn=mysqli_connect($serverName,$username,$password,$db_name);
		mysqli_query($conn,$query);
	}
	function get($query)
	{
		$data=array();
		global $serverName,$username,$password,$db_name;
		$conn=mysqli_connect($serverName,$username,$password,$db_name);
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result) > 0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$entity=array();
				foreach($row as $k=>$v)
				{
					$entity[$k]=$row[$k];
				}
				$data[]=$entity;
				
			}
		}
		mysqli_close($conn);
		return $data;
		
	}
?>