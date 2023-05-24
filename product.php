<?php
error_reporting(0);
 session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product</title>
</head>
<style type="text/css">
	form{
		margin-left: 350px;
		margin-top: 50px;
		padding: 20px;
	}
	form input{
		padding: 8px;
		border: 2px solid green;
		color: black;
		border-radius:10px ;
	}
	form input[type="submit"]{
		background-color: gray;
	}
	table{
		width: 100vh;
		height: 50px;

	}
    table th{
    	background-color: black;
    	color: white;
    	text-transform: capitalize;
    	border: none;
    	font-size: 20px;
    	font-weight: bold;
    }
    table tr{
    	text-align: center;
    	font-size: 15px;
    	background-color: white;
    	border: 0px;
    }
</style>
<body>
<?php include 'home.php';?>
<form method="POST">
	<input type="text" name="product_id" placeholder="Product_Id">
	<input type="text" name="product_name" placeholder="Product_Name">
	<input type="text" name="quantity" placeholder="Quantity">
	<input type="submit" name="update" value="CHANGE">
</form>
<?php
include 'connection.php';
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$quantity=$_POST['quantity'];
$sql="UPDATE product SET product_name='$product_name',quantity='$quantity' WHERE product_id='$product_id'";
$query=mysqli_query($conn,$sql);
?>
<p><a href="addproduct.php" style="color: palegreen; text-decoration: none; font-family: Verdana; font-weight: bold; margin-left: 50px;">ADD + NEW PRODUCT</a></p>
<?php
include 'connection.php';
$sql="SELECT * FROM product";
$query=mysqli_query($conn,$sql);
?>
<center>
<table border="2 solid green">
	<th>PRODUCT ID</th>
	<th>PRODUCT NAME</th>
	<th>QUANTITY</th>
	<th >ACTION</th>
	<?php while($row=mysqli_fetch_array($query)){
?>
<tr>
	<td><?php echo $row['product_id']; ?></td>
	<td><?php echo $row['product_name']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
	<td><a href="deleteproduct.php?product_id=<?php echo $row['product_id'];?>">DELETE</td>
</tr>
<?php }?>
</table>
</center>
</body>
</html>