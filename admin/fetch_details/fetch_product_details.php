<?php
include ("..\..\database\connection.php");

// Fetch data from the product_details table
$query = "SELECT product_details.*, seller_details.first_name AS seller_name FROM product_details
          LEFT JOIN seller_details ON product_details.seller_id = seller_details.seller_id";
$result = mysqli_query($conn, $query);

// Generate CSV content
$csvContent = "Product ID,Photo,Photo2,Photo3,Name,Seller Name,Price,Quantity,Description\n";

while ($row = mysqli_fetch_assoc($result)) {
    $description = str_replace("\n", " ", $row['description']); // Replace newlines with spaces in the description
    $csvContent .= "{$row['product_id']},{$row['photo']},{$row['photo2']},{$row['photo3']},{$row['name']},{$row['seller_name']},{$row['price']},{$row['quantity']},{$description}\n";
}

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="product_details.csv"');

// Output CSV content
echo $csvContent;

// Close the database connection
mysqli_close($conn);
?>
