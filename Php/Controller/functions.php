<?php

  session_start();

  // this function will allow us to connect to the database and assign the connection to a variable
  function connect_to_db() {
    $conn = mysqli_connect("localhost", "root", "", "db_fish_species")
      or die("unable to connect");

      return $conn;
  }
  // this function will disconnect form the database
  function disconnect_from_db(&$conn){
    mysqli_close($conn);
  }
  // this fucntion will allow insetraion of data to the fishtable
  function insert_fish($fishname,$fishsname,$forigin/*,$ftoxic,$fvenomous*/){

    $conn = connect_to_db();


    // protecting the variables for injection
    $fishname = mysqli_escape_string($conn,$fishname);
    $fishsname = mysqli_escape_string($conn,$fishsname);
    $forigin = mysqli_escape_string($conn,$forigin);
    //$ftoxic = mysqli_escape_string($conn,$ftoxic);
    //$fvenomous = mysqli_escape_string($conn,$fvenomous);

    // 3. define a query
    $query ="
    INSERT INTO tbl_fish
      (fsh_FishName, fsh_ScientificName, fsh_Origin, fsh_Toxic, fsh_Venomous)
    VALUES
      ('{$fishname}','{$fishsname}','{$forigin}','{$ftoxic}','{$fvenomous}')
      ";
      // 4. ask SQL to perform the query
    $result = mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn)!=1){

    // unsuccesfull will replace the result with an error
    $result = "the query was not successfull: ";
    //constantians a string with the current value
      $result .= mysqli_error($conn);
    }else {
      $result = mysqli_insert_id($conn);
    }
      disconnect_from_db($conn);
    // give back whatever we've ended up with
      return $result;
    }
  // this function will allow to display fish
  function get_fish(){
    // connect to the database;
    $conn = connect_to_db();

    // defining a query

    $query = "
      SELECT * FROM `tbl_fish`
      ";

    // asking SQL to perform the query
    $result = mysqli_query($conn,$query);

    //disconnect from the database
    disconnect_from_db($conn);

    // give back the end result
    return $result;

  }

?>
