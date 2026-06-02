<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Orders add to cart months</title>
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
.status {
        padding: 5px 10px;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 5px;
        cursor: pointer;
    }
    .status.pending {
        background-color: orange;
        color: white;
    }
    .status.confirmed {
        background-color: green;
        color: white;
    }
    .status.not-confirmed {
        background-color: red;
        color: white;
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
    </style>

</head>
<body>
<div class="centre">
    <a href="index.php" class="logo"><i class='bx bx-pointer bx-rotate-90' ></i><b>QuickBuy</b></a>
  </div>
<?php

$servername = "localhost";
$username = "db";
$password = "KHALI@med2000";
$dbname = "e-commerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve customer and product data for orders in the current month
$current_month = date('m');
$sql = "SELECT customers.*, orderproducts.name AS product_name, orderproducts.price AS product_price, orderproducts.img AS product_img, orderproducts.in_cart AS product_in_cart, (orderproducts.price * orderproducts.in_cart) AS total_price, orderproducts.order_date AS order_date FROM customers INNER JOIN orderproducts ON customers.id = orderproducts.customer_id WHERE MONTH(orderproducts.order_date) = $current_month";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close connection
$conn->close();
?>


<!-- Display customer and order data in a table -->
<!-- Display customer and order data in a table -->
<table>
    <tr>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Telephone</th>
        <th>Customer City</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>In Cart</th>
        <th>Total Price</th>
        <th>Order Date</th>
        <th>Status</th>
    </tr>
    <?php foreach ($data as $row): ?>
        <?php
            // Get the status of this order from localStorage
            $orderStatus = isset($_SESSION['order_' . $row['id']]) ? $_SESSION['order_' . $row['id']] : 'pending';
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telephone']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['product_price']; ?></td>
            <td><img height="50px" width="75px" src="<?php echo $row['product_img']; ?>" alt="<?php echo $row['product_name']; ?>"></td>
            <td><?php echo $row['product_in_cart']; ?></td>
            <td><?php echo $row['total_price']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
            <td>
                <?php
                    // Use the $orderStatus variable to set the initial status
                    $status = $orderStatus == 'confirmed' ? 'Confirmed' : ($orderStatus == 'not-confirmed' ? 'Not Confirmed' : 'Pending');
                ?>
                <span class="status <?php echo strtolower($orderStatus); ?>" data-order-id="<?php echo $row['id']; ?>"><?php echo $status; ?></span>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="copyright">
  <p>&copy; 2026 <b>QuickBuy</b> <span dir="rtl"> جميع الحقوق محفوظة . </span></p>
</div>
<script>
    // Get all status spans
    const statusSpans = document.querySelectorAll('.status');

    // Loop through each status span
    statusSpans.forEach(span => {
        // Get the order ID from the data-order-id attribute
        const orderId = span.getAttribute('data-order-id');

        // Get the order status from localStorage
        const orderStatus = localStorage.getItem('order_' + orderId);

        // If an order status exists in localStorage, update the span accordingly
        if (orderStatus) {
            span.classList.remove('pending', 'confirmed', 'not-confirmed');
            span.classList.add(orderStatus);
            span.innerHTML = orderStatus === 'confirmed' ? 'Confirmed' : 'Not Confirmed';
        }

        // Add click event listener to span
        span.addEventListener('click', () => {
            // Toggle between status classes
            if (span.classList.contains('pending')) {
                span.classList.remove('pending');
                span.classList.add('confirmed');
                span.innerHTML = 'Confirmed';
                // Store the new status in localStorage
                localStorage.setItem('order_' + orderId, 'confirmed');
            } else if (span.classList.contains('confirmed')) {
                span.classList.remove('confirmed');
                span.classList.add('not-confirmed');
                span.innerHTML = 'Not Confirmed';
                // Store the new status in localStorage
                localStorage.setItem('order_' + orderId, 'not-confirmed');
            } else {
                span.classList.remove('not-confirmed');
                span.classList.add('pending');
                span.innerHTML = 'Pending';
                // Store the new status in localStorage
                localStorage.setItem('order_' + orderId, 'pending');
            }
        });
    });

    // Get the table element
const table = document.querySelector('table');

// Initialize confirmedTotal, notConfirmedTotal, and pendingTotal to zero
let confirmedTotal = 0;
let notConfirmedTotal = 0;
let pendingTotal = 0;

// Loop through each row in the table
for (let i = 1; i < table.rows.length; i++) {
  // Get the status span element for this row
  const statusSpan = table.rows[i].querySelector('.status');
  
  // If the status is "confirmed", add the total price to confirmedTotal
  if (statusSpan.classList.contains('confirmed')) {
    const totalTd = table.rows[i].querySelector('td:nth-child(9)');
    const total = parseFloat(totalTd.textContent);
    confirmedTotal += total;
  }
  // If the status is "not confirmed", add the total price to notConfirmedTotal
  else if (statusSpan.classList.contains('not-confirmed')) {
    const totalTd = table.rows[i].querySelector('td:nth-child(9)');
    const total = parseFloat(totalTd.textContent);
    notConfirmedTotal += total;
  }
  // If the status is "pending", add the total price to pendingTotal
  else if (statusSpan.classList.contains('pending')) {
    const totalTd = table.rows[i].querySelector('td:nth-child(9)');
    const total = parseFloat(totalTd.textContent);
    pendingTotal += total;
  }
  
}

// Create a new row at the top of the table for the "Confirmed Total"
const confirmedRow = table.insertRow(0);

// Add cells for the "Confirmed Total" label and the confirmedTotal value
const confirmedLabelCell = confirmedRow.insertCell();
confirmedLabelCell.textContent = 'Confirmed Total';
confirmedLabelCell.style.textAlign = "center";
confirmedLabelCell.colSpan = 2; // Set the colspan to span across all columns

const confirmedTotalCell = confirmedRow.insertCell();
confirmedTotalCell.textContent = "Dhs" + " " + confirmedTotal.toFixed(2);
confirmedTotalCell.style.textAlign = 'center'; // Set the text alignment to center
confirmedTotalCell.style.fontSize = "20px";
confirmedTotalCell.style.color = "green";
confirmedTotalCell.style.fontWeight = "600";
confirmedTotalCell.colSpan = 9; // Set the colspan to span across two columns

// Create a new row below the "Confirmed Total" row for the "Not Confirmed" row
const notConfirmedRow = table.insertRow(1);

// Add cells for the "Not Confirmed" label and the notConfirmedTotal value
const notConfirmedLabelCell = notConfirmedRow.insertCell();
notConfirmedLabelCell.textContent = 'Not Confirmed';
notConfirmedLabelCell.style.textAlign = "center";
notConfirmedLabelCell.colSpan = 2; // Set the colspan to span across all columns

const notConfirmedTotalCell = notConfirmedRow.insertCell();
notConfirmedTotalCell.textContent = "Dhs" + " " + notConfirmedTotal.toFixed(2);
notConfirmedTotalCell.style.textAlign = 'center'; // Set the text alignment to center
notConfirmedTotalCell.style.fontSize = "20px";
notConfirmedTotalCell.style.color = "red";
notConfirmedTotalCell.style.fontWeight = "600";
notConfirmedTotalCell.colSpan = 9; // Set the colspan to span across two columns

// Create a new row below the "Not Confirmed" row for the "Total Pending" row
const pendingRow = table.insertRow(2);

// Add cells for the "Total Pending" label and the pendingTotal value
const pendingLabelCell = pendingRow.insertCell();
pendingLabelCell.textContent = 'Total Pending';
pendingLabelCell.style.textAlign = "center";
pendingLabelCell.colSpan = 2; // Set the colspan to span across all columns

const pendingTotalCell = pendingRow.insertCell();
pendingTotalCell.textContent = "Dhs" + " " + pendingTotal.toFixed(2);
pendingTotalCell.style.textAlign = 'center'; // Set the text alignment to center
pendingTotalCell.style.fontSize = "20px";
pendingTotalCell.style.color = "orange";
pendingTotalCell.style.fontWeight = "600";
pendingTotalCell.colSpan = 9; // Set the colspan to span across two columns

</script>

</body>
</html>

