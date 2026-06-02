 <?php
$serverename = "db";
$username = "root";
$password = "KHALI@med2000"; 
$dbname = "e-commerce";

$database = mysqli_connect($serverename, $username, $password, $dbname);

if (!$database) {
    exit('failed to connect to the database: ' . mysqli_connect_error());
}

