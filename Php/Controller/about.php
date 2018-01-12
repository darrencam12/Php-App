<?php

if (!check_login()) {
    header('Location:login.php');
}

include("header.php");
 ?>
   <h2 class="titletext"><Strong>About Us</strong></h2>
  </div>
 <div id="page-content-wrapper">
     <div class="container-fluid">
       <div class="row">


         <div class="col-lg-2">

         </div>
         <div class="col-lg-8">
            <textarea rows="20" cols="80">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus et augue a pulvinar. In semper finibus lectus. Cras non elit ex. Sed gravida turpis lorem, nec rhoncus orci viverra at. Proin id nibh tincidunt, lacinia erat at, gravida nunc. Sed sodales nisi nec massa fermentum facilisis. Morbi posuere enim sit amet sapien tristique, eget tincidunt dolor vestibulum. Proin imperdiet tellus et lacinia aliquam. Aliquam erat volutpat.

In consectetur mi nec metus hendrerit, luctus congue sapien malesuada. Aenean pellentesque tempus ex. Proin porta, lorem ac fringilla consequat, purus sem mollis est, vitae efficitur nibh lectus et metus. Praesent laoreet laoreet interdum. Maecenas luctus arcu at nibh vestibulum, euismod vestibulum mauris laoreet. Integer magna velit, porttitor gravida elit eget, pellentesque sodales nisi. Donec in tempor diam. Sed quis tellus eget quam dictum faucibus. Praesent aliquam faucibus nibh, eu aliquet augue. Phasellus ut orci enim. Vivamus facilisis tincidunt viverra. Nulla facilisi. Integer rutrum urna id gravida condimentum. Nullam pellentesque facilisis mauris, ac consequat purus tincidunt mattis. Vivamus non nisi iaculis ex lacinia molestie.
              </textarea>

         </div>
         <div class="col-lg-2">

         </div>
     </div>

     <div class="row">
       <div class="col-lg-4">

       </div>
       <div class="col-lg-4">
        <button type="button" id="aboutbtn"class="btn btn-default"><strong>Edit</strong></button>
       </div>
       <div class="col-lg-4">

       </div>
     </div>


     </div>
</div>
 <?php
 include("footer.php");
  ?>
