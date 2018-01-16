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
  function get_fish($id = NULL){
    // connect to the database;
    $conn = connect_to_db();

    // defining a query

    $query = "
      SELECT * FROM `tbl_fish`
      ";

    if ($id != NULL) {
        $id = mysqli_escape_string($conn, $id);
        $query .= "WHERE id={$id}";
    }

    // asking SQL to perform the query
    $result = mysqli_query($conn,$query);

    //disconnect from the database
    disconnect_from_db($conn);

    // give back the end result
    return $result;

  }

  function check_fish($id,$fishname,$fishsname,$forigin,$ftoxic,$fvenomous){

    // connection to the database
    $conn = connect_to_db();

    $id = mysqli_escape_string($conn,$id);
    $fishname = mysqli_escape_string($conn,$fishname);
    $fishsname = mysqli_escape_string($conn,$fishsname);
    $forigin = mysqli_escape_string($conn,$forigin);
    $ftoxic = mysqli_escape_string($conn,$ftoxic);
    $fvenomous = mysqli_escape_string($conn,$fvenomous);

    $query ="
        SELECT *
        FROM tbl_fish
          WHERE
              fsh_FishName = '{$fishname}' AND
              fsh_ScientificName = '{$fishsname}' AND
              fsh_Origin = '{$forigin}' AND
              fsh_toxic = '{$ftoxic}' AND
              fsh_Venomous = '{$fvenomous}' AND
              id = '{$id}'
          ";

    // get the results to check that the query matches
      $result  = mysqli_query($conn,$query);

      // disconnect because the query is done
      disconnect_from_db($conn);

      // check the number of rows, and return TRUE or FALSE if the result is one.
      return mysqli_num_rows($result) == 1;
    }

  function edit_fish($id,$fishname,$fishsname,$forigin,$ftoxic,$fvenomous){

     if (check_fish($id,$fishname,$fishsname,$forigin,$ftoxic,$fvenomous)) {
         return TRUE;
     }

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
      disconnect_from_db($conn);

      return $result;
    }

  function show_report($id = NULL){
      // connect to the database;
      $conn = connect_to_db();

      // defining a query

      $query = "
        SELECT * FROM `tbl_report`
        WHERE rpt_Checked = 0
      ";

      if ($id != NULL) {
        $id = mysqli_escape_string($conn, $id);
        $query .= "AND ID = {$id}";
      }

      // asking SQL to perform the query
      $result = mysqli_query($conn,$query);

      //disconnect from the database
      disconnect_from_db($conn);

      // give back the end result
      return $result;
  }

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

  function delete_fish($id){

        $conn = connect_to_db();

        //protect our variables
        $id = mysqli_escape_string($conn, $id);

        $query ="
            DELETE FROM tbl_fish

            WHERE
                id = '{$id}'
            ";
        $result = mysqli_query($conn, $query);

        //check that the query worked
        if (mysqli_affected_rows($conn) !=1){
            //.combines ywo strings
            echo "the query is not successful:";
            echo mysqli_error($conn);
        }else{
            //this will change $result to TRUE
            $result = TRUE;

        }


        disconnect_from_db($conn);

        return $result;
    }

  function archive_report(){

    $conn = connect_to_db();
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



    //disconnect from the database
    disconnect_from_db($conn);

    // give back the end result
    return $result;
      }

  function archive_user(){

      $conn = connect_to_db();
      $query = "UPDATE tbl_report SET rpt_Checked = 1 WHERE ID ='$userId'";
      $result = mysqli_query($conn,$query);


          //disconnect from the database
          disconnect_from_db($conn);

          // give back the end result
          return $result;
  }
  // SELECT: retrieve the user's password
  function get_password($username) {

      // 1. connect to the database
      $conn = connect_to_db();

      // 2. protect the variables for the query
      $username = mysqli_escape_string($conn, $username);

      // 3. define the query
      $query = "
          SELECT user_password
          FROM tbl_users
          WHERE user_name = '{$username}'
      ";


      // 4. ask SQL to try the query
      $result = mysqli_query($conn, $query);

      // 5. disconnect from the database
      disconnect_from_db($conn);

      // 6. tell PHP what happened
      if (mysqli_num_rows($result) != 1) {
          // if there is not one result, the email does not exist
          return FALSE;
      } else {
          // retrieve the first result as an array
          $result = mysqli_fetch_assoc($result);

          // return just the password
          return $result['user_password'];
      }


  }

  function get_user_from_username($username) {

      // 1. connect to the database
      $conn = connect_to_db();

      // 2. protect the variables
      $username = mysqli_escape_string($conn, $username);

      // 3. define the query
      $query = "
          SELECT
              *
          FROM
              tbl_users
          WHERE
              user_name = '{$username}'
      ";

      // 4. ask SQL to try the query
      $result = mysqli_query($conn, $query);

      // 5. disconnect from the database
      disconnect_from_db($conn);

      // 6. send back the data if there's any
      if (mysqli_num_rows($result) != 1) {
          // something went wrong, just send a false
          return FALSE;
      } else {
          // return the first result, it's the only one
          return mysqli_fetch_assoc($result);
      }

  }

  function check_login(){

      // 1. if the session contains no data
      // there's nothing else to do
      if (!array_key_exists('id', $_COOKIE)) {
          return FALSE;
      }

      // 2. put the user information in a variable
      $user = $_COOKIE;
      // 3. connect to the database
      $conn = connect_to_db();

      // 4. protect the variables
      $id = mysqli_escape_string($conn, $user['id']);
      $username = mysqli_escape_string($conn, $user['user_name']);

      // 5. define the query
      $query = "
          SELECT
              id
          FROM
              tbl_users
          WHERE
              id = '{$id}'
          AND
              user_name = '{$username}'
      ";

      // 6. ask SQL to try the query
      $result = mysqli_query($conn, $query);

      // 7. disconnect from the database
      disconnect_from_db($conn);

      // 8. return TRUE if we have one row
      // FALSE if the details didn't match (0 rows)
      return mysqli_num_rows($result) == 1;


  }

  function change_password($password){

    $conn = connect_to_db();

    $password = password_hash($password, CRYPT_BLOWFISH);
    $password = mysqli_escape_string($conn, $password);

    $query ="
    UPDATE tbl_users
          SET
            user_password = '{$password}'
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
      disconnect_from_db($conn);

      return $result;
    }

  function insert_user($username,$password){

      $conn = connect_to_db();

      // protecting the variables for injection
      $username = mysqli_escape_string($conn,$username);

      $password = password_hash($password, CRYPT_BLOWFISH);
      $password = mysqli_escape_string($conn, $password);

      // 3. define a query
      $query ="
      INSERT INTO tbl_users
        (user_name, user_password)
      VALUES
        ('{$username}','{$password}')
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

/*function delete_image($id){
  $file = "uploaded_imgs/$id.*";
    if (array_map("unlink", glob($file))){
        echo "sucess";
    }
}*/






?>
