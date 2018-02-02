<?php
//calling the functions to this page
include("functions.php");

include("header.php");
 ?>
   <h2 class="titletext"><Strong>Welcome to Alien Fish!</strong></h2>
  </div>
 <div id="page-content-wrapper">

        <div class="row">
          <div class="container-fluid">
            <div class="col-lg-3">


              <form enctype="multipart/form-data" action="login-process.php" method="post">
                    <div class="form-group">
                          <label for="input-user">Username:</label>
                          <!--setting up the name attribute to accept the same name-->
                          <input type="text" class="form-control" name="userName"placeholder="Username"id="input-user">
                     </div>

                      <div class="form-group">
                          <label for="input-password">Password:</label>
                          <!--setting up the name attribute to accept the same name-->
                          <input type="password" class="form-control"name="password" placeholder="password"id="input-password">
                            <!--<a href="register.php">Register</a>-->
                      </div>

                  <button type="submit"class="btn btn-primary ">login</button>
                </form>
            </div>


        </div>
      </div>
    </div>

 <?php
 include("footer.php");
  ?>
