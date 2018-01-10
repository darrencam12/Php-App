<?php
include("header.php");
include("functions.php");

$showreport = show_report();
 ?>
   <h2 class="titletext"><Strong>Report</strong></h2>
  </div>
 <div id="page-content-wrapper">


         <!-- Reports list-->
      <div class="container-fluid">

        <div class="row">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Date</th>
                    <th>Checked</th>
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
           <div class="row">
               <a href="singlereport.php">Single_Report</a>
           </div>
         </div>
        </div>
      </div>


 <?php
 include("footer.php");
  ?>
