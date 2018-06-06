<?php
include("functions.php");
if (!check_login()) {
    header('Location:login.php');
}
include("poster-process.php");
include("header.php");
include('upload.php');
 ?>
   <h2 class="titletext"><Strong>Posters</strong></h2>
  </div>
 <div id="page-content-wrapper">
     <div class="container-fluid">

<?php
    // retrieves all the images that match the criteria
      $images = glob("uploaded_imgs/poster.*");

      // if there are any images on the disk, we can use it.
      if (count($images) > 0) {
          $images = $images[0];
      } else {
          $images = 'Images\defaultpic.jpg';
      }
?>

       <!-- Reports list-->
       <div class="row">
         <div class="col-lg-4">
         </div>
         <div class="col-lg-5">
           <div id="postercontainer">
             <img src="<?=$images?>" id="PosterImage"alt="img">
           </div>

             <form action="" enctype="multipart/form-data" method="post">
                 <input id="file" name="file" type="file" accept=".png, .jpeg, .jpg"/>
                 <input id="Submit" name="submit" type="submit" value="Submit" />

             </form>
             <a href="PosterOrders.php"class="btn btn-default" id="posterbtn2"><strong>Show Sent/Pending</strong></a>


     </div>
   </div>
 <?php
 include("footer.php");
  ?>
