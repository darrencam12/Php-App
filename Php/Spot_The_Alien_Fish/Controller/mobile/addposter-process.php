<?php
    header('Access-Control-Allow-Origin: *');

    include '../functions.php';

  //checks the request method POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //posts the values in the variables
        $ptrname = $_POST['ptrname'];
        $ptrsurname = $_POST['ptrsurname'];
        $ptraddress = $_POST['ptraddress'];




        if (empty($ptrname)) {
            echo "Please insert your name."; die;
        }

        if (empty($ptrsurname)) {
            echo "Please insert your surname."; die;
        }

        if (empty($ptraddress)) {
            echo "Please insert your address."; die;
        }

        //calling the function insert_poster
        $id = insert_poster($ptrname,$ptrsurname,$ptraddress);

        if (!is_int($id)) {
            echo "The poster could not be ordered."; die;
        }

        echo "1";
    }
   ?>
