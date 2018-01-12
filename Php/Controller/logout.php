<?php

foreach ($_COOKIE as $key => $value) {
        setcookie($key, NULL, time()-3600);
    }

    //redirect to the login page
    header('Location:login.php');

 ?>
