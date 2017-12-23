<?php
include("header.php");
 ?>
   <h2 class="titletext"><Strong>Report</strong></h2>
  </div>
 <div id="page-content-wrapper">


         <!-- Reports list-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-10">
            <form action="/action_page.php">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
              </div>
              <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="surname" class="form-control" id="surname" placeholder="Enter surname" name="surname">
              </div>
              <div class="form-group">
                <label for="email">Contact Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="photo">Photo:</label>
                <img src="Images\600x400.png" id="formimage"alt="img">
              </div>
              <div class="form-group">
                <label for="describe">Describe Fish:</label>
                <input type="describe" class="form-control" id="desrbice" placeholder="describe fish" name="describe">
              </div>
              <div class="form-group">
                <label for="date">Enter date:</label>
                <input id="date" type="date" >
              </div>
              <div class="form-group">
                <label for="describe">Describe Fish:</label>
                <input id="date" type="date" >
              </div>
              <div class="form-group">
                <label for="describe">Fish is preserved:</label>
                <label class="radio-inline">
                    <input type="radio" name="optradio">Yes
                   </label>
                   <label class="radio-inline">
                     <input type="radio" name="optradio">No
                   </label>
              </div>
              <div class="form-group">
                <label for="describe">Are you willing to donate or sell to the univercity</label>
                <label class="radio-inline">
                    <input type="radio" name="optradio">Yes
                   </label>
                   <label class="radio-inline">
                     <input type="radio" name="optradio">No
                   </label>
              </div>





            </div>
          </form>
          </div>
          <div class="col-lg-1">
          </div>

      </div


 <?php
 include("footer.php");
  ?>
