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
	<?php
	  require_once ('../controllers/ProductController.php');
	  $pid = $_GET["id"];
	  $product=getProduct($pid); 
	?>
	<div class="registrationBox">
		<h1>Edit Food</h1>
		<form method="post" action="../controllers/ProductController.php" enctype="multipart/form-data" class="form-horizontal form-material">
		<center>
			<table>
				<tr>
					<td><p>Food Name:</p></td>
					<td><input type="text" name="name" value="<?php echo $product["name"]?>"></td> 		
				</tr>
				<tr>
					<td><p>Price:</p></td>
					<td><input type="text" name="unit_price" value="<?php echo $product["unit_price"]?>"></td>	
				</tr>
				<tr>
					<td><p>Quantity:</p></td>
					<td><input type="text" name="unit_qty" value="<?php echo $product["unit_qty"]?>"></td>	
				</tr>
				<tr>
					<td><p>Description:</p></td>
					<td><input type="text" name="description" value="<?php echo $product["description"]?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
					<img class="item-image" style="margin-right:20px; width:100px" src="<?php echo $product["image"];?>"></img>
					</td>
				</tr>
				<tr>
					<td><p>Image:</p></td>
					<td><input type="file" name="image"></td>
						
					<input type="hidden" name="id" value="<?php echo $product["id"]?>" >
					<input type="hidden" name="prev_image" value="<?php echo $product["image"]?>" >
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" class="btn btn-success" name="edit_product" value="Edit Product" class="form-control">
					</td>
				</tr>	
			</table>
		</center>				
		</form>
	</div>
</body>
</html>