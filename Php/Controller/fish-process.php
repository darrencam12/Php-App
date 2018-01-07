<?php

  $_ERRORS = array();

  $_FORM = array();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach ($_POST as $key => $value) {
      $_FORM[$key] = htmlspecialchars($value);
    }
    $fishname = $_POST['fishname'];
    $fishsname = $_POST['fishsname'];
    $forigin = $_POST['forigin'];
    if(isset($_POST['ftoxic'])) $ftoxic = 1; else $ftoxic = 0;
    if(isset($_POST['fvenomous'])) $fvenomous = 1; else $fvenomous = 0;


    if(empty($_ERRORS)){
      $id = insert_fish($fishname,$fishsname,$forigin,$ftoxic,$fvenomous);

      if(!is_int($id)){
        echo $id;
        die;
      }

    }
  }
 ?>
