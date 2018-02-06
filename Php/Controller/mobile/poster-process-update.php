<?php
// allow access from the mobile app
header('Access-Control-Allow-Origin: *');

    $image = glob("../poster_imgs/poster.*");
    if (count($image) >0) {
        $image = $image[0];
    } else {
        $image = "../uploaded_img/defaultpic.jpg" ;

    }
    $updates['posterimg'] = "http://alienfish.icafestival.com/$image";

    // print it all as JSON
    echo json_encode($updates);

 ?>
