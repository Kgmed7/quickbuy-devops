
<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start(); // Turn on output buffering
*/


$servername = "localhost";
$username = "root";
$password = "KHALI@med2000";
$dbname = "e-commerce";
$database = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  exit('Failed to connect to the database: ' . mysqli_connect_errno());
}

// Insert the customer data into the database
$name = mysqli_real_escape_string($database, $_POST['name']);
$email = mysqli_real_escape_string($database, $_POST['email']);
$telephone = mysqli_real_escape_string($database, $_POST['telephone']);
$city = mysqli_real_escape_string($database, $_POST['city']);

$customer_query = "INSERT INTO customers (name, email, telephone, city) VALUES ('$name', '$email', '$telephone', '$city')";
$customer_result = mysqli_query($database, $customer_query);

if (!$customer_result) {
  echo 'Error inserting customer data: ' . mysqli_error($database);
  exit();
}

// Get the last inserted customer ID
$customer_id = mysqli_insert_id($database);

// Insert the product data into the database
$cartItems = json_decode($_POST['items'], true);

foreach ($cartItems as $item) {
  $name = mysqli_real_escape_string($database, $item['name']);
  $price = (float)$item['price']; // cast to float to prevent truncation
  $incart = mysqli_real_escape_string($database, $item['inCart']);
  
  $product_query = "INSERT INTO orderproducts (name, price, img, in_cart, customer_id) VALUES ('$name', '$price', '$item[img]', '$incart', '$customer_id')";
  $product_result = mysqli_query($database, $product_query);
  
  if (!$product_result) {
    echo 'Error inserting product data: ' . mysqli_error($database);
    exit();
  }
}

// Send an email with the customer and product data
$to = "medquickbuy7@gmail.com";
$subject = "New Order";
$message = "Customer Name: $name\nEmail: $email\nTelephone: $telephone\nCity: $city\n\n";
$message .= "Products:\n";

foreach ($cartItems as $item) {
  $message .= "Name: $item[name]\nPrice: $item[price]\nImage: $item[img]\nIn Cart: $item[inCart]\n\n";
}

$headers = "From: medquickbuy7@gmail.com\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to, $subject, $message, $headers);

// Close the database connection
mysqli_close($database);
// Redirect user to thank you page
header('Location: thankyou.php');
exit();
?>