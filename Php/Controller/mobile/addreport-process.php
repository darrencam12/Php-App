<?php
    header('Access-Control-Allow-Origin: *');

    include '../functions.php';

  //checks the request method POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//posts the values in the variables
    $rptname = $_POST['rptname'];
    $rptsurname = $_POST['rptsurname'];
    $rptemail = $_POST['rptemail'];
    $rptdescription = $_POST['rptdescrpition'];
    $rptlocation = $_POST['rptlocation'];
    $rptphoneno = $_POST['rptphoneno'];
    $rptpreserved = $_POST['rptpreserved'];
    $rptdonate = $_POST['rptdonate'];
  //  $message = $_POST['message'];
  // if statemeent for checkboxs

    if (empty($rptname)) {
        echo "Please insert your name."; die;
    }
    if (empty($rptsurname)) {
        echo "Please insert your surname."; die;
    }
    if (empty($rptemail)) {
        echo "Please insert your email."; die;
    }
    if (empty($rptphoneno)) {
        echo "Please insert your phone number."; die;
    }
    if (empty($rptdescription)) {
        echo "Please insert description of fish."; die;
    }
    if (empty($rptlocation)) {
        echo "Please insert location where fish was caught."; die;
    }
// calling the function
    $id = insert_report($rptname,$rptsurname,$rptemail,$rptphoneno,$rptdescription,$rptlocation,$rptpreserved,$rptdonate);

    if (!is_int($id)) {
        echo "The report could not be registered."; die;
    }

    echo "1";
  }
 ?>
