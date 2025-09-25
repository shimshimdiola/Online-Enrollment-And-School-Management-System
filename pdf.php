<?php
// Include the TCPDF library
require_once('vendor/autoload.php');

// Create a new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Enrollment Form');
$pdf->SetSubject('Enrollment Form');

// Set default font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();

// Set content
$html = '<h1>Enrollment Form</h1>';
$html .= ''; // Assuming it's a .html file

// Output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('enrollment_form.pdf', 'I'); // 'I' for inline display, 'D' for download

// Exit script
exit;
