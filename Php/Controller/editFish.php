<?php
include("header.php");
include("functions.php");
//include("editfish-process.php");

    $getfish = get_fish();
    $assoc = mysqli_fetch_assoc($getfish);
 ?>

  <h2 class="titletext"><Strong>Fish Species</strong></h2>

 </div>

       <!-- Reports list-->


   <div id="page-content-wrapper">
       <div class="container-fluid">
         <form enctype="multipart/form-data" action="index.html" method="post">


         <div class="row">
           <a href="fish.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
         </div>
          <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
              <div class="lblfishconatiner">
                <input type="text" name="fishname" placeholder="Fish Name" >
                <!--value="<>?=$assoc["fsh_FishName"]?>"-->
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
                <input type="text" name="fishsname"  placeholder="Scientific Name">
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
                      <input type="text" name="forigin" placeholder="Origin of fish">
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
              <div class="radio">
                  <input type="checkbox" name="fvenomous">Venomous
              </div>
              <div class="radio">
                <input type="checkbox" name="ftoxic" >Posinous
              </div>

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
      </form>
        <div class="savebtn">
          <button type="submit" id="fishimageeditbtn"class="btn btn-default"><strong>save</strong></button>
        </div>
      </div>







 <?php
 include("footer.php");
  ?>
