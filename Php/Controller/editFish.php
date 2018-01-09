<?php
include("functions.php");
include("editfish-process.php");

    if (!isset ($_GET["id"])){
        header("Location:fish.php");
    }

    $fish = get_fish($_GET['id']);
    $assoc = mysqli_fetch_assoc($fish);

    if ($assoc == NULL) {
        die('This fish does not exist!');
    }

    include("header.php");
 ?>

  <h2 class="titletext"><Strong>Fish Species</strong></h2>

 </div>

       <!-- Reports list-->


   <div id="page-content-wrapper">
       <div class="container-fluid">
         <form enctype="multipart/form-data" action="editfish.php?id=<?=$_GET['id']?>" method="post">


         <div class="row">
           <a href="fish.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
         </div>
          <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
              <div class="lblfishconatiner">
                <input type="text" name="fishname" value="<?=$assoc["fsh_FishName"]?>">
              </div>
            </div>
            <div class="col-lg-4">

            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
              <div class="lblfishconatiner">
                <input type="text" name="fishsname" value="<?=$assoc["fsh_ScientificName"]?>" placeholder="Scientific Name">
              </div>
            </div>
            <div class="col-lg-4">

            </div>
          </div>
          <div class="row">
                  <div class="col-lg-4">
                  </div>
                  <div class="col-lg-4">
                    <div class="lblfishconatiner">
                      <input type="text" name="forigin" value="<?=$assoc["fsh_Origin"]?>" placeholder="Origin of fish">
                    </div>
                  </div>
                  <div class="col-lg-4">
                  </div>
                </div>


             <!--this is for the image input-->
        <div class="row">
          <div class="col-lg-4">
          </div>
          <div class="col-lg-4">
            <div class="fishspeciescontainer">
              <img src="Images\600x400.png" class="FishImage"alt="img">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="fishimageeditcontainer">
              <input type="file" name="image"class="form-control-file"id="FormControlFileImages"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
          </div>
          <div class="col-lg-4">
            <div class="radiobuttoncontainer">
              <label class="radio">
                  <input type="checkbox" name="fvenomous" value="1">Venomous
              </label>
              <label class="radio">
                <input type="checkbox" name="ftoxic" value="1">Posinous
            </label>

            </div>
          </div>
          <div class="col-lg-4">

          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
          </div>
          <div class="col-lg-6">
            <textarea rows="15" cols="50">
              </textarea>
          </div>
          <div class="col-lg-2">

          </div>
        </div>
        </div>
        <div class="savebtn">
            <input type="hidden" name="fishid" value="<?=$assoc['id']?>">
          <button type="submit" id="fishimageeditbtn"class="btn btn-default"><strong>save</strong></button>
        </div>
    </form>
</div>







 <?php
 include("footer.php");
  ?>
