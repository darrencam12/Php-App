<?php
    header('Access-Control-Allow-Origin: *');

  //$_ERRORS = array();

  //$_FORM = array();
  //checks the request method POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        /*foreach ($_POST as $key => $value) {
          $_FORM[$key] = htmlspecialchars($value);
        }*/

    //posts the values in the variables
        $ptrname = $_POST['ptrname'];
        $ptrsurname = $_POST['ptrsurname'];
        $ptraddress = $_POST['ptraddress'];

    //calling the function insert_poster
        insert_poster($ptrname,$ptrsurname,$ptraddress);

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
