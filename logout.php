<?php
session_start();
session_destroy();
unset($_POST['name']);
unset($_POST['password']);
header('location:login.php');
?>