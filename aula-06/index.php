<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new DOMPDF();

$html = '';

for ($i = 0; $i < 10; $i++) {
  $html .= '<p> teste </p>';
}

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
