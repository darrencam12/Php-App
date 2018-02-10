<?php
include("functions.php");

// posts the user to regiter
$username = $_POST['userName'];
$password = $_POST['password'];

insert_user($username,$password);
header("Location:login.php");


 ?>
