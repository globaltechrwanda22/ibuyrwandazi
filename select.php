<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Choose product</title>
	<style type="text/css">
		form{
			padding: 60px;
			border-radius: 10px;
		}
		input{
			border-radius: 10px;
			padding: 8px;
		}
		input[type="submit"]{
			margin-top: 10px;
			background-color: green;
			color: white;
			border: 1px solid; white ;
		}
		table{
			border: 1px solid green;
			position: relative;
			top: 50px;
			left: 50px;
			width: 300px;
		}
		tr{
			background-color: seagreen;
			color: white;
			height: 60px;
			text-align: center;
		}
	</style>
</head>
<body>
	<form method="GET">
<input type="text" name="product_name" placeholder="Product_Name">
<input type="submit" name="get" value="Type To Search">
</form>
<?php
include 'connection.php';
if (isset($_GET['get'])) {
	$product_name=$_GET['product_name'];
	$sql="SELECT * FROM product WHERE product_name='$product_name'";
	$res=mysqli_query($conn,$sql);
		echo "<table>
             <thead>
             <th>Product Name</th>
             <th>Quantity</th>
		";
		while ($row=mysqli_fetch_array($res)) {
			echo "<tr><td>{$row['product_name']}</td>
			<td>{$row['quantity']}</td>"
			;
		}
		echo "</tr></table>";
	}

?>
</body>
</html>