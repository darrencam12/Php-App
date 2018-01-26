<?php
  include("functions.php");
  if (!check_login()) {
      header('Location:login.php');
  }
  include("editfish-process.php");


      if (!isset ($_GET["id"])){
          header("Location:fish.php");
      }

      $fish = get_fish($_GET['id']);
      $assoc = mysqli_fetch_assoc($fish);
      $description = file_get_contents("fish_descriptions/{$_GET['id']}.txt");

      if ($assoc == NULL) {
          die('This fish does not exist!');
      }
      $getfish = get_fish();
      include("header.php");
?>
  <h2 class="titletext"><Strong>Edit Fish Species</strong></h2>
 </div>




   <div id="page-content-wrapper">
     <div class="container-fluid">

         <form enctype="multipart/form-data" action="editfish.php?id=<?=$_GET['id']?>" method="post">

           <div class="row">
             <a href="fish.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
           </div>
           <div class="form-group">
               <label for="fishname">Name:</label>
                <input type="text" class="form-control" name="fishname" value="<?=$assoc["fsh_FishName"]?>">
            </div>
            <div class="form-group">
              <label for="fishsname">Scientific Name:</label>
                <input type="text"  class="form-control" name="fishsname" value="<?=$assoc["fsh_ScientificName"]?>" placeholder="Scientific Name">
            </div>
            <div class="form-group">
              <label for="forigin">Origin Of Fish:</label>
                <input type="text" class="form-control" name="forigin" value="<?=$assoc["fsh_Origin"]?>" placeholder="Origin of fish">
              </div>


             <!--this is for the image input-->
              <h5><strong>Change Image:</strong></h5>
              <?php

                       // retrieves all the images that match the criteria
                       $images = glob("uploaded_imgs/{$assoc['id']}.*");

                       // if there are any images on the disk, we can use it.
                       if (count($images) > 0) {
                           $images = $images[0];
                       } else {
                           $images = 'Images\600x400.png';
                       }

              ?>
              <img src="<?=$images?>" class="FishImage"alt="img" id="imagesize">

              <div class="row">
                <div class="container-fluid">
                  <div class="checkboxspacing">
                    <div class="form-check">
                      <h5><strong>Danger of Fish</strong></h5>
                      <h5><?php if($assoc['fsh_Toxic'] == 1)echo "toxic";?></h5>
                      <h5><?php if($assoc['fsh_Venomous'] == 1)echo "Venomous";?></h5>
                      <div>

                      </div>
                      <div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                 <label for="comment">Desciption:</label>
                 <label><?php?></label>
                 <textarea class="form-control" rows="5" name="message"><?php echo $description; ?></textarea>
              </div>



    </form>

    </div>
  </div>


<?php
  include("footer.php");
?>
