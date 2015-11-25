<?php
/**
 * This is used for setting a permission for a single user in your domain information.
 *
 * Contributors:
 *
 * - Rackspace Email & Apps REST API Team
 * - Josh Shilling
 */
header('Content-Type:  text/plain');
require_once 'ApiClient.php';

$client = new  ApiClient();

$fields = Array('permission' => 'both'); 

$response = $client->post(
    '/customers/customer_number/domains/company_domain.com/ex/mailboxes/username_you_are_targetting/permissions/admin.user',
    $fields,
    'txt/xml');

echo  $response . "\r\n";
?>