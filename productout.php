<?php
error_reporting(0);
 session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product Out</title>
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
		height: 40px;
		margin-top: 150px;
	}
    table th{
    	background-color: black;
    	color: white;
    	text-transform: capitalize;
    	border: none;
    	font-size: 15px;
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
<?php
include 'connection.php';
$sql="SELECT * FROM product_out";
$query=mysqli_query($conn,$sql);
?>
<center>
<table border="2 solid green">
	<th>PRODUCT ID</th>
	<th>PRICE</th>
	<th>LOCATION</th>
	<?php while($row=mysqli_fetch_array($query)){
?>
<tr>
	<td><?php echo $row['product_id']; ?></td>
	<td><?php echo $row['price']; ?></td>
	<td><?php echo $row['location']; ?></td>
</tr>
<?php }?>
</table>
</center>
</body>
</html>