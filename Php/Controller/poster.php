<?php
include("header.php");
include('upload.php');
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
             <form action="" enctype="multipart/form-data" method="post">
                 <input id="file" name="file" type="file" />
                 <input id="Submit" name="submit" type="submit" value="Submit" />
             </form>
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
          
         </div>
         <div class="col-lg-3">
         </div>
       </div>



     </div>
   </div>
 <?php
 include("footer.php");
  ?>
