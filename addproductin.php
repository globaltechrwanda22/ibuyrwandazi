<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD PRODUCT IN</title>
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
<form action="" method="POST">
	<label>Product Id</label>
	<br>
	<input type="text" name="product_id" placeholder="Product Id" >
	<br><br>
	<label>Price</label>
	<br>
	<input type="text" name="price" placeholder="Price" >
	<br><br>
	<label>Location</label>
	<br>
	<input type="text" name="location" placeholder="Location" >
	<br><br>
	<input type="submit" name="Add" value="  ADD  ">
</form>
</fieldset>
</center>
</body>
<?php
include 'connection.php';
if (isset($_POST['Add'])) {
$product_id=$_POST['product_id'];
$price=$_POST['price'];
$location=$_POST['location'];
$sql="INSERT INTO product_in(product_id,price,location) VALUES('$product_id','$price','$location')";
$query=mysqli_query($conn,$sql);
if ($query) {
	header('location:productin.php');	
}

}
?>
</html>