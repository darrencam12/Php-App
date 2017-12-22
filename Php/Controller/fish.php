<?php
include("header.php");
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

            <div class="row">
              <div class="col-lg-3">
              </div>
              <div class="col-lg-5">
                <div class="Fishcontainer">
                  <img src="Images\600x400.png" class="FishImage"alt="img">
                <div class="fishname">
                  <h2>title</h2>
                </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="buttoncontainer">
                  <div class="editbutton">
                    <button type="button" id="fishbtn1"class="btn btn-default"><strong>Edit</strong></button>
                  </div>
                  <div class="deletebutton">
                      <button type="button" id="fishbtn2"class="btn btn-default"><strong>Delete</strong></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
              </div>
              <div class="col-lg-5">
                <div class="Fishcontainer">
                  <img src="Images\600x400.png" class="FishImage"alt="img">
                <div class="fishname">
                  <h2>title</h2>
                </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="buttoncontainer">
                  <div class="editbutton">
                    <button type="button" id="fishbtn1"class="btn btn-default"><strong>Edit</strong></button>
                  </div>
                  <div class="deletebutton">
                      <button type="button" id="fishbtn2"class="btn btn-default"><strong>Delete</strong></button>
                  </div>
                </div>
              </div>
            </div>


          </div>
     </main>






 <?php
 include("footer.php");
  ?>
