<?php

  $_ERRORS = array();

  $_FORM = array();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach ($_POST as $key => $value) {
      $_FORM[$key] = htmlspecialchars($value);
    }

    $fishname = $_POST['fishname'];
    if(empty($fishname)){
      $_ERRORS['fishname'] = "The fish name can't be blank.";
    }

    $fishsname = $_POST['fishsname'];
    if(empty($fishsname)){
      $_ERRORS['fishsname'] = "The scientific name can't be blank.";
    }

    $forigin = $_POST['forigin'];
    if(empty($forigin)){
      $_ERRORS['forigin'] = "The origin of the fish can't be blank.";
    }

    if(empty($_ERRORS)){
      $id = insert_fish($fishname,$fishsname,$forigin);

      if(!is_int($id)){
        echo $id;
        die;
      }

    }
  }
 ?>
