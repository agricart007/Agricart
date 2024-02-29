<?php
    require('D:\XAMPP\htdocs\Test\generatePDF.php');

    $pdf = new FPDF('p', 'mm', "A4");

    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 20);

    $pdf->Cell(71, 10, '',0,0);
    $pdf->Cell(59, 5, 'Invoice',0,0);
    $pdf->Cell(59, 10,'',0,1);

    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(71, 10, '',0,0);
    $pdf->Cell(59, 5, 'WET',0,0);
    $pdf->Cell(59, 10,'Details',0,1);

    $pdf->Cell(130, 5, 'City',0,0);
    $pdf->Cell(25, 5, 'Invoice Date',0,0);
    $pdf->Cell(34, 5,'12th Jan 2019',0,1);
    
    $pdf->Cell(130, 5, '',0,0);
    $pdf->Cell(25, 5, 'Invoice No:',0,0);
    $pdf->Cell(34, 5,'ORD001',0,1);

    $pdf->SetFont('Arial', '', 20);
    $pdf->Cell(25, 5, 'Bill To:',0,0);
    $pdf->Cell(34, 5,'',0,1);
    



    $pdf->Output()
?>