<?php
include("functions.php");

$username = $_POST['userName'];
$password = $_POST['password'];

insert_user($username,$password);
header("Location:login.php");


 ?>
