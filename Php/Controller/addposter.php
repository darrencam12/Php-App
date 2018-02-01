<?php
include("functions.php");
//including functions to this page
if (!check_login()) {
    header('Location:login.php');
}
//including the process to this page
include("addposter-process.php");
include("header.php");





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

          <form action="addposter.php" method="post" enctype="multipart/form-data">
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
                    <td>  <input required type="text" class="form-control" name="ptrname" placeholder="name"
                      value="<?php if(isset($_FORM['ptrname'])) echo $_FORM['ptrname']?>"></td>
                  </tr>
                </tbody>
                <th>Surname</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <!--getting the information from the input and sending that input to the database-->
                <td>  <input required type="text" class="form-control" name="ptrsurname" placeholder="surname"
                  value="<?php if(isset($_FORM['ptrsurname'])) echo $_FORM['ptrsurname']?>"></td>
              </tr>
            </tbody>

                <thead>
                  <tr>
                    <th>Address</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <!--getting the information from the input and sending that input to the database-->
                    <td><input required type="text" class="form-control" name="ptraddress" placeholder="address"
                      value="<?php if(isset($_FORM['ptraddress'])) echo $_FORM['ptraddress']?>"></td>
                  </tr>
                </tbody>



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
