<?php

$user = 'root';
$pass = '';
$dbname = 'lnss';

//create connection
$conn = mysqli_connect('localhost', $user, $pass, $dbname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>