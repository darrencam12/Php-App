<?php
// allow access from the mobile app
header('Access-Control-Allow-Origin: *');

// include the functions file
include 'functions.php';

    $image = glob("uploaded_imgs/poster.*");
    if (count($image) >0) {
        $image = $image[0];
    } else {
        $image = "uploaded_imgs\defaultpic.jpg" ;

    }
    $update['posterimg'] = encode_image($image);

 ?>
