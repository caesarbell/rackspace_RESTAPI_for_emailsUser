<?php
/**
 * This is used for getting a single user in your domain information. 
 *
 * Contributors:
 *
 * - Rackspace Email & Apps REST API Team
 * - Josh Shilling
 */
header('Content-Type:  text/plain');
require_once 'ApiClient.php';

$client = new  ApiClient();

$response = $client->get(
    '/customers/customer_number/domains/company_domain.com/ex/mailboxes/username_you_are_targetting/permissions',
    'text/xml');

echo  $response . "\r\n";
?>