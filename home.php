<?php 
error_reporting(0);
session_start();
if ($_SESSION['username']){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Shopping Rwanda</title>
</head>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		background-color: steelblue;
	}
	.navbar{
		background-color: #fff;
		text-align: center;
	}
	.navbar ul li{
		display: inline-flex;
		padding: 20px;
		font-family: Tahoma,Verdana,Segoe,sans;
		margin-top: 20px;
	}
	.navbar a{
		text-decoration: none;
		font-family: Tahoma,Verdana,Segoe,sans;
	}
</style>
<body>
<?php include 'dashboard.php';?>
<hr><hr>
<div class="navbar" >
	<nav>
		<ul>
			<li><a href="product.php">Product</a></li>
			<li><a href="productin.php">Product In</a></li>
			<li><a href="productout.php">Product Out</a></li>
			<li><a href="report.php">Report</a></li>
		</ul>
	</nav>
</div>
</body>
</html>
<?php
}
else{
	header('location:login.php');
}
?>