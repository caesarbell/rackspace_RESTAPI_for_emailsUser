<?php
header('Content-Type:  text/plain');
require_once 'ApiClient.php';

$client = new  ApiClient();

$response = $client->get(
    '/customers/me/domains',
    'text/xml');

echo  $response . "\r\n";
?>