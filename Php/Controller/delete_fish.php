<?php
//get the function
include "functions.php";

    //check if we re editing a book
    if (!isset ($_GET["id"])){
        header("Location:fish.php");
    }

    //try to delete the book
    $result = delete_fish($_GET["id"]);

    // delete any image file that matches the id
    $file = "uploaded_imgs/{$_GET["id"]}.*";
    array_map("unlink", glob($file));
    //delte any file  that matches the id
    $file = "fish_descriptions/{$_GET["id"]}.*";
    array_map("unlink", glob($file));

    if ($result != TRUE){
        echo $result;
    }else{
        header("Location:fish.php");
    }



 ?>
