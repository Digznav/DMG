<?php

require_once 'snappy/autoload.php';

use Knp\Snappy\Pdf;

//$snappy = new Pdf();
//$snappy->setBinary('D:\Applications\wkhtmltopdf\wkhtmltopdf.exe');
$snappy = new Pdf('/home/mipcom/public_html/wkhtmltopdf/wkhtmltopdf-i386');


// Display the resulting pdf in the browser
// by setting the Content-type header to pdf
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="file.pdf"');
echo $snappy->getOutput('http://www.github.com');
//echo $snappy->getOutput('http://www.google.com');

?>