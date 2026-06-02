
<?php
require_once 'config.php';

if (isset($_POST['register'])) {

$email = $_POST['email'];
$sqlsame = "SELECT * FROM client WHERE (EMAIL='$email');";
$res = mysqli_query($database,$sqlsame);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    if ($email==isset($row['EMAIL']))
    {
        echo "email already exists";
    }
} else {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $city = $_POST['city'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `client` (`ID`,`USERNAME`,`EMAIL`,`TELE`,`CITY`,`PASSWORD`, `Accept`) VALUES ('0','$username','$email','$tel','$city','$password', '0')";
    
    if (mysqli_query($database,$sql)) {
        echo "done send true";
    } else
    {
        echo "error:";
    }
    mysqli_close($database);
}
}

?>
