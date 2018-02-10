<?php
//including functions to this page
include("../functions.php");
if (!check_login()) {
    header('Location:login.php');
}
//including the process to this page
include("../addreport-process.php");
include("../header.php");





/*$getreport = get_report($_GET["ID"]);
  if($getreport == FALSE) {
    die("this record doesn't exsits");
  }*/

?>

   <h2 class="titletext"><Strong>Report</strong></h2>
  </div>
 <div id="page-content-wrapper">

<?php
        //  while ($assoc = mysqli_fetch_assoc($showreport)):
          //  $images = glob("uploaded_imgs/{$assoc['ID']}.*");
            //if(count($images)== 0 ){
            //  $images = "defaultpic.jpg";
          //  }else{
          //    $images = $images[0];
          //  }

?>

         <!-- Reports list-->
      <div class="container-fluid">
          <!--getting the information from the input and sending that input to the database-->
          <form action="addreport.php" method="post" enctype="multipart/form-data">
            <a href="report.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!--getting the information from the input and sending that input to the database-->
                    <td>  <input required type="text" class="form-control" name="rptname" placeholder="name"
                      value="<?php if(isset($_FORM['rptname'])) echo $_FORM['rptname']?>"></td>
                  </tr>
                </tbody>
                <th>Surname</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <!--getting the information from the input and sending that input to the database-->
                <td>  <input required type="text" class="form-control" name="rptsurname" placeholder="surname"
                  value="<?php if(isset($_FORM['rptsurname'])) echo $_FORM['rptsurname']?>"></td>
              </tr>
            </tbody>

                <thead>
                  <tr>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!--getting the information from the input and sending that input to the database-->
                    <td><input required type="text" class="form-control" name="rptemail" placeholder="email"
                      value="<?php if(isset($_FORM['rptemail'])) echo $_FORM['rptemail']?>"></td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Phone No.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!--getting the information from the input and sending that input to the database-->
                    <td><input required type="text" class="form-control" name="rptphoneno" placeholder="number"
                      value="<?php if(isset($_FORM['rptphoneno'])) echo $_FORM['rptphoneno']?>"></td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Photo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                  </tr>
                </tbody>

                <thead>
                  <tr>
                    <th>Fish Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!--getting the information from the input and sending that input to the database-->
                    <td> <input required type="text" class="form-control" name="rptdescrpition" placeholder="Fish name"
                      value="<?php if(isset($_FORM['rptdescrpition'])) echo $_FORM['rptdescrpition']?>"> </td>
                  </tr>
                </tbody>


                <thead>
                  <tr>
                    <th>Location</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!--getting the information from the input and sending that input to the database-->
                    <td><input required type="text" class="form-control" name="rptlocation" placeholder="Fish name"
                      value="<?php if(isset($_FORM['rptlocation'])) echo $_FORM['rptlocation']?>"></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th>Fish preservation</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>  <input type="checkbox" name="rptpreserved"> preserved</td>
                  </tr>
                </tbody>



                <thead>
                  <tr>
                    <th>Willing to donate or sell to the university</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox" name="rptdonate"> donate</td>
                  </tr>
                </tbody>

                <thead>

              </table>
              <button type="submit" name="button">Submit</button>
          </form>
          </div>
          <div class="col-lg-1">
          </div>

      </div>
<?php
  //  endwhile;
?>

 <?php
 include("footer.php");
  ?>
