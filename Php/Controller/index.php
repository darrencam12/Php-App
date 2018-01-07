<?php
include("header.php");
include("functions.php");

$showreport = show_report();
$showorders = show_orders();
 ?>

        <!-- Page Content -->


         <h2 class="titletext"><Strong>Home</strong></h2>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">

              <!-- Reports list-->
              <div class="row">

                    <h1><Strong>Reports</strong></h1>

              </div>
              <div class="row">
                <table>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Date</th>
                    <th>Checked</th>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                  </tr>
<?php
  while ($assoc = mysqli_fetch_assoc($showreport)):
?>

                   <tr>
                       <td><?=$assoc['ID']?></td>
                       <td><?=$assoc['rpt_Name']?></td>
                       <td><?=$assoc['rpt_Surname']?></td>
                       <td><?=$assoc['rpt_Email']?></td>
                       <td><?=$assoc['rpt_PhoneNo']?></td>
                       <td><?=$assoc['rpt_Date']?></td>
                       <td><a href="singlereport.php">Check</a> </td>
                   </tr>

<?php
  endwhile;
?>
                </table>
                <a href="#">View More</a>
              </div>
                  <!-- Reports list-->
              <div class="row">

                    <h1><Strong>Poster Order</strong></h1>

              </div>
              <div class="row">
                <table>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Checked</th>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>

                  </tr>
<?php
while ($assoc = mysqli_fetch_assoc($showorders)):
?>

                  <tr>
                     <td><?=$assoc['idPoster']?></td>
                     <td><?=$assoc['ptr_Name']?></td>
                     <td><?=$assoc['ptr_Surname']?></td>
                     <td><?=$assoc['ptr_Address']?></td>
                  </tr>

<?php
endwhile;
?>

                </table>
                <a href="#">View More</a>
              </div>
            </div>
          </div>

              <!--this is the code for the button that will open and close the menu so keep to change for menu on top IMP!!!!-->

            <?php
            include("footer.php");
            ?>
