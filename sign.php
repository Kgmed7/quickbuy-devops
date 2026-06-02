<?php
session_start();

require_once 'config.php';

if (mysqli_connect_error()) {
    exit('failed to connect to the database :' . mysqli_connect_errno());
}

// prepare oure sql statement  and prevent injection 

if ($prev=$database->prepare('SELECT ID, PASSWORD FROM client WHERE EMAIL = ?')) {
    // now let we bind the parameters, son user name is a string so we use "S"
    $prev->bind_param('s', $_POST['email']);
    $prev->execute();

    // now let we store the result so we can check if the account exists
    $prev->store_result();

    if ($prev->num_rows() > 0) {
        $prev->bind_result($id, $password);
        $prev->fetch();

        // so now we know the account existand verify password

        if ($_POST['password'] === $password) {
            // now the user should log in and we create a session so we know the user has loggeding 
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $_POST['email'];
            $_SESSION['id'] = $id;
            // check if Accept column in the client table is 1
            $stmt = $database->prepare('SELECT Accept FROM client WHERE ID = ?');
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->bind_result($accept);
            $stmt->fetch();
            $stmt->close();
            // if Accept is 1, redirect to enterccot.html, else redirect to welcom.html
            if ($accept == 1) {
                header('Location: enterccot.html');
            } else {
                header('Location: welcom.php');
            }
        } else {
            // display a message for incorrect password
            echo "incorrect password";
            header('refresh:2;url=sign.html');
        } 
    } else {
        // display a message for incorrect
        echo "incorrect email ";
        header('refresh:2;url=sign.html');
    }
    $prev->close();
}
?>