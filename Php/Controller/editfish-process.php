<?php
<<<<<<< HEAD
/*if (!isset ($_GET["id"])){
        header("Location:editFish.php");
    }

    $fish = get_fish($_GET["id"]);
    if ($fish == FALSE) {
        die ("this fish doesn't exist");
    }


=======
>>>>>>> dfd2c78d342432715a364cd8830541ce364e126e
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
      }*/
  include 'functions.php';

  $id = mysqli_escape_string($conn,$id);
  $fishname = mysqli_escape_string($conn,$fishname);
  $fishsname = mysqli_escape_string($conn,$fishsname);
  $forigin = mysqli_escape_string($conn,$forigin);
  $ftoxic = mysqli_escape_string($conn,$ftoxic);
  $fvenomous = mysqli_escape_string($conn,$fvenomous);

  $errors = FALSE;

  if (empty($fishname)){
      echo "the Fish name can't be blank!";
      echo "<br>";
      $errors = TRUE;
  }

  if (empty($fishsname)){
      echo "the Scientific name can't be blank!";
      echo "<br?";
      $errors = TRUE;
  }
  if (empty($forigin)){
      echo "the fish origin can't be blank!";
      echo "<br?";
      $errors = TRUE;
  }


  $editfish = edit_fish($id, $fishname, $fishsname, $forigin, $ftoxic, $fvenomous);

    if($editfish != TRUE){
      echo $editfish;
    }else{
      header("location:fish.php");
    }






 ?>
