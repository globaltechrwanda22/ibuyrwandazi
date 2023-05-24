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
	<title>Dashboard</title>
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		background-color: steelblue;
	}
	.nav{
		background-color: #fff;
		text-align: center;
		height: 100px;
	}
	.nav ul li{
		position: relative;
		top: -55px;
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
	.dropdown {
  display: inline-block;
  font-family: Tahoma,Verdana,Segoe,sans;
    position: relative;
		top: -55px;
}
.dropdown-content {
	 position: relative;
	top: 70px;
	height: 240px;
	margin-left: -60px;
  font-family: Tahoma,Verdana,Segoe,sans;
  display: none;
  border-radius: 10px;
  position: absolute;
  background-color: white;
  min-width: 180px;
  
}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown p a{
	font-family: Tahoma,Verdana,Segoe,sans;
	font-size: 15px;

}


</style>
</head>
<body>
<div class="nav">
	<img src="images/toggle-icon.png" style="background-color: black; position: relative; left: -45%; top: 40px;">
	<nav>
		<p><b>IBUY RWANDA</b></p>
		<ul>
			<li><a href="dashboard.php">Home</li>
				<li><a href="home.php">Latest</li>
			<div class="dropdown">
  <span>Category</span>
  <div class="dropdown-content">
  	<p><a href="">.........</a></p>
    <p><a href="">.........</a></p> 
    <p><a href="">Mobile Phone & Tablets</p>
    <p><a href="">Electronics & Applicances</a></p>
    <p><a href="">Real Estate</a></p>
    <p><a href="">Baby & Kids</a></p>
    <p><a href="">Men's Fashion</a></p>
    <p><a href="">Agriculture & Food</a></p>
    <p><a href="">Pets</a></p>
    <p><a href="">Sport</a></p>
    <p><a href="">Ticket Event</a></p>
  </div>
</div>
			<li><a href="Shopping">Shopping</li>
			<li><a href="about.php">About Us</li>
			<li><a href="contact.php">Contact Us</li>
			<li><a href="logout.php" style="color: green; font-weight: bold;">Logout</li>
		</ul>
	</nav>
</div>
<div>
	
</div>
</body>
</html>
<?php
}
else{
	header('location:login.php');
}
?>