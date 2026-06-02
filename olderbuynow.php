<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Older of buy now</title>
    <style>
        div.centre {
            text-align: center;
            line-height: 35px;
            padding-bottom: 20px;
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
        /* حقوق الطبع والنشر */
        .olderr {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }
    
        .olderr a {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #000;
            text-decoration: none;
        }
    
        .olderr a:hover {
            color: #fe5b3d;
        }
    
        .olderr a:last-child {
            margin-bottom: 0;
        }
    
        .olderr a:focus {
            outline: none;
        }
    
       .copyright {
           background-color: #f9f9f9;
           border-top: 1px solid #e5e5e5;
           margin-top: 50px;
           padding: 20px 0;
	       min-height: 200px;
        }
    
       .copyright {
            font-size: 14px;
            text-align: center;
       }
       h1 {
        text-align: center;
        font-weight: 600;
       }
    </style>

</head>
<body>
    <div class="centre">
        <a href="index.php" class="logo"><i class='bx bx-pointer bx-rotate-90' ></i><b>QuickBuy</b></a>
    </div>
    <h1>olders customers</h1>
    <div class="olderr">
        <a href="tableoldertoday.php?table=oldertoday">Older Today Table</a>
        <a href="tableolderweek.php?table=olderweek">Older Week Table</a>
        <a href="tableoldermonth.php?table=oldermonth">Older Month Table</a>
        <a href="tableolderbuy.php?table=oldermonth">Older All Table</a>
    </div>
    <div class="copyright">
        <p>&copy; 2026 <b>QuickBuy</b> <span dir="rtl"> جميع الحقوق محفوظة . </span></p>
    </div>
</body>
</html>
