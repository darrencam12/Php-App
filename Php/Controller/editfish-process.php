<?php
      $_ERRORS = array();

      $_FORM = array();

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        foreach ($_POST as $key => $value) {
          $_FORM[$key] = htmlspecialchars($value);
        }

        $fishid = $_POST['fishid'];
        $fishname = $_POST['fishname'];
        $fishsname = $_POST['fishsname'];
        $forigin = $_POST['forigin'];
        $ftoxic = (isset($_POST['ftoxic'])) ? $_POST['ftoxic'] : 0;
        $fvenomous = (isset($_POST['fvenomous'])) ? $_POST['fvenomous'] : 0;


        if(empty($_ERRORS)){
          $id = edit_fish($fishid, $fishname,$fishsname,$forigin,$ftoxic,$fvenomous);

          if($id !== TRUE){
            echo $id;
            die;
          }

        }
      }

 ?>
