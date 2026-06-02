<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        div.centre {
            text-align: center;
            line-height: 35px;
        }
        .logo {
            text-align: center;
            column-gap: 0.2rem;
            font-size: 1.5rem;
            font-weight: 600;
            color: #000;
            text-decoration: none;
        }
        .logo .bx {
            font-size: 20px;
            color: #fe5b3d;
        }

        div.aa {
            padding-top: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
  
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
  
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .copyright {
            padding-top: 10px;
            padding: 20px;
            text-align: center;
            background: #0000ff;
            color: var(--text-color);
            color: #eae4e7;
        }
    </style>
</head>
<body>
    <div class="centre">
        <a href="index.php" class="logo"><i class='bx bx-pointer bx-rotate-90' ></i><b>QuickBuy</b></a>
    </div>
    <div class="aa" >
        <h1>Add Product</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>

        <label for="image">Image 1:</label>
        <input type="file" name="image[]" accept="image/*" required><br>

        <label for="image">Image 2:</label>
        <input type="file" name="image[]" accept="image/*" ><br>

        <label for="image">Image 3:</label>
        <input type="file" name="image[]" accept="image/*" ><br>

        <label for="image">Image 4:</label>
        <input type="file" name="image[]" accept="image/*" ><br>


        <label for="price">Price:</label>
        <input type="number" name="price" required><br>

        <label for="sale_price">Sale Price:</label>
        <input type="number" name="sale_price"><br>
        <label for="category">Category:</label>
        <select name="category" required>
            <option value="">Select a category</option>
            <option value="men">Men's Clothing</option>
            <option value="women">Women's Clothing</option>
            <option value="home">Home & Kitchen</option>
            <option value="beauty">Beauty</option>
            <option value="sweets">Sweets</option>
        </select><br>

        <input type="submit" name="submit" value="Add Product">
    </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $category = $_POST['category'];

    // save the images to a folder on the server
    $max_images = 4;
$images = array();

if (!empty($_FILES['image']['name'][0])) {
    $total_files = count($_FILES['image']['name']);
    $total_files = $total_files > $max_images ? $max_images : $total_files;
    for ($i = 0; $i < $total_files; $i++) {
        $tmpFilePath = $_FILES['image']['tmp_name'][$i];
        if ($tmpFilePath != "") {
            $newFilePath = "imgproducts/" . $_FILES['image']['name'][$i];
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                array_push($images, $_FILES['image']['name'][$i]);
            }
        }
    }
}

$image = implode(',', $images);

    // save the product information to a database
    $servername = "db";
    $username = "root";
    $password = "KHALI@med2000";
    $dbname = "e-commerce";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($sale_price)) {
        $sql = "INSERT INTO `productes` (`name`, `description`, `image`, `price`, `sale_price`, `sale`, `category`, `availability`) VALUES ('$name', '$description', '$image', '$price', '$sale_price', '0', '$category', '1')";
    } else {
        $sql = "INSERT INTO `productes` (`name`, `description`, `image`, `price`, `category`) VALUES ('$name', '$description', '$image', '$price', '$category')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


        