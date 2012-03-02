<?php

require_once 'lib/JSON.php';

$ch = curl_init("http://ausbots.com.au/json_php/ra.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$json = curl_exec($ch);
curl_close($ch);

$codec = new Services_JSON();
$searchValues = $codec->decode($json);

echo $json;

?>
