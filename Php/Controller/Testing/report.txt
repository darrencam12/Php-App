<?php

if (!check_login()) {
    header('Location:login.php');
}

  include("header.php");
  include("functions.php");
  include("archive-report.php")


 ?>
   <h2 class="titletext"><Strong>Report</strong></h2>
  </div>
  <div id="page-content-wrapper">


         <!-- Reports list-->
      <div class="container-fluid">

        <div class="row">
              <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Date</th>
                    <th>View</th>
                    <th>Archive</th>
                </tr>

                               <body>
                               <?php foreach($archive as $user){
                                   $rows =
                                   "<tr>
                                   <td>$user[0]</td>
                                   <td>$user[1]</td>
                                   <td>$user[2]</td>
                                   <td>$user[3]</td>
                                   <td>$user[4]</td>
                                   <td>$user[5]</td>
                                   <td>$user[6]</td>";

                                   $rows.="<td><a class='btn btn-danger' href='Checked.php?user=".$user[0]."'>Archive</a></td>";

                                   $rows.="</tr>";
                                   echo $rows;
                                 ;
                               }?>
                               </body>
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
