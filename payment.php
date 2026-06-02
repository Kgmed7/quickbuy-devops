<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Now - Your Online Shop for [Insert Product/Service Here]</title>
    <link rel="icon" href="logo8.png" type="image/png">
    <link rel="stylesheet" href="shop.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .prod {
            font-size: 1.5rem;
            font-weight: 500;
            color: #ecfdf8;
        }
    #product-details {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 50px;
    }
    
    #product-details img {
        width: 100px;
        height: 80px;
        margin-bottom: 10px;
    }
    
    #product-details h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    
    #product-details p {
        font-size: 16px;
        margin-bottom: 10px;
    }
    /* css from */
    #customer-info-form {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #cccccc;
            border-radius: 10px;
            background-color: #ffffff;
            text-align: center;
        }
        label {
            font-size: 20px;
            color: #0a0a0a;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            padding-left: 10px;
            padding-right: 10px;
            display: block;
            width: 100%;
            padding: 10px;
            margin: 0 auto;
            margin-bottom: 15px;
            margin-top: 5px; /* added margin-top */
            font-size: 16px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* added transition property */
        }
        /* added hover effect */
        input[type="text"]:hover,
        input[type="email"]:hover,
        input[type="tel"]:hover {
            background-color: #f6f6f6;
        }
        button[type="submit"] {
            display: inline-block;
            background-color: #fbb034;
            color: #0a0a0a;
            font-size: 20px;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #fe5b3d;
        }
        #buy-now-button {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            background-color: #0000ff;
            border: none;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            box-shadow: 0 5px 0 #0066cc;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        #buy-now-button:hover {
            background-color: #fe5b3d;
            box-shadow: 0 8px 0 #0000ff;
        }
        #customer-info-form h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        h2::after {
            content: "";
            display: block;
            height: 2px;
            width: 80%;
            background-color: #fbb034;
            margin: 10px auto;
        }
        .boxx {
            position: relative;
             padding: 10px;
             display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0.5rem;
            box-shadow: 0 0 16px #0000ff;
        }
        .boxx img {
            width: 100%;
            height: 250px;
            object-fit: contain;
            object-position: center;
            background: #FFFFFF;
            padding: 20px;
            border-radius: 0.5rem;
        }
        .product-cont {
            padding-left: 50px;
            display: grid;
            align-items: center;
            grid-template-columns: repeat(auto-fit, minmax(380px, auto));
            gap: 2.5rem;
            margin: 2rem;
        } 
        .product-cont .boxx img:hover {
            -webkit-transform: scaleX(-1);
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            transform: scaleX(-1);
            transition: 0.4s all linear;
        }

        .boxx h1,
        .boxx p {
            padding-right: 10px;
            margin-bottom: 10px;
        }
        .boxx p {
            font-size: 18px;
            font-weight: 500;
        }  
        /*@media screen and (max-width: 768px) {
        body {
            flex-direction: column;
        }
        
        #product-details {
            margin-right: 0;
            margin-bottom: 50px;
        }
        } */
        .center {
            text-align: center;
            padding-bottom: 15px;
        }

        .support {
            font-size: 20px;
            margin-top: 20px;
            font-weight: 500;
        }
        .support .bx {
            font-size: 24px;
            color: #000;
            padding: 10px;
            background: var(--second-color);
            border-radius: 5rem;
        }
        .support .bx:hover {
            background-color: #ff0000;
            color: var(--text-color);
        }
        .cont .bx {
            font-size: 38px;
            cursor: pointer;
            z-index: 1000;
            column-gap: 0.8rem;
            color: #f0eded
        }
        .cont .bx:hover {
            color: #fe5b3d;
        }
        @media (max-width: 1058px) {
            .boxx {
            position: relative;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0.5rem;
            box-shadow: 0 0 16px #0000ff;
        }
        .boxx img {
            width: 100%;
            height: 255px;
            object-fit: contain;
            object-position: center;
            background: #FFFFFF;
            padding: 20px;
            border-radius: 0.5rem;
        }
        .product-cont {
            padding-left: 15px;
        }
        }
        @media (max-width: 991px) {
            .boxx {
            position: relative;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0.5rem;
            box-shadow: 0 0 16px #0000ff;
        }
        .boxx img {
            width: 100%;
            height: 255px;
            object-fit: contain;
            object-position: center;
            background: #FFFFFF;
            padding: 20px;
            border-radius: 0.5rem;
        }
        .product-cont {
            padding-left: 9px;
        }
        }
        @media (max-width: 768px) {
            .boxx {
            position: relative;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0.5rem;
            box-shadow: 0 0 16px #0000ff;
        }
        .boxx img {
            width: 100%;
            height: 255px;
            object-fit: contain;
            object-position: center;
            background: #FFFFFF;
            padding: 20px;
            border-radius: 0.5rem;
        }
        .product-cont {
            padding-left: 9px;
        }
        .center {
            text-align: center;
            padding-bottom: 15px;
        }
        .support {
            font-size: 20px;
            margin-top: 20px;
            font-weight: 500;
            padding-left: 20px;
            padding-right: 20px;
        }
        }
        @media (max-width: 614px) {
            .boxx {
            position: relative;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0.5rem;
            box-shadow: 0 0 16px #0000ff;
        }
        .boxx img {
            width: 100%;
            height: 255px;
            object-fit: contain;
            object-position: center;
            background: #FFFFFF;
            padding: 20px;
            border-radius: 0.5rem;
        }
        .product-cont {
            padding-left: 9px;
        }
        .center {
            text-align: center;
            padding-bottom: 15px;
        }
        .support {
            font-size: 20px;
            margin-top: 20px;
            font-weight: 500;
            padding-left: 30px;
            padding-right: 30px;
        }
        }
        @media (max-width: 360px), (max-width: 375px), (max-width: 412px) {
            .boxx {
            position: relative;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0.5rem;
            box-shadow: 0 0 16px #0000ff;
        }
        .boxx img {
            width: 100%;
            height: 255px;
            object-fit: contain;
            object-position: center;
            background: #FFFFFF;
            padding: 20px;
            border-radius: 0.5rem;
        }
        .product-cont {
            padding-left: 5px;
        }
        .center {
            padding-bottom: 15px;
        }
        .support {
            padding-top: 20px;
            padding-right: 40px;
            padding-left: 60px;
            display: grid;
            align-items: center;
            grid-template-columns: repeat(auto-fit, minmax(370px, auto));
            padding-bottom: 13px;
        }
        #customer-info-form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #cccccc;
            border-radius: 10px;
            background-color: #ffffff;
            text-align: center;
        }
        }
        .tsct {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
            margin: 20px auto;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-right: 10px;
        }
    </style>

