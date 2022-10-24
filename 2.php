<?php
require "vendor/autoload.php"; 
$mpdf = new \Mpdf\Mpdf(); 

$mpdf->SetTitle("Document Title" );
$mpdf ->SetAuthor("Jon Doe"); 
$mpdf->SetCreator("Code Boxx");
$mpdf->SetSubject("Demo"); 
$mpdf->Setkeywords ("Demo", "Test");


$mpdf->WriteHTML($html ="<P>FSD</P>");
$mpdf->Output();
$mpdf->Output("demo.pdf");
?>



