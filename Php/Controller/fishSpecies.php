<?php
include("header.php");
include("functions.php");
include("fish-process.php");
 ?>

  <h2 class="titletext"><Strong>Fish Species</strong></h2>

 </div>


       <!-- Reports list-->


   <div id="page-content-wrapper">
       <div class="container-fluid">

         <form  action="fishSpecies.php" method="post">

         <!--this is for the fish name and scientific name-->
         <div class="row">
           <a href="fish.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
         </div>

          <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
              <div class="lblfishconatiner">

                <input type="text" name="fishname" placeholder="Fish name"
                value="<?php if(isset($_FORM['fishname'])) echo $_FORM['fishname']?>">
                <?php if (isset($_ERRORS['fishname'])): ?>
                  <p>
                    <?=$_ERRORS['fishname']?>
                  </p>
                <?php endif; ?>

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

                     <input type="text" name="fishsname"  placeholder="Scientific name"
                     value="<?php if(isset($_FORM['fishsname'])) echo $_FORM['fishsname']?>">
                     <?php if(isset($_ERRORS['fishsname'])): ?>
                       <p>
                          <?=$_ERRORS['fishsname']?>
                       </p>
                     <?php endif; ?>

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

                      <input type="text" name="forigin" placeholder="Origin of fish"
                       value="<?php if(isset($_FORM['forigin'])) echo $_FORM['forigin']?>">
                       <?php if(isset($_ERRORS['forigin'])): ?>
                         <p>
                            <?=$_ERRORS['forigin']?>
                         </p>
                       <?php endif; ?>


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
                    <input type="checkbox" name="" value="">Venomous

                </div>
                <div class="radio">
                  <input type="checkbox" name="danger" value="">Posinous
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
          <div class="savebtn">
            <button type="submit" id="fishimageeditbtn"class="btn btn-default"><strong>save</strong></button>
          </div>
          </form>
        </div>
    </div>


 <?php
 include("footer.php");
  ?>
