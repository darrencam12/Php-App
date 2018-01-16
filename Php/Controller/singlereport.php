<?php
include("functions.php");
if (!check_login()) {
    header('Location:login.php');
}

include("header.php");


$showreport = show_report($_GET['user']);

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

          <form action="/action_page.php">
            <a href="report.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Full Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?=$assoc['rpt_Name']?> <?=$assoc['rpt_Surname']?></td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?=$assoc['rpt_Email']?></td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Phone No.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?=$assoc['rpt_PhoneNo']?></td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Photo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="Images\600x400.png" id="formimage"alt="img"></td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Fish Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> ADNA MA MINIJIEX HAQ GHAL MADONNAAAAA</td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?=$assoc['rpt_Date']?></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th>Location</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?=$assoc['rpt_Location']?></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th>Fish preservation</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php if($assoc['rpt_Preserved'] == 1){ echo "Yes"; }else{ echo "No";}?></td>
                  </tr>
                </tbody>



                <thead>
                  <tr>
                    <th>Willing to donate or sell to the univercity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php if($assoc['rpt_Donate'] == 1){ echo "Yes"; }else{ echo "No";}?></td>
                  </tr>
                </tbody>

                <thead>

              </table>

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
