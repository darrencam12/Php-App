<?php
include("functions.php");
if (!check_login()) {
    header('Location:login.php');
}

include("header.php");
 ?>
   <h2 class="titletext"><Strong>Welcome to Alien Fish!</strong></h2>
  </div>
 <div id="page-content-wrapper">

        <div class="row">
          <div class="container-fluid">
            <div class="col-lg-3">
              <form enctype="multipart/form-data" action="update-password.php" method="post">
                    <div class="form-group">
                          <label for="change-password">Change Password:</label>
                          <input type="password" class="form-control" name="change-password"placeholder="Password"id="input-user">
                     </div>


                      <button type="submit"class="btn btn-primary ">Sumbit</button>
                </form>
              </div>
          </div>
        </div>
    </div>
 <?php
 include("footer.php");
  ?>
