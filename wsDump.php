<?php
// load Zend Gdata libraries
define("HOME",  "/home/lawnsby"); 
require_once HOME.'/lib/Zend/Login.php';

try {
	$service            = Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME;
    $client             = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $service);
    $spreadsheetService = new Zend_Gdata_Spreadsheets($client);

	$query= new Zend_Gdata_Spreadsheets_ListQuery();
	$query->setSpreadsheetKey('tmqsvJYTInp6G1c-rR2itjg');
	$query->setWorksheetID('od6');
	$listFeed = $spreadsheetService->getListFeed($query);
	
        
$rows = $listFeed->entries->Count();
$rowData = $listFeed->entries[1]->getCustom();
foreach($rowData as $customEntry) {
  echo $customEntry->getText();
  echo " -- ";
}

  
} catch (Exception $e) {
  die('ERROR: ' . $e->getMessage());
}

?>