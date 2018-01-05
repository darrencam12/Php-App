<?php
include("header.php");
 ?>
   <h2 class="titletext"><Strong>Posters</strong></h2>
  </div>
 <div id="page-content-wrapper">
     <div class="container-fluid">

       <!-- Reports list-->
       <div class="row">
         <div class="col-lg-4">
         </div>
         <div class="col-lg-5">
           <div id="postercontainer">
             <img src="Images\600x400.png" id="PosterImage"alt="img">
           </div>
         </div>
         <div class="col-lg-3">
         </div>
       </div>
       <div class="row">
         <div class="col-lg-3">
         </div>
         <div class="col-lg-3">
           <div class="editbutton">
               <input type="file" name="image"class="form-control-file"id="FormControlFileImages" placeholder="upload image"/>
           </div>
         </div>
         <div class="col-lg-1">
         </div>
         <div class="col-lg-3">
           <div class="editbutton">
             <a href="PosterOrders.php"class="btn btn-default" id="posterbtn2"><strong>Show Sent/Pending</strong></a>
           </div>
         </div>
         <div class="col-lg-2">
         </div>
       </div>

       <div class="row">
         <div class="col-lg-4">
         </div>
         <div class="col-lg-5">
           <div id="posternametxt">
              <input type="text" name="firstname" placeholder="Name">
           </div>
           <div id="postersurnametxt">
              <input type="text" name="lastname" placeholder="Surname">
           </div>
           <div id="postersubmitbtn">
               <button type="button"class="btn btn-default"><strong>Sumbit</strong></button>
           </div>
         </div>
         <div class="col-lg-3">
         </div>
       </div>



     </div>
   </div>
 <?php
 include("footer.php");
  ?>
