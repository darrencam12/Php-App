<?php
  include("functions.php");
  $userId = $_COOKIE;

  $username = $userId['user_name'];
  $password = $_POST['change-password'];

  change_password($password);

  header("Location:admin.php");


 ?>
