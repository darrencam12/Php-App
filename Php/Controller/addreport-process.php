<?php

  //$_ERRORS = array();

  //$_FORM = array();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /*foreach ($_POST as $key => $value) {
      $_FORM[$key] = htmlspecialchars($value);
    }*/

    $rptname = $_POST['rptname'];
    $rptsurname = $_POST['rptsurname'];
    $rptemail = $_POST['rptemail'];
    $rptdescription = $_POST['rptdescrpition'];
    $rptlocation = $_POST['rptlocation'];
    $rptphoneno = $_POST['rptphoneno'];
    $rptpreserved = 0;
    $rptdonate = 0;
  //  $message = $_POST['message'];
    if(isset($_POST['rptpreserved'])) $rptpreserved = 1;
    if(isset($_POST['rptdonate'])) $rptdonate = 1;


      insert_report($rptname,$rptsurname,$rptemail,$rptphoneno,$rptdescription,$rptlocation,$rptpreserved,$rptdonate);

  /*  if(empty($_ERRORS)){
      $id = insert_fish($fishname,$fishsname,$forigin,$ftoxic,$fvenomous);*/

      /*if(!is_int($id)){
        echo $id;
        die;
      }*/

    /*  if (isset($_FILES['file'])) {

          # fix the folder's permissions to allow upload
          chmod('uploaded_imgs', 0777);
          $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
          $filename = "uploaded_imgs/{$id}.{$ext}";

          if (!move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
              die("Could not upload the image file.");
          }


      $myfile = fopen("fish_descriptions/$id.txt", "w") or die("Unable to create desciption");
      $txt = $message;
      fwrite($myfile,$txt);
      fclose($myfile);
      header('Location:fish.php');*/

          /*
            $images = glob("{$id}.*"); // this will give me all files that are linked to the id in the table
            // when replacing an image, remove all the existing ones
            foreach ($images as $image) {
                unlink($image);
            }
            // you can continue uploading another image.
          */



  }
 ?>
