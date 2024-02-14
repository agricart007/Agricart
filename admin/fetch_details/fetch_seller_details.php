<?php
include ("..\..\database\connection.php");

// Fetch data from the seller_details table
$query = "select * from seller_details";
$result = mysqli_query($conn, $query);

// Generate CSV content
$csvContent = "Seller ID,Photo,First Name,Last Name,Email,Contact,Government ID,GST Number,Created On\n";

while ($row = mysqli_fetch_assoc($result)) {
    $csvContent .= "{$row['seller_id']},{$row['photo']},{$row['first_name']},{$row['last_name']},{$row['email']},{$row['contact_no']},{$row['government_id']},{$row['gst_no']},{$row['created_on']}\n";
}

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="seller_details.csv"');

// Output CSV content
echo $csvContent;

// Close the database connection
mysqli_close($conn);
?>



