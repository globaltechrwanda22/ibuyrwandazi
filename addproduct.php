<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD PRODUCT</title>
</head>
<style type="text/css">
	fieldset{
		width: 300px;
		height: 300px;
		border: none;
		text-align: center;
		margin-left: 1%;
		margin-top: 50px;
	}
	fieldset p{
		font-family: sans-serif;
		font-size: 20px;
		padding: 20px;
		}
	fieldset label{
		font-size: 15px;
	}
	form input[type="submit"]{
		background-color: gray;
		border-radius: 10px;
	}
</style>
<body>
<?php include 'home.php';?>
<center>
<fieldset>
	<p>ADD NEW PRODUCT</p>
<form method="POST">
	<label>Product Id</label>
	<br>
	<input type="text" name="product_id" placeholder="Product Id" >
	<br><br>
	<label>Product Name</label>
	<br>
	<input type="text" name="product_name" placeholder="Product Name" >
	<br><br>
	<label>Quantity</label>
	<br>
	<input type="text" name="quantity" placeholder="Quantity" >
	<br><br>
	<input type="submit" name="Add" value="  ADD  ">
</form>
</fieldset>
</center>
</body>
<?php
include 'connection.php';
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$quantity=$_POST['quantity'];
$sql="INSERT INTO product (product_id,product_name,quantity) VALUES('$product_id','$product_name','$quantity')";
$query=mysqli_query($conn,$sql);
if ($query) {
	header('location:product.php');
}
	
?>
</html>