</head>
<body>
    <header  dir="rtl">
        <a dir="ltr" href="index.php" class="logo"><i class='bx bx-pointer bx-rotate-90' ></i><b>QuickBuy</b></a>
      <!--  <div class="cont">
            <a href="#"><i  class='bx bxl-whatsapp'></i></a>
        </div>   -->
        <div class="sing">
            <a style="color: #ecfdf8"; href="sign.html" target="_blank"> <p class="affiche">مرحبا، تسجيل الدخول <br><b>الحساب</b></p></a>
            <!--
            <div class="sing-account">
                <a href="sign.html" target="_blank"><button class="singin">تسجيل الدخول</button></a>
                <p style="color: #000; font-size: 1rem;" id="newc">أنت عميل جديد؟ <a href="create.html" target="_blank" style="color: #0000ff;">ابدأ من هنا.</a></p>
            </div>
            -->
        </div>
        <a href="index.php" class="pro"><span class="prod">المنتجات</span></a>
    </header> 
    
    <?php

// Retrieve the product details from the database using the product ID
$servername = "localhost";
$username = "root";
$password = "KHALI@med2000";
$dbname = "e-commerce";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM productes WHERE id='$product_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the product details and payment form
        echo '<div  class="product-cont">';
        echo '<div class="boxx box produ">';
        $images = explode(',', $row['image']);
        $image_path = 'imgproducts/' . $images[0];
        echo '<img src="' . $image_path . '" alt="">';
        echo '<h1 dir="rtl">' . $row['name'] . '</h1>';
        echo '<p class="tsct" dir="rtl">' . $row['description'] . '</p>';
        echo '<div dir="rtl" class="product-info">';
        if ($row['sale'] == 1) {
            $product_price = $row['sale_price']; // Set the product price to the sale price in MAD
            echo '<p class="sale" data-original-price="' . $row['sale_price'] . '">السعر المنخفض: ' . $row['sale_price'] . ' MAD</p>';
        } else {
            $product_price = $row['price']; // Set the product price to the regular price in MAD
            echo '<p class="sale" data-original-price="' . $row['price'] . '">السعر: ' . $row['price'] . ' MAD</p>';
        }
        echo '</div>';
        echo '</div>';
        echo '<form dir="rtl"  id="customer-info-form" method="post" action="">';
        echo '<h2>لا تضيع الفرصة، أرسل طلبك الآن وتمتع بالامتيازات المذهلة!</h2>';
        // Add hidden input fields for the price values
        echo '<input type="hidden" name="product_price" id="product_price" value="">';
        echo '<input type="hidden" name="original_price" id="original_price" value="">';
        echo '<input type="hidden" name="currency_code" id="currency_code" value="">';
        echo '<label for="name">الاسم:</label>';
        echo '<input type="text" id="name" name="name" required>';
        echo '<label for="email">البريد الإلكتروني:</label>';
        echo '<input type="email" id="email" name="email" required>';
        echo '<label for="telephone">رقم الهاتف:</label>';
        echo '<input type="tel" id="telephone" name="telephone" required>';
        echo '<label for="city">المدينة:</label>';
        echo '<input type="text" id="city" name="city" required>';
        echo '<button id="submit-form" name="submit" type="submit">تأكيد الشراء</button>';
        echo '</form>';
        echo '</div>';
        // Add JavaScript to show/hide customer info form
        echo '<script>';
    
        echo '</script>';
    } else {
        echo "Product not found";
    }
}
    
