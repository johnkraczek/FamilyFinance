<?php

try {
// send the data to the Google Spreadsheet.
    define("HOME", "/home/lawnsby");
    require_once HOME . '/lib/Zend/Login.php';

    // connect to API
    $service = new Zend_Gdata_Spreadsheets($client);
    $feed = $SSService->getSpreadsheetFeed();


    // set target spreadsheet and worksheet
    $ssKey = 'tmqsvJYTInp6G1c-rR2itjg';
    $Overview = 'od5';
    $MBills = 'od6';
    $SavActs = 'od7';
    $SpendActs = 'od4';
    $transact = 'oda';
} catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}

function getAccountList($ss, $ws) {
    define("HOME", "/home/lawnsby");
    require_once HOME . '/lib/Zend/Login.php';

    // connect to API
    $service = new Zend_Gdata_Spreadsheets($client);
    $feed = $SSService->getSpreadsheetFeed();

    $query = new Zend_Gdata_Spreadsheets_ListQuery();
    $query->setSpreadsheetKey('tmqsvJYTInp6G1c-rR2itjg');
    $query->setWorksheetID($ws);
    $SheetEntries = $ss->getListFeed($query);

    $rows = $SheetEntries->entries->Count() - 1;

    $l[] = 'Monthly Bills';
    $l[] = 'Savings Acounts';
    $l[] = 'Spending Accounts';
    $l[] = 'Name';
    $l[] = '';

    for ($i = 0; $i <= $rows; $i++) {
        $rowData = $SheetEntries->entries[$i]->getCustom();
        foreach ($rowData as $customEntry) {
            //echo $customEntry->getColumnName();
            $colName = $customEntry->getColumnName();
            $cellName = $customEntry->getText();
            if ($colName == 'name' && !(in_array($cellName, $l)))
                $AccountList[] = $cellName;
        }
    }
    Return $AccountList;
}