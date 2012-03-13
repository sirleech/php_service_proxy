<?php

require_once 'lib/JSON.php';

header('Content-Type: application/json');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
header("Access-Control-Allow-Origin: *");

$url = 'http://ausbots.com.au/json_php/ra.php';

echo file_get_contents($url);

?>
