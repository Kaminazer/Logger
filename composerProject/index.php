<?php
require_once __DIR__."/vendor/autoload.php";

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://classroom.google.com/c/NTk2NDg4OTI5MDky');

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "na
