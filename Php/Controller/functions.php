<?php


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
  function insert_fish($fishname,$fishsname,$forigin,$ftoxic,$fvenomous){

    $conn = connect_to_db();


    // protecting the variables for injection
    $fishname = mysqli_escape_string($conn,$fishname);
    $fishsname = mysqli_escape_string($conn,$fishsname);
    $forigin = mysqli_escape_string($conn,$forigin);
    $ftoxic = mysqli_escape_string($conn,$ftoxic);
    $fvenomous = mysqli_escape_string($conn,$fvenomous);

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

  function edit_fish($id,$fishname,$fishsname,$forigin,$ftoxic,$fvenomous){

    // connection to the database
    $conn = connect_to_db();

    $id = mysqli_escape_string($conn,$id);
    $fishname = mysqli_escape_string($conn,$fishname);
    $fishsname = mysqli_escape_string($conn,$fishsname);
    $forigin = mysqli_escape_string($conn,$forigin);
    $ftoxic = mysqli_escape_string($conn,$ftoxic);
    $fvenomous = mysqli_escape_string($conn,$fvenomous);

    $query ="
    UPDATE tbl_fish
          SET
              fsh_FishName = '{$fishname}',
              fsh_ScientificName = '{$fishsname}',
              fsh_Origin = '{$forigin}',
              fsh_toxic = '{$ftoxic}',
              fsh_Venomous = '{$fvenomous}'
          WHERE
              id = '{$id}'
          ";
      $result  = mysqli_query($conn,$query);
      if (mysqli_affected_rows($conn) !=1){
          //.combines two strings
          echo "the query is not successful:";
          echo mysqli_error($conn);
      }else{
          //this will change $result to TRUE
          $result = TRUE;
      }
      disconect_from_db($conn);

      return $result;
    }


  function show_report(){
      // connect to the database;
      $conn = connect_to_db();

      // defining a query

      $query = "
        SELECT * FROM `tbl_report`
        WHERE rpt_Checked = 0
        ";

      // asking SQL to perform the query
      $result = mysqli_query($conn,$query);

      //disconnect from the database
      disconnect_from_db($conn);

      // give back the end result
      return $result;
  }

  /*function get_report($id){
    // connect to the database;
    $conn = connect_to_db();

    // defining a query
    $id = mysqli_escape_string($conn,$id);

    $query = "
      SELECT * FROM `tbl_report`
      WHERE (ID)='{$id}'
      ";

      $result = mysqli_query($conn,$query);


      if(mysqli_num_rows($result)!=1){
        return FALSE;
      }else {
          return mysqli_fetch_assoc($result);
        }
        disconnect_from_db($conn);
      }*/

  function show_orders(){
      // connect to the database;
      $conn = connect_to_db();

      // defining a query

      $query = "
        SELECT * FROM `tbl_poster`
        ";

      // asking SQL to perform the query
      $result = mysqli_query($conn,$query);

      //disconnect from the database
      disconnect_from_db($conn);

      // give back the end result
      return $result;
  }



?>
