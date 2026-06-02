<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickBuy</title>
    <link rel="stylesheet" href="shop.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="ramadan-banner">
        <p dir="rtl">رمضان كريم - خصم 20%</p>
        <span class="close-btn" onclick="closeBanner()">×</span>
    </div>
    <!--navbar-->
    <header dir="rtl">
        <!-- الشعار -->
        <a dir="ltr" href="shop.php" class="logo"><i class='bx bx-pointer bx-rotate-90' ></i><b>QuickBuy</b></a>
        <!-- أيقونة القائمة -->
        <div class="search-box" id="search-bo">
            <input type="search" placeholder="بحث QuickBuy" id="search-field" name="" onkeyup="searchProducts()">
            <a href="#" id="searsh search-button"><i class='bx bx-search' style='color: #918f8fa3'></i></a>
        </div>
        <!-- اللغات 
        <div class="langg">
            <select class="language-select" id="language-select">
                <option value="ar">العربية</option>
                <option value="en">English</option>
            </select>
        </div>
        تسجيل الدخول -->
        <div class="sing">
            <a style="color: #eae4e7;" href="welcom.php"><p class="affiche">مرحبا، قم بزيارة<br><b>الحساب</b></p></a>
            <!--
            <div class="sing-account">
                <a href="sign.html" target="_blank"><button class="singin">Sing in</button></a>
                <p style="color: #000; font-size: 1rem;" id="newc">New customer? <a href="create.html" target="_blank" style="color: #0000ff;"> Start here.</a></p>
            </div>
            -->
        </div>
        <!-- سلة التسوق -->
        <div class="bxcart">
            <a class="addcarts" href="addcart.php"><i class='bx bx-cart-add' style='color: #f0eded'><span class="zero">0</span></i></a>
            <p class="sing">سلة التسوق</p>
        </div>
    </header> 
    <nav dir="rtl" class="hapc">
        <i style=" text-align: center;" class='bx bx-menu' id="menu-icon"></i>
        <ul class="navul">
            <li><a href="#home">الرئيسية</a></li>
            <li><a href="#productt">المنتجات</a></li>
            <li><a href="#about">من نحن</a></li>
            <li><a href="#customer">العملاء</a></li>
        </ul>
    </nav>
    <section class="home" id="home">
        <div class="home-slider">
            <div class="w">
                <section class="slide">
                    <div class="np">
                        <div class="prev" onclick="mychange('prev');"><</div> 
                        <div class="next" onclick="mychange('next');">></div>
                    </div>
                    <div class="content">
                        <h2 class="txt1" id="txt1">ابحث عن توافقك المثالي مع اختيارنا من مستحضرات التجميل والجمال - تسوق اليوم</h2>
                        <a href="#productt"><button style="color: #fff;" type="button"> اشتري الآن</button></a>
                    </div>
                </section>
                <!--
                <section class="slide" style="background: url(cloth.jpg) no-repeat;">
                    <div class="content">
                        <h1>قم بترقية خزانتك بملابس أنيقة - اشتري الملابس.</h1>
                        <a href="#"><button type="button"> اشتري الآن</a>
                    </div>
                </section>
                <section class="slide" style="background: url(product.jpg) no-repeat;">
                    <div class="content">
                        <h1>قم بترقية خزانتك بملابس أنيقة - اشتري الملابس.</h1>
                        <a href="#"><button type="button"> اشتري الآن</a>
                    </div>
                </section> -->
            </div>
        </div>    
    </section>
    <!--products-->
    <section class="productt" id="productt">
        <div class="heading">
            <h2>منتجنا الأكثر حبًا</h2>
        </div>
        <!--
        <div class="n">
            <h4>men's clothes</h4>
    
        <div class="products-container">
            <div class="box produ">
                <img src="prod1.jpg" alt="">
                <h2>nameproduct1</h2>
                <p>secription1</p>
                <div class="saledh">
                    <span class="throgh">24Dhs</span>
                    <span class="sale">18Dhs</span>
                </div> 
                <button type="submit" class="now">Buy Now</button> <p class="to">Add to Cart &rarr;</p><i class='bx add-cart cart1  bxs-cart-download'></i>
            </div>
            <div class="box produ">
                <img src="prod1.jpg" alt="">
                <h2>nameproduct2</h2>
                <p>secription2</p>
                <div class="saledh">
                    <span class="throgh">24Dhs</span>
                    <span class="sale">18Dhs</span>
                </div>
                <button type="submit" class="now">Buy Now</button> <p class="to">Add to Cart &rarr;</p><i class='bx add-cart cart1  bxs-cart-download'></i>
            </div>
            <div class="box produ">
                <img src="prod1.jpg" alt="">
                <h2>nameproduct3</h2>
                <p>secription3</p>
                <div class="saledh">
                    <span class="throgh">24Dhs</span>
                    <span class="sale">18Dhs</span>
                </div>
                <button type="submit" class="now">Buy Now</button> <p class="to">Add to Cart &rarr;</p><i class='bx add-cart cart1  bxs-cart-download'></i>
            </div>
            <div class="box produ">
                <img src="prod1.jpg" alt="">
                <h2>nameproduct4</h2>
                <p>secription4</p>
                <div class="saledh">
                    <span class="throgh">24Dhs</span>
                    <span class="sale">18Dhs</span>
                </div>
                <button type="submit" class="now">Buy Now</button> <p class="to">Add to Cart &rarr;</p><i class='bx add-cart cart1  bxs-cart-download'></i>
            </div>
            <div class="box produ">
                <img src="prod1.jpg" alt="">
                <h2>nameproduct5</h2>
                <p>secription5</p>
                <div class="saledh">
                    <span class="throgh">24Dhs</span>
                    <span class="sale">18Dhs</span>
                </div>
                <button type="submit" class="now">Buy Now</button> <p class="to">Add to Cart &rarr;</p><i class='bx add-cart cart1  bxs-cart-download'></i>
            </div>
            <div class="box produ">
                <img src="prod1.jpg" alt="">
                <h2>name product6</h2>
                <p>secription6</p>
                <div class="saledh">
                    <span class="throgh">24Dhs</span>
                    <span class="sale">18Dhs</span>
                </div>
                <button type="submit" class="now">Buy Now</button> <p class="to">Add to Cart &rarr;</p><i class='bx add-cart cart1  bxs-cart-download'></i>
            </div>
            <?php
			// Retrieve the products from the database 
			//$serverename = "localhost";
           // $username = "root";
          //  $password = "root";
           // $dbname = "e-commerce";

	       // $conn = new mysqli($servername, $username, $password, $dbname);
		//	if ($conn->connect_error) {
			//	die("Connection failed: " . $conn->connect_error);
		//	}
		//	$sql = "SELECT * FROM productes";
		//	$result = $conn->query($sql);
		//	if ($result->num_rows > 0) {
			//	while($row = $result->fetch_assoc()) {
					// Display the product with its image, name, description, and price
                //    echo '<div class="box produ">';
                 //   echo '<img src="../imgproducts' . $row['image'] . '" alt="">';
                 //   echo '<h2>' . $row['name'] . '</h2>';
                 //   echo '<p>' . $row['description'] . '</p>';
                 //   if ($row['sale'] == 1) {
                   //   echo '<div class="saledh">';
                   //   echo '<span class="throgh">' . $row['price'] . ' Dhs</span>';
                    //  echo '<span style="margin-left: 5px;" class="sale">' . $row['sale_price'] . ' Dhs</span>';
                   //   echo '</div>';
                   // } else {
                   //   echo '<span class="sale" style="font-weight: 600;  padding-left: 25px; color: #0a0a0a; font-size: 1.2rem;" >' . $row['price'] . ' Dhs</span>';
                  //  }
                  //  echo '<button type="submit" class="now">Buy Now</button> <p class="to">Add to Cart &rarr;</p><i class="bx add-cart cart1 bxs-cart-download"></i>';
                  //  echo '</div>';
				//}
			//} else {
			//	echo "No products found";
		//	}
		//	$conn->close();
			?>
        </div>
        </div>
        -->
        <div class="n">
            <div dir="rtl" class="woman">
                <span><h1>ملابس نسائية</h1></span>
                <span style="margin-right: 17px;"><a href="woman.php"><p class="wom">شاهد اكثر</p></a></span>
            </div>
        <div class="products-container">
        <?php
    // Retrieve the products from the database
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "e-commerce";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Filter the products by category
    $category = "women";
    $sql = "SELECT * FROM productes WHERE category='$category'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Display the product with its image, name, description, and price
            echo '<div class="box produ">';
            
            // Add a div container for the main image
            // Split the string of image names into an array of image names
            $images = explode(',', $row['image']);
            $image_paths = array_map(function($image) {
                return 'imgproducts/' . $image;
            }, $images);

            // Display the main image
            echo '<div class="main-image">';
            echo '<img id="main-image" src="' . $image_paths[0] . '" alt="">';
            echo '</div>';
            
            // Display the small images
            echo '<div class="small-images">';
            foreach ($image_paths as $path) {
                echo '<a href="displayimg.php?images=' . urlencode(implode(',', $image_paths)) . '"><img class="small-image" src="' . $path . '" alt=""></a>';
            }
            echo '</div>';            

            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p dir="rtl" class="tsct">' . $row['description'] . '</p>';
            if ($row['sale'] == 1) {
                echo '<div class="saledh">';
                echo '<span class="throgh">' . $row['price'] . ' Dhs</span>';
                echo '<span style="margin-left: 5px;" class="sale">' . $row['sale_price'] . ' Dhs</span>';
                echo '</div>';
            } else {
                echo '<span class="sale" style="font-weight: 600;  padding-left: 25px; color: #0a0a0a; font-size: 1.2rem;" >' . $row['price'] . ' Dhs</span>';
            }
            
            echo '<button type="button" class="now" onclick="window.location.href=\'payment.php?product_id=' . $row['id'] . '\'">اشتري الآن</button>';
            echo '<p class="to">أضف إلى العربة &rarr;</p>';
            echo '<i class="bx add-cart cart1 bxs-cart-download"></i>';
            
            echo '</div>';
        }
    } else {
        echo "No products found";
    }
    $conn->close();
