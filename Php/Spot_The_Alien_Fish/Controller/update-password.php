<?php
//includs functions to this page
  include("functions.php");
  $userId = $_COOKIE;
//sets a variable to get the values
  $username = $userId['user_name'];
  $password = $_POST['change-password'];
// calling the fucntion change_password
  change_password($password);

  header("Location:admin.php");


 ?>
