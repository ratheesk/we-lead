<?php
// require composer autoload
require __DIR__ . '../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$url = urldecode($_REQUEST['url']);

if (ini_get('allow_url_fopen')) {
    $html = file_get_contents($url);

} else {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 );
    $html = curl_exec($ch);
    curl_close($ch);
}

$mpdf = new \Mpdf\Mpdf();

$mpdf->useSubstitutions = true; // optional - just as an example
//$mpdf->SetHeader($url . "\n\n" . 'Page {PAGENO}');  // optional - just as an example
$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
$mpdf->setBasePath($url);
$mpdf->WriteHTML($html);

$mpdf->Output();


?>