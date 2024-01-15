<?php
include ("..\..\database\connection.php");

// Fetch data from the buyer_details table
$query = "select * from buyer_details";
$result = mysqli_query($conn, $query);

// Generate CSV content
$csvContent = "Buyer ID,Photo,First Name,Last Name,Email,Contact,Created On,Address\n";

while ($row = mysqli_fetch_assoc($result)) {
    $csvContent .= "{$row['Buyer_id']},{$row['photo']},{$row['first_name']},{$row['last_name']},{$row['email']},{$row['contact']},{$row['created_on']},{$row['address']}\n";
}

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="buyer_details.csv"');

// Output CSV content
echo $csvContent;

// Close the database connection
mysqli_close($conn);
?>
