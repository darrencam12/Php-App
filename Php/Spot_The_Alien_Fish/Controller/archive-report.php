<?php
//calls the function
 archive_user();
  $result = mysqli_query($conn,$query);

//checks the result
  if($result)
  {
      echo "Record added successfully ";
      header("Location: report.php");

  }
  // show if the connection is wrong
  else
  {
      echo "Error in adding record ".mysqli_connect_error($conn);
  }


 ?>