if (isset($_POST['submit'])) {
    // Retrieve the product details from the database using the product ID
    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM productes WHERE id='$product_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Retrieve customer info from form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $city = $_POST['city'];

        // Retrieve the price values from the form
        $product_price = $_POST['product_price'];
        $original_price = $_POST['original_price'];
        $currency_code = $_POST['currency_code'];
        // Remove any non-numeric characters and keep only the decimal value
        $product_price = preg_replace('/[^0-9.]/', '', $product_price);

        // Insert customer and product info into the database
        $order_date = date("Y-m-d H:i:s");
        $modified_order_date = date("Y-m-d H:i:s", strtotime("+1 hour", strtotime($order_date)));
        $sql = "INSERT INTO ordersss (product_name, product_image, product_price, currency_code, customer_name, customer_email, customer_phone, customer_city, order_date)
        VALUES ('" . $row['name'] . "', '" . $row['image'] . "', '$product_price', '$currency_code', '$name', '$email', '$telephone', '$city', '$modified_order_date')";

        if ($conn->query($sql) === TRUE) {
            // Order successfully submitted
            $product_name = $row['name'];
            $product_image = $row['image'];
            $customer_name = $name;
            $customer_email = $email;
            $customer_phone = $telephone;
            $customer_city = $city;
            // Redirect the user to the thank you page
            echo "<script>window.location.assign('thankyou.php');</script>";
            exit();
        } else {
            // Error submitting order
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Product not found";
    }
}

