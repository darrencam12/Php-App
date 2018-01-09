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

      if (isset($_FILES['file'])) {

          # fix the folder's permissions to allow upload
          chmod('uploaded_imgs', 0777);
          $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
          $filename = "uploaded_imgs/{$id}.{$ext}";

          if (!move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
              die("Could not upload the image file.");
          }

          /*
            $images = glob("{$id}.*"); // this will give me all files that are linked to the id in the table
            // when replacing an image, remove all the existing ones
            foreach ($images as $image) {
                unlink($image);
            }
            // you can continue uploading another image.
          */

      }

    }
  }
 ?>
