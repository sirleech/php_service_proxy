<?php

require_once 'lib/JSON.php';

header('Content-Type: application/json');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
header("Access-Control-Allow-Origin: *");

$ch = curl_init("http://ausbots.com.au/json_php/ra.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$json = curl_exec($ch);
curl_close($ch);

$codec = new Services_JSON();
$searchValues = $codec->decode($json);

echo $json;

?>
