<?php 
error_reporting(0);
session_start();
if ($_SESSION['username'])
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		background-color: steelblue;
		background-repeat: no-repeat;
		background-size: 100%;
	}
	.nav{
		background-color: #fff;
		text-align: center;
		height: 100px;
	}
	.nav ul li{
		position: relative;
		top: -35px;
		display: inline-flex;
		padding: 20px;
		font-family: Tahoma,Verdana,Segoe,sans;
		text-decoration: none;
		list-style: none;
	}
	.nav a{
		text-decoration: none;
		list-style: none;
		text-transform: capitalize;
	}
	.nav p{
		font-family: Verdana;
		font-size: 20px;
		position: relative;
		top: -45px;
	}
	.nav.logout{
         color: green;
         font-size: 20px;
	}
.box1{
	position: relative ;
	top: 40px;
	left: 5%;
	width: 200px;
	height: 300px;
}
.box1 img{
	width: 200px;
	height: 300px;
	border: 2px solid green;
	border-radius: 10px;
}
.box2{
	position: relative ;
	top: -42vh;
	left: 20%;
	width: 200px;
	height: 300px;
}
.box2 img{
	width: 200px;
	height: 300px;
	border: 2px solid green;
	border-radius: 10px;
}
.box3{
	position: relative ;
	top: -90.5vh;
	left: 35.5%;
	width: 200px;
	height: 300px;
}
.box3 img{
	width: 200px;
	height: 300px;
	border: 2px solid green;
	border-radius: 10px;
}
.box4{
	margin-top: -64.5%;
	margin-left: 51%;
	width: 200px;
	height: 300px;
}
.box4 img{
	width: 200px;
	height: 300px;
	border: 2px solid green;
	border-radius: 10px;
}
.box5{
	position: relative;
	top: -48vh;
	left: 66.5%;
	width: 200px;
	height: 300px;
}
.box5 img{
	width: 200px;
	height: 300px;
	border: 2px solid green;
	border-radius: 10px;
}
</style>
</head>
<body>
<div class="nav">
	<img src="images/toggle-icon.png" style="background-color: black; position: relative; left: -45%; top: 40px;">
	<nav>
		<p><b>IBUY RWANDA</b></p>
		<ul>
			<li><a href="dash.php">Home</li>
			<li><a href="category.php">Category</a></li>
			<li><a href="Shopping">Shopping</li>
			<li><a href="about.php">About Us</li>
			<li><a href="contact.php">Contact Us</li>
			<li><a href="logout.php" style="color: green; font-weight: bold;">Logout</li>
		</ul>
	</nav>
</div>
<div>
<div>
	<div class="box1">
		<img src="images/tshirt-img.png">
	</div>
	<div class="box2">
		<img src="images/women-clothes-img.png">
	</div>
	<div class="box3">
		<img src="images/kangan-img.png">
	</div>
	<div class="box4">
		<img src="images/mobile-img.png">
	</div>
		<div class="box5">
		<img src="images/laptop-img.png">
	</div>
</div>	
</div>
</body>
<?php
}
else{
	header('location:login.php');
}
?>
</html>
