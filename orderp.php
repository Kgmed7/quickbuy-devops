<?php
ob_start();

$servername = "db";
$username = "root";
$password = "KHALI@med2000";
$dbname = "e-commerce";

$database = mysqli_connect($servername, $username, $password, $dbname);

if (!$database) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['telephone']) ||
    empty($_POST['city']) ||
    empty($_POST['items'])
) {
    die("Missing form data or cart items.");
}

$customer_name = mysqli_real_escape_string($database, $_POST['name']);
$email = mysqli_real_escape_string($database, $_POST['email']);
$telephone = mysqli_real_escape_string($database, $_POST['telephone']);
$city = mysqli_real_escape_string($database, $_POST['city']);

$cartItems = json_decode($_POST['items'], true);

if (!is_array($cartItems) || count($cartItems) == 0) {
    die("Cart items are empty or invalid.");
}

$customer_query = "INSERT INTO customers (name, email, telephone, city)
VALUES ('$customer_name', '$email', '$telephone', '$city')";

if (!mysqli_query($database, $customer_query)) {
    die('Error inserting customer data: ' . mysqli_error($database));
}

$customer_id = mysqli_insert_id($database);
$order_date = date("Y-m-d H:i:s");

foreach ($cartItems as $item) {

    $product_name = mysqli_real_escape_string($database, $item['name'] ?? '');
    $product_img = mysqli_real_escape_string($database, $item['img'] ?? '');
    $incart = intval($item['inCart'] ?? 1);

    $price = $item['price'] ?? 0;
    $price = preg_replace('/[^0-9.]/', '', $price);
    $price = floatval($price);

    if ($product_name == '' || $price <= 0) {
        continue;
    }

    $product_query = "INSERT INTO orderproducts 
    (name, price, img, in_cart, customer_id, order_date)
    VALUES 
    ('$product_name', '$price', '$product_img', '$incart', '$customer_id', '$order_date')";

    if (!mysqli_query($database, $product_query)) {
        die('Error inserting product data: ' . mysqli_error($database));
    }
}

mysqli_close($database);

header('Location: thankyou.php');
exit();