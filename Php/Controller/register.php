<?php

include("header.php");
 ?>
   <h2 class="titletext"><Strong>Welcome to Alien Fish!</strong></h2>
  </div>
 <div id="page-content-wrapper">

        <div class="row">
          <div class="container-fluid">
            <div class="col-lg-3">
              <form enctype="multipart/form-data" action="register-process.php" method="post">
                    <div class="form-group">
                          <label for="userName">Username:</label>
                          <input type="text" class="form-control" name="userName"placeholder="Waka"id="input-user">
                     </div>

                      <div class="form-group">
                          <label for="password">Password:</label>
                          <input type="password" class="form-control"name="password" placeholder="password"id="input-password">
                      </div>
                  <button type="submit"class="btn btn-primary ">Register</button>
                </form>
            </div>



        </div>
      </div>
    </div>

 <?php
 include("footer.php");
  ?>
