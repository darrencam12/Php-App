<?php
include("functions.php");
if (!check_login()) {
    header('Location:login.php');
}

include("header.php");


$showreport = show_report();

/*$getreport = get_report($_GET["ID"]);
  if($getreport == FALSE) {
    die("this record doesn't exsits");
  }*/

?>

   <h2 class="titletext"><Strong>Report</strong></h2>
  </div>
 <div id="page-content-wrapper">

<?php
          while ($assoc = mysqli_fetch_assoc($showreport)):

?>

         <!-- Reports list-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-10">
            <form action="/action_page.php">
              <div class="form-group">
                <label for="name">Name:</label>
                <p><?=$assoc['rpt_Name']?></p>
              </div>
              <div class="form-group">
                <label for="surname">Surname:</label>
                <p><?=$assoc['rpt_Surname']?></p>

              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <p><?=$assoc['rpt_Email']?></p>

              </div>

              <div class="form-group">
                <label for="number">Phone Number:</label>
                <p><?=$assoc['rpt_PhoneNo']?></p>

              </div>

              <div class="form-group">
                <label for="photo">Photo:</label>
                <img src="Images\600x400.png" id="formimage"alt="img">
              </div>

              <div class="form-group">
                <label for="describe">Describe Fish:</label>


              </div>

              <div class="form-group">
                <label for="date">Date:</label>
                <p><?=$assoc['rpt_Date']?></p>

              </div>

              <div class="form-group">
                <label for="location">location:</label>
                <p><?=$assoc['rpt_Location']?></p>

              </div>

              <div class="form-group">
                <label for="describe">Fish preservation:</label>
                <p><?=$assoc['rpt_Preserved']?></p>

              </div>
              <div class="form-group">
                <label for="describe">Are you willing to donate or sell to the univercity</label>
                <p><?=$assoc['rpt_Donate']?></p>

              </div>





            </div>
          </form>
          </div>
          <div class="col-lg-1">
          </div>

      </div>
<?php
    endwhile;
?>

 <?php
 include("footer.php");
  ?>
