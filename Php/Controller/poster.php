<?php
include("functions.php");
if (!check_login()) {
    header('Location:login.php');
}

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

             <form action="" enctype="multipart/form-data" method="post">
                 <input id="file" name="file" type="file" />
                 <input id="Submit" name="submit" type="submit" value="Submit" />

             </form>
             <a href="PosterOrders.php"class="btn btn-default" id="posterbtn2"><strong>Show Sent/Pending</strong></a>





     </div>
   </div>
 <?php
 include("footer.php");
  ?>
