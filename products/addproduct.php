<html>
<head>
	<link rel="stylesheet" href="../css/managerStyle.css">
</head>
<body>
<?php
		// require "adminPage.php";
			$err_name="";
			$name="";
			$err_price="";
			$price="";
			$quantity="";
			$err_quantity="";
			$description="";
			$err_description="";
			$image="";
			$err_image="";
			if(isset($_POST['add_product']))
			{
				if(empty($_POST['name']))
				{
					$err_name="*Food Name Required";
				}
				else
				{			
					//$name=htmlspecialchars($_POST['name']);
					$name=$_POST['name'];
					echo $name ."<br>" ;
				}
				
				if (empty($_POST['price']))
				{
					$err_price="*Price Required";
				}
				else
				{
					$price=$_POST['price'];
					echo $price."<br>";
				}
				if (empty($_POST['quantity']))
				{
					$err_quantity="*Quantity Required";
				}
				else
				{
					$quantity=$_POST['quantity'];
					echo $quantity."<br>";
				}
				if (empty($_POST['description']))
				{
					$err_description="*Description Required";
				}
				else
				{
					$description=$_POST['description'];
					echo $description."<br>";
				}
				
				if (empty($_POST['image']))
				{
					$err_image="*Image Required";
				}
				else
				{
					$image=$_POST['image'];
					echo $image."<br>";
				}
			}
		?>
			<div class="registrationBox">
				<h1>Add Food</h1>
				<form method="post" action="../controllers/ProductController.php" enctype="multipart/form-data" class="form-horizontal form-material">
				<center>
					<table>
						<tr>
							<td><p>Food Name:</p></td>
							<td><input type="text" placeholder="Enter Food Name" value="<?php echo $name;?>" name="name" >
							<br><span style="color:red"><?php echo $err_name;?></span></td> 
							
						</tr>
						<tr>
							<td><p>Price:</p></td>
							<td><input type="text" name="price" placeholder="Enter Food Price" value="<?php echo $price;?>">
							<br><span style="color:red"><?php echo $err_price;?></span></td>
							
						</tr>
						<tr>
							<td><p>Quantity:</p></td>
							<td><input type="text" name="quantity" placeholder="Enter Food Quantity" value="<?php echo $quantity;?>">
							<br><span style="color:red"><?php echo $err_quantity;?></span></td>
							
						</tr>
						<tr>
							<td><p>Description:</p></td>
							<td><input type="text" name="description" placeholder="Enter Food Description" value="<?php echo $description;?>">
							<br><span style="color:red"><?php echo $err_description;?></span></td>
							
						</tr>
						<tr>
							<td><p>Image:</p></td>
							<td><input type="file" name="image" value="<?php echo $image;?>">
							<br><span style="color:red"><?php echo $err_image;?></span></td>
							
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" class="btn btn-success" name="add_product" value="Add Product" class="form-control">
							</td>
						</tr>	
					</table>
				</center>				
				</form>
			</div>
</body>
</html>