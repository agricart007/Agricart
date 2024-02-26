<?php
require('fpdf186/fpdf.php');

function generateInvoicePDF($order_id) {
    // Create new PDF instance
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('Arial', '', 12);

    // Add a title
    $pdf->Cell(0, 10, 'Invoice for Order ID: ' . $order_id, 0, 1, 'C');

    // Add some content
    $pdf->Cell(0, 10, 'This is a sample invoice content. You can customize it as needed.', 0, 1);

    // Output PDF to browser
    $pdf->Output('invoice.pdf', 'D'); // 'D' to force download

    // Terminate further execution
    exit;
}

// Check if order_id is provided and call the function to generate the PDF
if(isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    generateInvoicePDF($order_id);
} else {
    // Handle case where order_id is not provided
    echo "Order ID not provided.";
}
?>
