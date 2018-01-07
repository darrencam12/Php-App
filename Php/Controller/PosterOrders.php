<?php
include("header.php");
include("functions.php");

$showorders = show_orders();
 ?>
   <h2 class="titletext"><Strong>Posters Orders</strong></h2>
  </div>

 <main>
  <div id="page-content-wrapper">

      <div class="container-fluid">
         <div class="row">
              <a href="Poster.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
           <table>
             <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Surname</th>
               <th>Adress</th>
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
         </div>
        </div>
      </div>

  </main>
 <?php
 include("footer.php");
  ?>
