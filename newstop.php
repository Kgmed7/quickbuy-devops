<?php
session_start();

$serverename = "localhost";
$username = "root";
$password = "KHALI@med2000";
$dbname = "e-commerce";
$database = mysqli_connect($serverename, $username, $password, $dbname);

if (mysqli_connect_error()) {
    exit('failed to connect to the database :' . mysqli_connect_errno());
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];


    $sql = "INSERT INTO `newstop` (`id`, `email`) VALUES ('0', '$email')";


    if (mysqli_query($database,$sql)) {
        echo "done send true";
    } else
    {
        echo "error:";
    }
    mysqli_close($database);
}
?>