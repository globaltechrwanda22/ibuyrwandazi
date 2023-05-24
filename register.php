<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register here</title>
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
	.nav{
		background-color: #fff;
		text-align: center;
	}
	.nav ul li{
		display: inline-flex;
		padding: 20px;
		font-family: Tahoma,Verdana,Segoe,sans;
	}
	fieldset{
		width: 300px;
		height: 400px;
		border: none;
		text-align: center;
		margin-left: 530px;
		margin-top: 50px;
	}
	.form p{
		font-weight: bold;
		font-family: sans-serif;
		font-size: x-large;
		text-decoration: underline;
		text-transform: uppercase;
		margin-top: 8px;
	}
	.form .select {
		padding: 4vh;
		box-sizing: border-box;
		outline: none;
	}
</style>
<body>
<div class="nav">
	<nav>
		<ul>
			<li><a href="login.php">Sign In</a></li>
			<li><a href="register.php">Sign Up</a></li>
			<li><a href="update.php">Forget Password</a></li>
			<li>Subscribe </li>
			<li>Contact Us</li>
		</ul>
	</nav>
</div>
<div class="form">
	<fieldset>
		<center>
	<form method="POST">
		<div class="fieldset">
		<div>
		<p>Account Form</p>
	</div>
	<div class="select">
		<select name="select">
			<option selected disabled>Account</option>
			<option value="user">User</option>
			<option value="manager">Manager</option>
		</select>
	</div>
	<div>
		<br><br>
			<input type="text" name="id" placeholder="Id" required>
	</div>
	<div>
		<br><br>
			<input type="text" name="name" placeholder="Username" required>
	</div>
	<div>
		<br><br>
			<input type="password" name="password" placeholder="Password" required>	
	</div>
	<div>
		<br><br>
		<input type="Submit" name="insert" value="Create" style="-webkit-appearance: none;
        appearance: none;
        cursor: pointer;
        width: 40%;
        background: green;
        line-height: 2em;
        border: 1px solid black;
        border-radius: br;
        padding: spacing/4;">
	</div>
</div>
	</form>
</fieldset>
</center>
</div>
</body>
<?php
include 'connection.php';
if (isset($_POST['insert'])) {
	$select=$_POST['select'];
	$id=$_POST['id'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	if ($select=='user') {
		$sql="INSERT INTO user(id,name,password) VALUES('$id','$name','$password')";
	    $query=mysqli_query($conn,$sql);	
	}
else{
    $sql1="INSERT INTO manager(id,name,password) VALUES('$id','$name','$password')";
    $query=mysqli_query($conn,$sql1);	
}
}	



?>
</html>