<?php

include "functions.php";

    //check if we re editing a book
    if (!isset ($_GET["id"])){
        header("Location:fish.php");
    }

    //try to delete the book
    $result = delete_fish($_GET["id"]);
    if ($result != TRUE){
        echo $result;
    }else{
        header("Location:fish.php");
    }

 ?>
