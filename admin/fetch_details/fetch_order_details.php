<?php
include ("..\..\database\connection.php");

// Fetch data from the order_details table
$query = "SELECT o.order_id,o.order_no,p.name AS product_name,bd.first_name AS buyer_name,sd.first_name AS seller_name,o.payment,o.price,o.quantity,o.status,o.order_date,o.tracking_no FROM order_details o JOIN product_details p ON o.product_id = p.product_id JOIN buyer_details bd ON o.buyer_id = bd.buyer_id JOIN seller_details sd ON o.seller_id = sd.seller_id";
$result = mysqli_query($conn, $query);    


// Generate CSV content
$csvContent = "Order ID,Tracking Number,Product Name,Buyer Name,Seller Name,Price,Payment,Order Status,Order Date\n";

while ($row = mysqli_fetch_assoc($result)) {
    $csvContent .= "{$row['order_id']},{$row['tracking_no']},{$row['product_name']},{$row['buyer_name']},{$row['seller_name']},{$row['price']},{$row['payment']},{$row['status']},{$row['order_date']}\n";
}

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="order_details.csv"');

// Output CSV content
echo $csvContent;

// Close the database connection
mysqli_close($conn);
?>
