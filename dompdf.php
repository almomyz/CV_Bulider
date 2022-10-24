<?php 
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf=new Dompdf();
$dompdf->loadHtml('<h1>helllo</h1>');
$dompdf->render();
$dompdf->stream("playerofcode",array("Attachment"=>0));
?>