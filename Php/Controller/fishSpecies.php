<?php
include("functions.php");
include("fish-process.php");
include("header.php");
 ?>

  <h2 class="titletext"><Strong>Add Fish Species</strong></h2>

 </div>


       <!-- Reports list-->


   <div id="page-content-wrapper">
       <div class="container-fluid">

         <form  action="fishSpecies.php" method="post" enctype="multipart/form-data">

         <!--this is for the fish name and scientific name-->
         <div class="row">
           <a href="fish.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
         </div>


          <div class="form-group">
              <label for="fishname">Name:</label>
              <input required type="text" class="form-control" name="fishname" placeholder="Fish name"
              value="<?php if(isset($_FORM['fishname'])) echo $_FORM['fishname']?>">
              <?php if (isset($_ERRORS['fishname'])): ?>
                <p>
                  <?=$_ERRORS['fishname']?>
                </p>
              <?php endif; ?>
            </div>
          <div class="form-group">
            <label for="fishsname">Scientific Name:</label>
            <input required type="text" class="form-control" name="fishsname"  placeholder="Scientific name"
            value="<?php if(isset($_FORM['fishsname'])) echo $_FORM['fishsname']?>">
            <?php if(isset($_ERRORS['fishsname'])): ?>
              <p>
                 <?=$_ERRORS['fishsname']?>
              </p>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="forigin">Origin Of Fish:</label>
            <input required type="text" class="form-control" name="forigin" placeholder="Origin of fish"
             value="<?php if(isset($_FORM['forigin'])) echo $_FORM['forigin']?>">
             <?php if(isset($_ERRORS['forigin'])): ?>
               <p>
                  <?=$_ERRORS['forigin']?>
               </p>
             <?php endif; ?>


          </div>
          <h5><strong>Add Image</strong></h5>
          <input type="file" name="file" class="form-control-file" id="FormControlFileImages"  accept=".png, .gif, .jpg"/>

          <div class="row">
            <div class="container-fluid">
              <div class="checkboxspacing">
                <div class="form-check">
                  <h5><strong>Danger of Fish</strong></h5>
                  <div>
                    <input type="checkbox" name="fvenomous"> Venomous
                  </div>
                  <div>
                    <input type="checkbox" name="ftoxic"> toxic
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
             <label for="comment">Desciption:</label>
             <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>

            <button type="submit" id="fishimageeditbtn" class="btn btn-primary btn-lg"><strong>Add Fish</strong></button>

             <!--this is for the image input-->
          </form>
        </div>
    </div>


 <?php
 include("footer.php");
  ?>
