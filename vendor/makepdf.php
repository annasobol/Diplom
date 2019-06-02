<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();


$data = '';

$data .= '<h1>Product card</h1>';

//$data .= '<strong>Title</strong>' . $product->title . '</br>';
//$data .= '<strong>Price</strong>' . $product->price . '</br>';

$mpdf->WriteHTML($data);
$mpdf->Output('mypdf.pdf', 'D');

