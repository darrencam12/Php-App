<?php
    // allow access from the mobile app
    header('Access-Control-Allow-Origin: *');

    // include the functions file
    include 'functions.php';

    // put all the information into one huge associative array
    $updates = get_all_fish();
    

    // print it all as JSON
    echo json_encode($updates);


?>
