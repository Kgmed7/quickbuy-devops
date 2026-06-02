<?php
ob_start();
session_start();
require_once 'config.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $database->prepare("SELECT ID, PASSWORD, Accept FROM client WHERE EMAIL = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($id, $db_password, $accept);
        $stmt->fetch();

        if ($pass === $db_password) {

            session_regenerate_id(true);

            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $email;
            $_SESSION['id'] = $id;

            if ($accept == 1) {
                header("Location: enterccot.html");
                exit();
            } else {
                header("Location: welcom.php");
                exit();
            }

        } else {
            header("Location: sign.html");
            exit();
        }

    } else {
        header("Location: sign.html");
        exit();
    }

    $stmt->close();

} else {
    header("Location: sign.html");
    exit();
}