?>

        </div>
        </div>

        <div class="n"> 
            <div dir="rtl"  class="woman">
                <span><h1>ملابس رجالية</h1></span>
                <span style="margin-right: 17px;"><a href="man.php"><p class="wom">شاهد اكثر</p></a></span>
            </div>
        <div class="products-container">
        <?php
            // Retrieve the products from the database
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "e-commerce";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Filter the products by category
            $category = "men";
            $sql = "SELECT * FROM productes WHERE category='$category'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Display the product with its image, name, description, and price
            echo '<div class="box produ">';
            
            // Add a div container for the main image
            // Split the string of image names into an array of image names
            $images = explode(',', $row['image']);
            $image_paths = array_map(function($image) {
                return 'imgproducts/' . $image;
            }, $images);

            // Display the main image
            echo '<div class="main-image">';
            echo '<img id="main-image" src="' . $image_paths[0] . '" alt="">';
            echo '</div>';
            
            // Display the small images
            echo '<div class="small-images">';
            foreach ($image_paths as $path) {
                echo '<a href="displayimg.php?images=' . urlencode(implode(',', $image_paths)) . '"><img class="small-image" src="' . $path . '" alt=""></a>';
            }
            echo '</div>';            

            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p>' . $row['description'] . '</p>';
            if ($row['sale'] == 1) {
                echo '<div class="saledh">';
                echo '<span class="throgh">' . $row['price'] . ' Dhs</span>';
                echo '<span style="margin-left: 5px;" class="sale">' . $row['sale_price'] . ' Dhs</span>';
                echo '</div>';
            } else {
                echo '<span class="sale" style="font-weight: 600;  padding-left: 25px; color: #0a0a0a; font-size: 1.2rem;" >' . $row['price'] . ' Dhs</span>';
            }
            
            echo '<button type="button" class="now" onclick="window.location.href=\'payment.php?product_id=' . $row['id'] . '\'">اشتري الآن</button>';
            echo '<p class="to">أضف إلى العربة &rarr;</p>';
            echo '<i class="bx add-cart cart1 bxs-cart-download"></i>';
            
            echo '</div>';
                }
            } else {
                echo "No products found";
            }
            $conn->close();
        ?>
        </div>
        </div>
        
        <div class="n">
            <div dir="rtl" class="woman">
                <span><h1>المنزل والمطبخ</h1></span>
                <span style="margin-right: 17px;"><a href="hometabkh.php"><p class="wom">شاهد اكثر</p></a></span>
            </div>
        <div class="products-container">
        <?php
            // Retrieve the products from the database
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "e-commerce";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Filter the products by category
            $category = "home";
            $sql = "SELECT * FROM productes WHERE category='$category'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Display the product with its image, name, description, and price
            echo '<div class="box produ">';
            
            // Add a div container for the main image
            // Split the string of image names into an array of image names
            $images = explode(',', $row['image']);
            $image_paths = array_map(function($image) {
                return 'imgproducts/' . $image;
            }, $images);

            // Display the main image
            echo '<div class="main-image">';
            echo '<img id="main-image" src="' . $image_paths[0] . '" alt="">';
            echo '</div>';
            
            // Display the small images
            echo '<div class="small-images">';
            foreach ($image_paths as $path) {
                echo '<a href="displayimg.php?images=' . urlencode(implode(',', $image_paths)) . '"><img class="small-image" src="' . $path . '" alt=""></a>';
            }
            echo '</div>';            

            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p>' . $row['description'] . '</p>';
            if ($row['sale'] == 1) {
                echo '<div class="saledh">';
                echo '<span class="throgh">' . $row['price'] . ' Dhs</span>';
                echo '<span style="margin-left: 5px;" class="sale">' . $row['sale_price'] . ' Dhs</span>';
                echo '</div>';
            } else {
                echo '<span class="sale" style="font-weight: 600;  padding-left: 25px; color: #0a0a0a; font-size: 1.2rem;" >' . $row['price'] . ' Dhs</span>';
            }
            
            echo '<button type="button" class="now" onclick="window.location.href=\'payment.php?product_id=' . $row['id'] . '\'">اشتري الآن</button>';
            echo '<p class="to">أضف إلى العربة &rarr;</p>';
            echo '<i class="bx add-cart cart1 bxs-cart-download"></i>';
            
            echo '</div>';
                }
            } else {
                echo "No products found";
            }
            $conn->close();
        ?>
        </div>
        </div>

        <div class="n">
            <div dir="rtl" class="woman">
                <span><h1>الجمال</h1></span>
                <span style="margin-right: 17px;"><a href="beauty.php"><p class="wom">شاهد اكثر</p></a></span>
            </div>
        <div class="products-container">
        <?php
            // Retrieve the products from the database
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "e-commerce";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Filter the products by category
            $category = "beauty";
            $sql = "SELECT * FROM productes WHERE category='$category'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   // Display the product with its image, name, description, and price
            echo '<div class="box produ">';
            
            // Add a div container for the main image
            // Split the string of image names into an array of image names
            $images = explode(',', $row['image']);
            $image_paths = array_map(function($image) {
                return 'imgproducts/' . $image;
            }, $images);

            // Display the main image
            echo '<div class="main-image">';
            echo '<img id="main-image" src="' . $image_paths[0] . '" alt="">';
            echo '</div>';
            
            // Display the small images
            echo '<div class="small-images">';
            foreach ($image_paths as $path) {
                echo '<a href="displayimg.php?images=' . urlencode(implode(',', $image_paths)) . '"><img class="small-image" src="' . $path . '" alt=""></a>';
            }
            echo '</div>';            

            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p>' . $row['description'] . '</p>';
            if ($row['sale'] == 1) {
                echo '<div class="saledh">';
                echo '<span class="throgh">' . $row['price'] . ' Dhs</span>';
                echo '<span style="margin-left: 5px;" class="sale">' . $row['sale_price'] . ' Dhs</span>';
                echo '</div>';
            } else {
                echo '<span class="sale" style="font-weight: 600;  padding-left: 25px; color: #0a0a0a; font-size: 1.2rem;" >' . $row['price'] . ' Dhs</span>';
            }
            
            echo '<button type="button" class="now" onclick="window.location.href=\'payment.php?product_id=' . $row['id'] . '\'">اشتري الآن</button>';
            echo '<p class="to">أضف إلى العربة &rarr;</p>';
            echo '<i class="bx add-cart cart1 bxs-cart-download"></i>';
            
            echo '</div>';
                }
            } else {
                echo "No products found";
            }
            $conn->close();
        ?>
        </div>
        </div>

        <div class="n">
            <div dir="rtl" class="woman">
                <span><h1>الحلويات</h1></span>
                <span style="margin-right: 17px;"><a href="sweets.php"><p class="wom">شاهد اكثر</p></a></span>
            </div>
        <div class="products-container">
        <?php
            // Retrieve the products from the database
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "e-commerce";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Filter the products by category
            $category = "sweets";
            $sql = "SELECT * FROM productes WHERE category='$category'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Display the product with its image, name, description, and price
            echo '<div class="box produ">';
            
            // Add a div container for the main image
            // Split the string of image names into an array of image names
            $images = explode(',', $row['image']);
            $image_paths = array_map(function($image) {
                return 'imgproducts/' . $image;
            }, $images);

            // Display the main image
            echo '<div class="main-image">';
            echo '<img id="main-image" src="' . $image_paths[0] . '" alt="">';
            echo '</div>';
            
            // Display the small images
            echo '<div class="small-images">';
            foreach ($image_paths as $path) {
                echo '<a href="displayimg.php?images=' . urlencode(implode(',', $image_paths)) . '"><img class="small-image" src="' . $path . '" alt=""></a>';
            }
            echo '</div>';            

            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p>' . $row['description'] . '</p>';
            if ($row['sale'] == 1) {
                echo '<div class="saledh">';
                echo '<span class="throgh">' . $row['price'] . ' Dhs</span>';
                echo '<span style="margin-left: 5px;" class="sale">' . $row['sale_price'] . ' Dhs</span>';
                echo '</div>';
            } else {
                echo '<span class="sale" style="font-weight: 600;  padding-left: 25px; color: #0a0a0a; font-size: 1.2rem;" >' . $row['price'] . ' Dhs</span>';
            }
            
            echo '<button type="button" class="now" onclick="window.location.href=\'payment.php?product_id=' . $row['id'] . '\'">اشتري الآن</button>';
            echo '<p class="to">أضف إلى العربة &rarr;</p>';
            echo '<i class="bx add-cart cart1 bxs-cart-download"></i>';
            
            echo '</div>';
                    
                }
            } else {
                echo "No products found";
            }
            $conn->close();
        ?>
        </div>
        </div>
    </section>
    <!--about us-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="abot.png" alt="" style="max-width: 60%; height: auto;">
        </div>
        <div dir="rtl" class="about-text">
            <h2>من نحن</h2>
            <p>QuickBuy هي شركة بيع بالتجزئة عبر الإنترنت تهدف إلى توفير تجربة تسوق سريعة وسهلة للعملاء. مع التركيز على التسليم السريع ورضا العملاء، تلتزم QuickBuy بتقديم منتجات عالية الجودة بأسعار معقولة.</p>
            <p>يتألف فريقنا من محترفين ذوي خبرة وشغوفين بالتجارة الإلكترونية وتوفير أفضل خدمة ممكنة لعملائنا. سواء كنت تتسوق للضروريات أو تبحث عن مفاجأة خاصة، فإن QuickBuy هنا لجعل حياتك أسهل وأكثر راحة.</p>
            <p>انضم إلى مجتمع QuickBuy اليوم واستمتع بمستقبل التسوق!</p>
        </div>
    </section>
    <!--customer
    <section class="customer" id="customer">
        <div class="heading">
            <h2>عملائنا الكرام</h2>
        </div>
        <div class="customers-container">
            <div class="box">
                <img src="prs.jpg" alt="">
                <h2>منال الغزوي</h2>
                <p>أنا أحب كل منتجاتكم، فعلاً رائعة! ربما أنتم الأفضل في المغرب. ليما لا..</p>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
            </div>
            <div class="box">
                <img src="prs.jpg" alt="">
                <h2>منال الغزوي</h2>
                <p>أنا أحب كل منتجاتكم، فعلاً رائعة! ربما أنتم الأفضل في المغرب. ليما لا..</p>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
            </div>
            <div class="box">
                <img src="prs.jpg" alt="">
                <h2>منال الغزوي</h2>
                <p>أنا أحب كل منتجاتكم، فعلاً رائعة! ربما أنتم الأفضل في المغرب. ليما لا..</p>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--mews-->
    <section class="newsletter" dir="rtl">
        <h2>اشترك وتمتع بالتوفير</h2>
        <!-- النموذج -->
        <form method="post" action="newstop.php">
            <input type="email" name="email" placeholder="أدخل بريدك الإلكتروني..." required>
            <input type="submit" name="submit" value="اشتراك" class="email-btn">
        </form>
    </section>
    <section dir="rtl" class="footer">
        <div class="footer-box">
            <a href="#" class="logo"><b> QuickBuy</b><i class='bx bx-pointer bx-rotate-90' ></i></a>
            <p>نحب التواصل مع عملائنا في QuickBuy، <br>
               فلنتحدث عن أي شيء، من الأسئلة إلى مجرد <br>
               قول "مرحبًا"
            </p>
            <div class="social">
                <a href="https://web.facebook.com/profile.php?id=100076118130166&_rdc=1&_rdr" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/qbuy22/?fbclid=IwAR0ij8Q1Nqlv25aq9MCJV7oFewHLuMHoct7NUsQYg-Vn3eZTrzcZdoWTrao" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
                <a href="https://api.whatsapp.com/send?phone=212635849968&text=مرحبا، طلب خدمة العملاء" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>الدعم الفني</h3>
            <li><a href="sproducts.html">المنتجات</a></li>
            <li><a href="shelp.html">المساعدة</a></li>
            <li><a href="spolicy.html">سياسة الإرجاع</a></li>
            <li><a href="sterms.html">شروط الاستخدام</a></li>
        </div>
        <div class="footer-box">
            <h3>عرض الأدلة</h3>
            <li><a href="vpayment.html">الدفع</a></li>
            <li><a href="gblogs.html">مدوناتنا</a></li>
            <li><a href="gPartners.html">شركاؤنا</a></li>
            <li><a href="#productt">تسوق الآن</a></li>
        </div>
        <div class="footer-box contact">
            <h3>تواصل</h3>
            <span><i class='bx bxs-map'></i>&nbsp;&nbsp;مدينة الرباط، المغرب</span>
            <span><i class='bx bx-phone'></i>&nbsp;&nbsp;<span dir="ltr">+212 635-849968</span></span>
            <span><i class='bx bx-envelope'></i>&nbsp;&nbsp;medquickbuy7@gmail.com</span>
        </div>
    </section>
    <!--<section class="home" id="home">
        <h2>Online Shopping at Its Best: Welcome to Our Home</h2>
        <p>Welcome to the world of online shopping! Browse our curated selection of products and enjoy the convenience <br> of shopping from the comfort of your own home.</p>
        <img src="micap.jpg" alt=""/>
    </section> -->
    <form style="display: none;" id="customer-info-form" method="post" action="orderp.php">
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="telephone">رقم الهاتف:</label>
        <input type="tel" id="telephone" name="telephone" required>
        
        <label for="city">المدينة:</label>
        <input type="text" id="city" name="city" required>
        
        <button id="submit-form" name="subm" type="submit" >إرسال</button>
    </form>
    <div class="copyright">
        <p>&copy; 2023 <b>QuickBuy</b> <span  dir="rtl"> جميع الحقوق محفوظة . </span></p>
    </div>
    <script src="shop1.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script>
     $(document).ready(function() {
        $('.box .main-image img').elevateZoom({
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
     // remove 20%
        function closeBanner() {
        const banner = document.querySelector('.ramadan-banner');
        banner.style.display = 'none';
     }
    </script>
</body>
</html>
