<?php
include("header.php");
 ?>

  <h2 class="titletext"><Strong>Fish Species</strong></h2>

 </div>
 <div id="page-content-wrapper">

       <!-- Reports list-->


   <div id="page-content-wrapper">
       <div class="container-fluid">
         <div class="row">
           <a href="fish.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
         </div>
          <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
              <div class="lblfishconatiner">
                <input type="text" name="" value="" placeholder="fish name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="fishnamecontainer">
                <button type="button" id="fishnameeditbtn"class="btn btn-default"><strong>Edit</strong></button>
              </div>
            </div>
          </div>
        </div>
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
                  <label><input type="radio" name="optradio">Venom</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio">Posinous</label>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="fishimageeditcontainer">
              <button type="button" id="fishimageeditbtn"class="btn btn-default"><strong>Edit</strong></button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
          </div>
          <div class="col-lg-6">
            <textarea rows="15" cols="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus et augue a pulvinar. In semper finibus lectus. Cras non elit ex. Sed gravida turpis lorem, nec rhoncus orci viverra at. Proin id nibh tincidunt, lacinia erat at, gravida nunc. Sed sodales nisi nec massa fermentum facilisis. Morbi posuere enim sit amet sapien tristique, eget tincidunt dolor vestibulum. Proin imperdiet tellus et lacinia aliquam. Aliquam erat volutpat.In consectetur mi nec metus hendrerit, luctus congue sapien malesuada. Aenean pellentesque tempus ex. Proin porta, lorem ac fringilla consequat, purus sem mollis est, vitae efficitur nibh lectus et metus. Praesent laoreet laoreet interdum. Maecenas luctus arcu at nibh vestibulum, euismod vestibulum mauris laoreet. Integer magna velit, porttitor gravida elit eget, pellentesque sodales nisi. Donec in tempor diam. Sed quis tellus eget quam dictum faucibus. Praesent aliquam faucibus nibh, eu aliquet augue. Phasellus ut orci enim. Vivamus facilisis tincidunt viverra. Nulla facilisi. Integer rutrum urna id gravida condimentum. Nullam pellentesque facilisis mauris, ac consequat purus tincidunt mattis. Vivamus non nisi iaculis ex lacinia molestie.
              </textarea>
          </div>
          <div class="col-lg-2">
            <div class="savebtn">
              <button type="button" id="fishimageeditbtn"class="btn btn-default"><strong>save</strong></button>
            </div>
          </div>
        </div>
      </div>
    </div>






 <?php
 include("footer.php");
  ?>
