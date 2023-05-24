<?php
include 'connection.php';
$product_id=$_GET['product_id'];
$sql="SELECT * FROM product_in where product_id='$product_id'";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$price=$row['price'];
$location=$row['location'];
$sql1=mysqli_query($conn,"INSERT INTO product_out(price,location) values('$price','$location')");

if ($sql1==true) {
	$product_id=$_GET['product_id'];
	$sql2="DELETE FROM product_in where product_id='$product_id'";
	$result1= mysqli_query($conn,$sql2);
}
header("location:productin.php");
?>