$conn->close();
?>

    
    <div class="center contac">
        <div class="support">
            <p dir="rtl">إذا واجهت أي مشكلة أثناء عملية الدفع، لا تتردد في الاتصال بنا على الواتساب لفريق الدعم. نحن دائماً متاحون لمساعدتك في أي وقت.</p>
            <a href="https://api.whatsapp.com/send?phone=212695654094&text=مرحبا، طلب خدمة العملاء" target="_blank"><i class='bx bxl-whatsapp'></i></a>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2026 <b>QuickBuy</b> <span  dir="rtl"> جميع الحقوق محفوظة . </span></p>
    </div>
    <div style="display: none;" class="hoverr">
            <li class="tr_currency"><a href="#"><span class="flag"><span class="circle">&#x1F1F2;&#x1F1E6;</span> عربي</span>-<span class="flogss">MAD</span></a></li>
            <div class="arbicenxlish">
                <div class="tarjama">
                    <h2>اللغات:</h2>
                    <span class="flag" onclick="redirectTo('ar')">&#x1F1F2;&#x1F1E6; عربي</span><br>
                    <span class="flag" onclick="redirectTo('en')">&#x1F1FA;&#x1F1F8; إنجليزي</span>
                </div>
                <div class="aomlla">
                    <h2>عملة:</h2>
                    <span class="flag" style="word-spacing: 5px;">QAR &#x1F1F6;&#x1F1E6;</span>
                    <span class="flag" style="word-spacing: 5px;">AED &#x1F1E6;&#x1F1EA;</span>
                    <span class="flag" style="word-spacing: 5px;">JOD &#x1F1EF;&#x1F1F4;</span>
                    <span class="flag" style="word-spacing: 5px;">BHD &#x1F1E7;&#x1F1ED;</span><br>
                    <span class="flag" style="word-spacing: 5px;">XOF &#x1F1EB;&#x1F1F4;</span>
                    <span class="flag" style="word-spacing: 5px;">TND &#x1F1F9;&#x1F1F3;</span>
                    <span class="flag" style="word-spacing: 5px;">LYD &#x1F1F1;&#x1F1FE;</span>
                    <span class="flag" style="word-spacing: 5px;">SAR &#x1F1F8;&#x1F1E6;</span><br>
                    <span class="flag" style="word-spacing: 5px;">OMR &#x1F1F4;&#x1F1F2;</span>
                    <span class="flag" style="word-spacing: 5px;">IQD &#x1F1F8;&#x1F1E7;</span>
                    <span class="flag" style="word-spacing: 5px;">EUR &#x1F1EA;&#x1F1FA;</span>
                    <span class="flag" style="word-spacing: 5px;">USD &#x1F1FA;&#x1F1F8;</span><br>
                    <span class="flag" style="word-spacing: 5px;">EGP &#x1F1EA;&#x1F1EC;</span>
                    <span class="flag" style="word-spacing: 5px;">MAD &#x1F1F2;&#x1F1E6;</span>
                    <span class="flag" style="word-spacing: 5px;">DZD &#x1F1E9;&#x1F1FF;</span><br>
                    <span class="flag" style="word-spacing: 5px;">ILS &#x1F1F5;&#x1F1F8;</span>
                    <span class="flag" style="word-spacing: 5px;">KWD &#x1F1F0;&#x1F1FC;</span>
                    <span class="flag" style="word-spacing: 5px;">CNY &#x1F1E8;&#x1F1F3;</span>               
                </div>
            </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script>
     $(document).ready(function() {
        $('.boxx  img').elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            onMouseMove: function() {
                // Get the position of the mouse over the main image
                var mouseX = this.pageX - $(this).offset().left;
                var mouseY = this.pageY - $(this).offset().top;
                
                // Get the zoom window element
                var zoomWindow = $(this).siblings('.zoomWindow');
                
                // Get the size of the zoom window
                var zoomWidth = zoomWindow.width();
                var zoomHeight = zoomWindow.height();
                
                // Calculate the position of the zoom window relative to the main image
                var zoomX = mouseX - zoomWidth / 2;
                var zoomY = mouseY - zoomHeight / 2;
                
                // Limit the position of the zoom window within the boundaries of the main image
                if (zoomX < 0) zoomX = 0;
                if (zoomY < 0) zoomY = 0;
                if (zoomX > $(this).width() - zoomWidth) zoomX = $(this).width() - zoomWidth;
                if (zoomY > $(this).height() - zoomHeight) zoomY = $(this).height() - zoomHeight;
                
                // Set the position of the zoom window
                zoomWindow.css({
                    left: zoomX,
                    top: zoomY
                });
            }
        });
     });
     
     // transfert currency MAD to USD
     function convertPrices(currencyCode) {
            // Conversion rates for currencies
            const conversionRates = {
                "CNY": 0.74,
                "TND": 0.32,
                "KWD": 0.031,
                "SAR": 0.38,
                "LYD": 0.49,
                "EGP": 3.16,
                "AED": 0.38,
                "QAR": 0.37,
                "BHD": 0.039,
                "USD": 0.10,
                "EUR": 0.093,
                "ILS": 0.38,
                "IQD": 133.94,
                "OMR": 0.039,
                "JOD": 0.073,
                "XOF": 61.60,
                "DZD": 13.88
            };
            // Get all the product prices
            const productPrices = document.querySelectorAll('.box.produ .sale');
            const throghPrices = document.querySelectorAll('.box.produ .throgh');
            // Loop through each product price and convert it based on the selected currency
            productPrices.forEach((priceElement, index) => {
                const originalPriceElement = throghPrices[index];
                const originalPriceInDhs = parseFloat(priceElement.dataset.originalPrice);
                let convertedPrice;
                if (currencyCode === "MAD") {
                    // Currency is MAD, no conversion needed
                    convertedPrice = originalPriceInDhs;
                } else {
                    // Currency is not MAD, perform conversion
                    convertedPrice = originalPriceInDhs * conversionRates[currencyCode];
                }
                // Adjust the converted price based on the conditions
                if (convertedPrice > 5) {
                    convertedPrice += 1;
                    convertedPrice = Math.floor(convertedPrice);
                } else {
                    convertedPrice = Math.floor(convertedPrice);
                }
                priceElement.textContent = convertedPrice.toFixed(1) + ' ' + currencyCode;
                
                // Conditionally convert the original price if it exists
                if (originalPriceElement) {
                    const originalPrice = parseFloat(originalPriceElement.dataset.originalPrice);
                    let convertedOriginalPrice;
                    if (currencyCode === "MAD") {
                        // Currency is MAD, no conversion needed
                        convertedOriginalPrice = originalPrice;
                    } else {
                        // Currency is not MAD, perform conversion
                        convertedOriginalPrice = originalPrice * conversionRates[currencyCode];
                    }
                    
                    // Adjust the converted original price based on the conditions
                    if (convertedOriginalPrice > 5) {
                        convertedOriginalPrice += 1;
                        convertedOriginalPrice = Math.floor(convertedOriginalPrice);
                    } else {
                        convertedOriginalPrice = Math.floor(convertedOriginalPrice);
                    }
                    originalPriceElement.textContent = convertedOriginalPrice.toFixed(1) + ' ' + currencyCode;
                }
            });
        }

        // Get the currency links
        const currencyLinks = document.querySelectorAll('.aomlla .flag');

        // Add click event listener to each currency link
        currencyLinks.forEach(currency => {
            currency.addEventListener('click', function() {
                // Get the currency code and flag code
                const currencyCode = this.textContent.trim().split(' ')[0];
                const flagCode = this.textContent.trim().split(' ')[1];
                
                // Update the selected currency and flag
                const selectedCurrency = document.querySelector('.tr_currency .flogss');
                const flagElement = document.querySelector('.tr_currency .circle');

                selectedCurrency.textContent = currencyCode;
                flagElement.innerHTML = flagCode;
                
                // Save the selected currency code and flag code to local storage
                localStorage.setItem('selectedCurrency', currencyCode);
                localStorage.setItem('selectedFlag', flagCode);
                
                // Convert the prices based on the selected currency
                convertPrices(currencyCode);
            });
        });
        
        // Check if a selected currency and flag are stored in local storage
        const storedCurrency = localStorage.getItem('selectedCurrency');
        const storedFlag = localStorage.getItem('selectedFlag');
        if (storedCurrency && storedFlag) {
            // Update the selected currency and flag with the stored values
            const selectedCurrency = document.querySelector('.tr_currency .flogss');
            const flagElement = document.querySelector('.tr_currency .circle');
            selectedCurrency.textContent = storedCurrency;
            flagElement.innerHTML = storedFlag;

            // Convert the prices based on the stored currency
            convertPrices(storedCurrency);
        }
        // After adjusting the converted prices, update the hidden input fields with the price values
        const priceElement = document.querySelector('.sale');
        const originalPriceElement = document.querySelector('.throgh');
        const currencyCodeElement = document.getElementById('currency_code');

        const priceValue = priceElement.textContent.split(' ')[0]; // Extract the price value without the currency code
        const originalPriceValue = originalPriceElement ? originalPriceElement.textContent.split(' ')[0] : ''; // Extract the original price value without the currency code
        const currencyCode = document.querySelector('.tr_currency .flogss').textContent; // Get the selected currency code
        
        // Update the hidden input fields with the price values
        document.getElementById('product_price').value = priceValue;
        document.getElementById('original_price').value = originalPriceValue;
        currencyCodeElement.value = currencyCode;


    </script>
</body>
</html>