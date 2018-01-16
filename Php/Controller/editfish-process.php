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
        $description = $_POST['message'];



        if(empty($_ERRORS)){
          $id = edit_fish($fishid, $fishname,$fishsname,$forigin,$ftoxic,$fvenomous);

          if($id !== TRUE){
            echo $id;
            die;
          }

          if (isset($_FILES['file'])) {

              $file = "uploaded_imgs/{$fishid}.*";
              array_map("unlink", glob($file));

              # fix the folder's permissions to allow upload
              chmod('uploaded_imgs', 0777);
              $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
              $filename = "uploaded_imgs/{$fishid}.{$ext}";

              if (!move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
                  header('Location:fish.php');
              }
        }
      }
      $myfile = fopen("fish_descriptions/$fishid.txt", "w") or die("Unable to create desciption");
      $txt = $description;
      fwrite($myfile,$txt);
      fclose($myfile);
      header('Location:fish.php');

  }

 ?>
