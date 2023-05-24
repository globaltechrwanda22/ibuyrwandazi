<?php 
error_reporting(0);
session_start();?>
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
		padding: 10px;
		font-family: Tahoma,Verdana,Segoe,sans;
		margin-top: 20px;
	}
	.navbar a{
		text-decoration: none;
		font-family: Tahoma,Verdana,Segoe,sans;
	}
	.iframe{
		position: relative;
		left: -60%;
		top: 40px;
	}
</style>
<body>
<div class="navbar" >
	<nav>
		<ul>
			<li><a href="category.php">Electronic Device</a></li>
			<li><a href="category.php">Cinema</a></li>
			<li><a href="category.php">Sport</a></li>
			<li><a href="category.php">Baby&Kids</a></li>
			<li><a href="category.php">Pets</a></li>
			<li><a href="#">Event Ticket</a></li>
			<li><a href="logout.php" style="color: green; font-weight: bold;">Logout</li>
		    <li><a href="dash.php" style="color: yellowgreen; font-weight: bold; position: relative; left: 89%;">Back</li>
		</ul>
	</nav>
</div>
<div class="iframe">
	<iframe src="select.php" width="400px" height="400px"></iframe>
</div>
</body>
</html>