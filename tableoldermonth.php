<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Orders months</title>
    <style>
        table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  font-size: 16px;
}

th, td {
  text-align: left;
  padding: 12px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  color: #444;
}

td:first-child, th:first-child {
  width: 30%;
}

td:nth-child(2) {
  width: 20%;
}

td:nth-child(3), td:nth-child(4) {
  width: 15%;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f5f5f5;
}

@media only screen and (max-width: 600px) {
  td, th {
    font-size: 14px;
  }
}
 .confirmation_pending {
        color: orange;
    }

    .confirmation_success {
        color: green;
    }

    .confirmation_not_confirmed {
        color: red;
    }
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
     .copyright {
      background-color: #f9f9f9;
      border-top: 1px solid #e5e5e5;
      margin-top: 50px;
      padding: 20px 0;
	  min-height: 50px;
    }
    
    .copyright {
      font-size: 14px;
      text-align: center;
    }
    img {
      height: 50px;
      width: 75px;
    }
    </style>

</head>
<body>
  <div class="centre">
    <a href="index.php" class="logo"><i class='bx bx-pointer bx-rotate-90' ></i><b>QuickBuy</b></a>
  </div>
  <?php
$servername = "localhost";
$username = "root";
$password = "KHALI@med2000";
$dbname = "e-commerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set default time frame
$time_frame = "month";
if (isset($_GET["time_frame"])) {
    $time_frame = $_GET["time_frame"];
}

// Retrieve orders from database based on time frame
if ($time_frame == "month") {
    $sql = "SELECT * FROM ordersss WHERE YEAR(order_date) = YEAR(CURDATE()) AND MONTH(order_date) = MONTH(CURDATE())";
} else {
    die("Invalid time frame specified.");
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output table header
    echo "<table><tr><th>Product Name</th><th>Product Image</th><th>Product Price</th><th>Total Price</th><th>Order Date</th><th>Customer Name</th><th>Customer Email</th><th>Customer Phone</th><th>Customer City</th><th>Confirmation</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
      // get the first image from the list of images
      $image_path = 'imgproducts/' . explode(',', $row['product_image'])[0];
      
      // calculate the total price of the order
      $total_price = $row["product_price"] * 1;
      
      // display the product information and image
      echo "<tr><td>".$row["product_name"]."</td><td><img  src='".$image_path."'></td><td>".$row["product_price"]."</td><td>".$total_price."</td><td>".$row["order_date"]."</td><td>".$row["customer_name"]."</td><td>".$row["customer_email"]."</td><td>".$row["customer_phone"]."</td><td>".$row["customer_city"]."</td><td><span class='confirmation_pending' onclick='confirmOrder(this)'>Pending</span></td></tr>";
  }
  

    // Output table footer
    echo "</table>";
    
    } else {
    echo "No orders found.";
    }
    
    // Close connection
    $conn->close();
    
    
?>

<div class="copyright">
  <p>&copy; 2026 <b>QuickBuy</b> <span dir="rtl"> جميع الحقوق محفوظة . </span></p>
</div>
<script>
    function confirmOrder(span) {
        const confirmation_span = span;
        const order_number = confirmation_span.parentNode.parentNode.rowIndex;
        if (confirmation_span.classList.contains("confirmation_success")) {
            confirmation_span.classList.remove("confirmation_success");
            confirmation_span.classList.add("confirmation_not_confirmed");
            confirmation_span.innerHTML = "Not Confirmed";
            localStorage.setItem(order_number, "Not Confirmed");
        } else if (confirmation_span.classList.contains("confirmation_not_confirmed")) {
            confirmation_span.classList.remove("confirmation_not_confirmed");
            confirmation_span.classList.add("confirmation_pending");
            confirmation_span.innerHTML = "Pending";
            localStorage.setItem(order_number, "Pending");
        } else {
            confirmation_span.classList.remove("confirmation_pending");
            confirmation_span.classList.add("confirmation_success");
            confirmation_span.innerHTML = "Confirmed";
            localStorage.setItem(order_number, "Confirmed");
        }
    }

    // Check LocalStorage on page load
    window.onload = function() {
    const orders_table = document.getElementsByTagName("table")[0];
    let total_confirmed_price = 0;
    let total_pending_price = 0;
    let total_not_confirmed_price = 0;
    let total_price = 0;

    for (let i = 1; i < orders_table.rows.length; i++) {
        const confirmation_span = orders_table.rows[i].cells[9].childNodes[0];
        const order_number = i;
        const stored_value = localStorage.getItem(order_number);
        const price = parseFloat(orders_table.rows[i].cells[3].innerHTML);
        total_price += price;

        if (stored_value) {
            if (stored_value === "Confirmed") {
                confirmation_span.classList.remove("confirmation_pending", "confirmation_not_confirmed");
                confirmation_span.classList.add("confirmation_success");
                confirmation_span.innerHTML = "Confirmed";
                total_confirmed_price += price;
            } else if (stored_value === "Not Confirmed") {
                confirmation_span.classList.remove("confirmation_pending", "confirmation_success");
                confirmation_span.classList.add("confirmation_not_confirmed");
                confirmation_span.innerHTML = "Not Confirmed";
                total_not_confirmed_price += price;
            } else {
                total_pending_price += price;
            }
        } else {
            total_pending_price += price;
        }
    }

    // Create the totals table
    const totals_table = document.createElement("table");

    // Create header row
    const header_row = totals_table.insertRow(0);
    const status_cell = header_row.insertCell(0);
    status_cell.innerHTML = "Order Status";
    const price_cell = header_row.insertCell(1);
    price_cell.innerHTML = "Total Price";

    // Create rows for each total and add them to the table
    const confirmed_row = totals_table.insertRow(-1);
    const confirmed_status_cell = confirmed_row.insertCell(0);
    confirmed_status_cell.innerHTML = "Confirmed";
    const confirmed_price_cell = confirmed_row.insertCell(1);
    confirmed_price_cell.innerHTML = "Dhs " + total_confirmed_price.toFixed(2);

    const not_confirmed_row = totals_table.insertRow(-1);
    const not_confirmed_status_cell = not_confirmed_row.insertCell(0);
    not_confirmed_status_cell.innerHTML = "Not Confirmed";
    const not_confirmed_price_cell = not_confirmed_row.insertCell(1);
    not_confirmed_price_cell.innerHTML = "Dhs " + total_not_confirmed_price.toFixed(2);

    const pending_row = totals_table.insertRow(-1);
    const pending_status_cell = pending_row.insertCell(0);
    pending_status_cell.innerHTML = "Pending";
    const pending_price_cell = pending_row.insertCell(1);
    pending_price_cell.innerHTML = "Dhs " + total_pending_price.toFixed(2);

    const all_orders_row = totals_table.insertRow(-1);
    const all_orders_status_cell = all_orders_row.insertCell(0);
    all_orders_status_cell.innerHTML = "All Orders";
    const all_orders_price_cell = all_orders_row.insertCell(1);
    all_orders_price_cell.innerHTML = "Dhs " + total_price.toFixed(2);

    // Add the table to the page
    document.body.insertBefore(totals_table, orders_table);
}

</script>
</body>
</html>






