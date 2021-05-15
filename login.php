<?php
    session_start();
    //login phpmyadmin sql
    include "db_conn.php"; 

    //check if have username and password
    if (isset($_POST['username']) && isset($_POST['passwd'])) {
        
        //function convert to trim, no slash, and html characters.
        function validate($data) { 
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //declare with validate function
        $username = validate($_POST['username']);
        $passwd = validate($_POST['passwd']);

        //check if empty, go to index.php
        if (empty($username)) {
            header("Location: index.php?error=Username is required");

        } else if (empty($passwd)) {
            header("Location: index.php?error=Password is required");
        
        } else {
            //check username and passwd with sql
            $sql = "SELECT * FROM users WHERE username='$username' AND passwd='$passwd';"; 
            $result = mysqli_query($conn, $sql);

            //check again with row === 1
            if (mysqli_num_rows($result) === 1) {
                //row
                $row = mysqli_fetch_assoc($result);
                //check again with the same username and password to prevent sql injection
                if ($row['username'] === $username && $row['passwd'] === $passwd) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                }
            } else {
                header("Location: index.php?error=Username or Password is incorrect, please try again.");
            }
        }

    } else {
        header("Location: index.php");
        exit();
    }


?>