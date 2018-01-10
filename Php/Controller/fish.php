<?php
include("functions.php");
include("fish-process.php");


$getfish = get_fish();
<<<<<<< HEAD
=======

include("header.php");

>>>>>>> dfd2c78d342432715a364cd8830541ce364e126e
 ?>

  <h2 class="titletext"><Strong>Fish Species</strong></h2>

 </div>
 <div id="page-content-wrapper">

       <!-- Reports list-->
       <main>
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-3">
             </div>
             <div class="col-lg-5">
               <div id="addfish">
                 <a href="fishSpecies.php" id="addbtn" class="btn btn-primary" role="button"><strong>Add Fish</strong></a>
              </div>
             </div>
             <div class="col-lg-3">
            </div>
           </div>

           <?php
                while ($assoc = mysqli_fetch_assoc($getfish)):

                    // retrieves all the images that match the criteria
                    $images = glob("uploaded_imgs/{$assoc['id']}.*");

                    // if there are any images on the disk, we can use it.
                    if (count($images) > 0) {
                        $images = $images[0];
                    } else {
                        $images = 'Images\600x400.png';
                    }
            ?>

            <div class="row">
              <div class="col-lg-3">
              </div>
              <div class="col-lg-5">
                <div class="Fishcontainer">
                  <img src="<?=$images?>" class="FishImage"alt="img">
                <div class="fishname">
                  <h2><?=$assoc['fsh_FishName']?></h2>
                  <h4><?=$assoc['fsh_ScientificName']?></h4>
                  <h5><?php if($assoc['fsh_Toxic'] == 1)echo "toxic";?></h1>
                  <h5><?php if($assoc['fsh_Venomous'] == 1)echo "Venomous";?></h1>
                </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="buttoncontainer">
                  <div class="editbutton">
                    <a href="editFish.php?id=<?=$assoc["id"]?>" id="fishbtn1"class="btn btn-default">
                      <strong>Edit</strong>
                    </a>
                  </div>
                  <div class="deletebutton">
                    <a href="delete_fish.php?id=<?=$assoc["id"]?>" id="fishbtn2"class="btn btn-default">
                      <strong>Delete</strong>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php
                endwhile;
             ?>

          </div>
     </main>

 <?php
 include("footer.php");
  ?>
