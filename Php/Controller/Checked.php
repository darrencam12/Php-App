<?php
    $userId = $_GET['user'];
    $query = "UPDATE tbl_report SET rpt_Checked = 1 WHERE ID ='$userId'";
    /*step 5 */

    $conn = mysqli_connect("localhost", "root", "", "db_fish_species");

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
