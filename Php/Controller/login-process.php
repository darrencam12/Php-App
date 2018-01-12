<?php
  include("functions.php");
    //if user is logged in , send him to INDEX
    if (check_login()) {
        header('Location:index.php');
    }

    // Check that the form was sent
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // 1. retrieve the form's information
        $username   = $_POST['userName'];
        $password   = $_POST['password'];

        // 2. check if the user exists
        // if so, retrieve the database password
        $check = get_password($username);


        // 3. if the user doesn't exist, present an error
        // == checks if the variable is the same
        // === checks that a variable is IDENTICAL
        if ($check === FALSE) {
            echo "This user doesn't exist.";
            header('Location:login.php');
            die;
        }



        // 4. check that the password matches
        if (!password_verify($password, $check)) {
            echo "The password is wrong.";
            header('Location:login.php');
            die;
        }
        

        // 5. the user has managed to log in
        // retrieve their data
        $details = get_user_from_username($username);

        // 6. stop the code if the data doesn't exist
        if ($details === FALSE) {
            echo "Something went wrong.";
            die;
        }

        // 7. write the user data to a session
        /*
            setcookiewill enable the use of a $_COOKIE
            3 paramaters minimum
            1. nameof _COOKIE
            2. value
            3. an expiry time
            3.1 seconds * minutes * hours* days* months* years
             */
        foreach ($details as $key => $value) {
            setcookie($key, $value, time()+60*60*24*30*3);
        }

        // 8. redirect the user to an index page
        header('Location:index.php');

    }


 ?>
