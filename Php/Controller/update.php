<?php
    // allow access from the mobile app
    header('Access-Control-Allow-Origin: *');

    // include the functions file
    include 'functions.php';

    // put all the information into one huge associative array
    $updates = get_all_fish();
    foreach ($updates as &$update) {
        $image = glob("uploaded_imgs/{$update['id']}.*");
        if (count($image) >0) {
            $image = $image[0];
        } else {
            $image = "uploaded_imgs/defaultpic.jpg" ;

        }
        $update['fishimg'] = "http://alienfish.icafestival.com/$image";

    }

    foreach ($updates as &$update) {
        $textfile = "fish_descriptions/{$update['id']}.txt";
        $update['fish_description'] = file_exists($textfile) ? htmlspecialchars(file_get_contents($textfile)) : '';
    }


    // print it all as JSON
    echo json_encode($updates);


?>
