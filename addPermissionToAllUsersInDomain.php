<?php
/**
 * Created a loop that will loop through all the users in the domain and give a admin user "both" permissions on all the users in
 * the domain.
 *
 * Contributors:
 *
 * - Rackspace Email & Apps REST API Team
 * - Josh Shilling
 * - Caesar Bell
 */
$row = 1;
if (($handle = fopen("mailboxestest.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
            header('Content-Type:  text/plain');
			require_once 'ApiClient.php';
	
			$client = new  ApiClient();

			$fields  = Array('permission' => 'both');


			$response = $client->post(
    		'/customers/customer_number/domains/company_domain.com/ex/mailboxes/' . $data[$c] . '/permissions/admin.username', $fields, 'txt/xml'); 
			echo $response . "\r\n";	
        	}
    }
    fclose($handle);
}
?>