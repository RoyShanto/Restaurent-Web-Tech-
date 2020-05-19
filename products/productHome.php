<?php
	require "../admin/adminPage.php";
	require '../controllers/ProductController.php';
	$products = getAllProducts();
?>
<html>
<head>
<style>

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
	top:calc(%);
	left:calc(100% - 125px);
	top: calc(%);
	top: calc(5%);
}
.btn{
	font-family:consolas;
	display: inline-block;
    padding: 6px 0px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
.btn-danger{
	color: #fff;
    background-color: #e32f2f;
    border-color: #4cae4c;
}
a{
	text-decoration: none;
}
</style>
	<script>
		function search()
		{
			http = new XMLHttpRequest();
			var search_word=document.getElementById("search_input").value;
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("search_result").innerHTML=http.responseText;
				}
			}
			http.open("GET","search_product.php?sk="+search_word,true);
		    http.send();
		}
		
	</script>
</head>
	<body>
<!--Add Products starts -->
		<table align="right" width="30%" height="200">
			<tr>
				<td><?php require "addproduct.php"?></td>
			</tr>
		</table>
<!--Add Products Ends -->
<div border=2 style="position:absolute; left:calc(63% - 44px); background-color:white"; >
	<input type="text" placeholder="Search By Name" id="search_input" onkeyup="search()" name="search_value" />
	<div id="search_result">
	</div>		
</div>
<!--All Products starts -->
		<table border="2" align="left" width="60%" height="200" bgcolor="#B7B0B0">
			<div class="center">	
				<thead align="center" bgcolor="#00FFFFFF">
					<th colspan=10><a href="productHome.php">All Products</a></th>	
				</thead> 
				<thead align="center">
					<th>Sl#</th>
					<th> Name</th>
					<th> Price</th>
					<th> Quantity</th>
					<th> Description</th>
					<th> Image</th>
					<th colspan=2>Action</th>
				</thead>
				<tbody>
					<?php
						foreach($products as $product)
						{
							echo "<tr>";
								echo "<td>".$product["id"]."</td>";
								echo "<td>".$product["name"]."</td>";
								echo "<td>".$product["unit_price"]."</td>";
								echo "<td>".$product["unit_qty"]."</td>";
								echo "<td>".$product["description"]."</td>";
								echo "<td>".$product["image"]."</td>";
								echo '<td><a href="editproductPage.php?id='.$product["id"].'" class="btn btn-success">Edit</a></td>';
								echo '<td><a href="deleteproduct.php?id='.$product["id"].'" class="btn btn-danger">Delete</a></td>';
							echo "</tr>";
						}
					?>
				</tbody>
			</div>
		</table>
				
<!--All Products Ends -->
	</body>
</html>