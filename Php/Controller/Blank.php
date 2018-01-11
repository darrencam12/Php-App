 <?php
   include("header.php");

      $conn = mysqli_connect("localhost", "root", "", "db_fish_species")
        or die("unable to connect");


      //protect our variables


      $query ="
      SELECT * from tbl_report
      WHERE rpt_Checked = 0";
      // asking SQL to perform the query
      $result = mysqli_query($conn,$query);

      $archive = array();

      while ($row = mysqli_fetch_row($result))
      {
        $archive[]=$row;
      }

  ?>
    <h2 class="titletext"><Strong>Report</strong></h2>
   </div>
   <div id="page-content-wrapper">


          <!-- Reports list-->
       <div class="container-fluid">

         <div class="row">
         <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Date</th>
                                <th>location</th>
                                <th>View</th>
                                <th>Archive</th>
                            </tr>
                        </thead>
                        <tbody>
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

                          $rows.="<td><a class='btn btn-primary' href='singlereport.php?user=".$user[0]."'>View</a></td>";
                          $rows.="<td><a class='btn btn-primary' href='Checked.php?user=".$user[0]."'>Archive User</a></td>";

                            $rows.="</tr>";
                            echo $rows;
                          ;
                        }?>
                        </tbody>
                     </table>

        </div>
       </div>
     </div>


 <?php
     include("footer.php");
 ?>
