<?php
session_start();
include 'connection.php';
$product_id=$_GET['product_id'];
$sql="DELETE FROM product WHERE product_id='$product_id'";
$result=mysqli_query($conn,$sql);
header('location:product.php');
?>