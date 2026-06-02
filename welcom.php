<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returning Customers.your account</title>
    <!-- <script src="https://kit.fontawesome.com/ee5602b936.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="shop.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .welcome-ar {
            padding-top: 45px;
            padding-right: 40px;
        }
        .welcome-en {
            padding-top: 15px;
            padding-left: 40px;
        }
        .welcome-ar p {
            font-size: 20px;
            line-height: 30px;
            word-spacing: 2px;
        }
        .welcome-en p {
            font-size: 20px;
            line-height: 30px;
            word-spacing: 2px;
        }
        .prod {
            font-size: 1.5rem;
            font-weight: 500;
            color: #ecfdf8;
        }
        .shop h3 {
            font-size: 25px;
            line-height: 30px;
            word-spacing: 2px;
        }
        .shop {
            padding-top: 45px;
            text-align: center;
        }
        .shop a {
            color: #fe5b3d;
            font-size: 25px;
            line-height: 30px;
            word-spacing: 2px;
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
        label {
            font-size: 20px;
            color: #0a0a0a;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            display: block;
            width: 100%;
            padding: 10px;
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
            color: #000;
            background-color: #d3d3d3;
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
            .product-container {
                max-width: 1000px;
            }
        }
        @media (max-width: 991px) {
            .product-container {
                max-width: 900px;
            }
        }
        @media (max-width: 768px) {
            .product-container {
                max-width: 700px;
            }
            .support {
                font-size: 20px;
                margin-top: 20px;
                font-weight: 500;
                width: 50%;
                margin: 15px auto;
            }
           .search-box {
                order: 2;
                flex-basis: 100%;
                margin-top: 16px;
                margin-bottom: 16px;
            }
            .search-box {
                order: 2;
                flex-basis: 100%;
            }
            .logo, .bxcart, .pro, .sing {
                order: 1;
                flex-basis: auto;
            }
        }
        @media (max-width: 614px) {
            .product-container {
                max-width: 540px;
            }
            .support {
                font-size: 20px;
                margin-top: 20px;
                font-weight: 500;
                width: 50%;
                margin: 15px auto;
            }
           .search-box {
                order: 2;
                flex-basis: 100%;
                margin-top: 16px;
                margin-bottom: 16px;
            }
            .search-box {
                order: 2;
                flex-basis: 100%;
            }
            .logo, .bxcart, .pro, .sing {
                order: 1;
                flex-basis: auto;
            }
        } @media (max-width: 360px), (max-width: 375px) {
            .product-container {
                width: 100%;
                max-width: 390px;
                margin: 2rem auto;
                padding: 0.5rem;
                box-shadow: 0 0 8px #0000ff; 
                align-items: none;
            }
            .ev {
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                gap: 1.5rem;
            }
            .product-header {
                justify-content: space-evenly;
                width: 100%;
            }
            .ef {
                padding-left: 5px;
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                
            }
            .basketTotal-title {
                width: 50%;
            } 
            .sing {
                order: 2;
                flex-basis: 100%;
                margin-top: 12px;
                margin-bottom: 12px;
            }
            .sing {
                order: 2;
                flex-basis: 100%;
                text-align: center;
            }
            .logo, .bxcart, .prod {
                order: 1;
                flex-basis: auto;
            }
            
            .product-header {
                font-size: 16px;
                padding-top: 50px;
                flex-wrap: wrap;
            }

            .product-title {
                width: 40%;
            }
            .product-container p {
                width: 20px;
                height: 20px;
                font-size: 1.2rem;
                border-radius: 50%;
            }
            .product-item {
                padding: .3rem .5rem;
                margin: .5rem 0;
            }
            .product {
                width: 30%;
                padding-bottom: .2rem;
                font-size: 12px;
            }

            .quantity span {
                font-size: 12px;
            }

            .product-container img {
                width: 80px;
                margin: .5rem 0;
            }

            .basketTotalContainer {
                padding: 5px 0;
            }

            .element {
                width: 100%;
                min-width: 300px;
                height: 1px;
                margin: 1rem auto;
            }
             .support {
                font-size: 20px;
                margin-top: 20px;
                font-weight: 500;
                width: 50%;
                margin: 0 auto;
            }
            .aaa {
                padding-left: 5px;
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                padding-bottom: 13px;
            }
            .ff {
                padding-left: 5px;
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                padding-bottom: 13px;
            }
            .arbb {
                padding-top: 20px;
                padding-right: 40px;
                padding-left: 5px;
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                padding-bottom: 13px;
            }
            .enbb {
                padding-top: 20px;
                padding-right: 40px;
                padding-left: 5px;
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                padding-bottom: 13px;
            }
            .shob {
                padding-left: 5px;
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                padding-bottom: 13px;
            }
            .from {
                padding-left: 5px;
                display: grid;
                align-items: center;
                grid-template-columns: repeat(auto-fit, minmax(470px, auto));
                padding-bottom: 13px;
            }
        }
        
    </style>
</head>
<body>
    <header dir="rtl">
        <!--logo-->
        <a dir="ltr" href="index.php" class="logo"><i class='bx bx-pointer bx-rotate-90' ></i><b>QuickBuy</b></a>
    <!--    <div class="cont">
            <a href="#"><i  class='bx bxl-whatsapp'></i></a>
        </div> -->
        <form id="logout-form" method="POST" action="logout.php">
            <input type="hidden" name="logout" value="true">
        </form>
        <a href="index.php" class="prod" id="logout-link"><span class="prod" name="logout">تسجيل الخروج</span></a>
         <div class="bxcart">
            <a class="addcarts" href="index.php"><i class='bx bx-cart-add' style='color: #f0eded'><span class="zero">0</span></i></a>
            <p class="sing">سلة التسوق</p>
        </div>
    </header> 
    <div class="ff">
        <a href="#confirm"><button id="buy-now-button">تأكيد الطلب</button></a>
    </div>
    <div class="arbb">
    <div class="welcome-ar" dir="rtl">
        <p>نتمنى لك تجربة تسوق ممتعة ورائعة! نحن سعداء جدًا بوجودك في حسابك الشخصي. &#x1F60A;&#128525;</p>
    </div>
    </div>
    <div class="enbb">
    <div class="welcome-en">
        <p>We wish you a fun and amazing shopping experience! We're thrilled to have you in your personal account.  &#x1F60A;&#128525;</p>
    </div>
    </div>
    <div class="shob">
    <div class="shop">
        <h3>تسوّق بكل سهولة <a href="index.php">الآن</a></h3> <br>
        <h3>Shop with ease <a href="index.php">now</a></h3>
    </div>
    </div>
    <div class="ef">
    <div dir="rtl" class="product-header">
        <h5 class="product-title">المنتج</h5>
        <h5 class="price">السعر</h5>
        <h5 class="quantity">الكمية</h5>
        <h5 class="total">الإجمالي</h5>
    </div>
    </div>
    <div dir="rtl" class="container">
        <div class="element"></div>
    </div> 
    <div class="ev">
    <div dir="rtl" class="product-container">
        <div class="products">
        </div>
    </div>
    </div>
    <div class="from">
    <section id="confirm">
        <form dir="rtl" id="customer-info-form" method="post" action="orderp.php" style="display: none;" >
            <h2>لا تضيع الفرصة، أرسل طلبك الآن وتمتع بالامتيازات المذهلة!</h2>

            <label for="name">الاسم:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">البريد الإلكتروني:</label><br>
            <input type="email" id="email" name="email" required><br><br>
    
            <label for="telephone">رقم الهاتف:</label><br>
            <input type="tel" id="telephone" name="telephone" required><br><br>
    
            <label for="city">المدينة:</label><br>
            <input type="text" id="city" name="city" required><br><br>
    
            <button id="submit-form" name="subm" type="submit" >تأكيد الشراء</button>
        </form>
    </section>
    </div>
    <div class="center aaa contac">
        <div class="support">
            <p dir="rtl">إذا واجهت أي مشكلة أثناء عملية الدفع، لا تتردد في الاتصال بنا على الواتساب لفريق الدعم. نحن دائماً متاحون لمساعدتك في أي وقت.</p>
            <a href="#" target="_blank"><i class='bx bxl-whatsapp'></i></a>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2026 <b>QuickBuy</b> <span  dir="rtl"> جميع الحقوق محفوظة . </span></p>
    </div>
    <script src="shop1.js"></script>
    <script>
    const logoutLink = document.querySelector('#logout-link');
    const logoutForm = document.querySelector('#logout-form');
    logoutLink.addEventListener('click', (event) => {
        event.preventDefault();
        logoutForm.submit();
    });
</script>
</body>
</html>

<?php

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
