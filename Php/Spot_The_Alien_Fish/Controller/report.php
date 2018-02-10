 <?php
 include("functions.php");

//this code is for the date conversion for the report page.
 $timestamp = strtotime('2018-1-10');
 //echo $timestamp;
 //echo "<br>";
 //echo date('d M, Y', $timestamp);
 //die;

 if (!check_login()) {
     header('Location:login.php');
 }

   include("header.php");


      //$conn = mysqli_connect("localhost", "root", "", "db_fish_species")
      $conn = mysqli_connect("localhost", "icafesti_sptalfi", "_cqv)Bn!Z*yw", "icafesti_alienfish")
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
                        <?php foreach($archive as $user):?>
                            <tr>
                              <!--displays the values that are in arrays-->
                              <td><?=$user[0]?></td>
                              <td><?=$user[1]?></td>
                              <td><?=$user[2]?></td>
                              <td><?=$user[3]?></td>
                              <td><?=$user[4]?></td>
                              <td><?=date('d M, Y', $user[6])?></td>
                              <td><?=$user[7]?></td>
                              <td><a class='btn btn-primary' href='singlereport.php?user=<?=$user[0]?>'>View</a></td>
                              <td><a class='btn btn-primary' href='Checked.php?user=<?=$user[0]?>'>Archive User</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                     </table>

        </div>
       </div>
     </div>


 <?php
     include("footer.php");
 ?>
