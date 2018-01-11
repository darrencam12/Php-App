<?php
 archive_user();
  $result = mysqli_query($conn,$query);


  if($result)
  {
      echo "Record added successfully ";
      header("Location: report.php");

  }
  else
  {
      echo "Error in adding record ".mysqli_connect_error($conn);
  }


 ?>
