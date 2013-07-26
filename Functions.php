<?

function myfooter() {
    ?>
    <div data-theme="a" data-role="footer" data-id="navfooter" data-position="fixed">
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#overview" data-transition="fade" data-theme="" data-icon="star">
                        Overview
                    </a>
                </li>
                <li>
                    <select class='footmenu' data-corners="false" data-native-menu="false" data-icon="bars" data-iconpos="top">
                        <option>Accounts</option>
                        <option value="bills">Bills</option>
                        <option value="spending">Spending</option>
                        <option value="savings">Saving</option>
                    </select>
                </li>
                <li>
                    <a href="#transfers" data-transition="fade" data-theme="" data-icon="edit">
                        Transfers
                    </a>
                </li>
            </ul>
        </div>
    </div>   
    <?
}

function getAccountList($ws) {
    // load Zend Gdata libraries
    define("HOME", "/home/lawnsby");
    require_once HOME . '/lib/Zend/Login.php';
    try {
        $service = Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $service);
        $spreadsheetService = new Zend_Gdata_Spreadsheets($client);

        $query = new Zend_Gdata_Spreadsheets_ListQuery();
        $query->setSpreadsheetKey('tmqsvJYTInp6G1c-rR2itjg');
        $query->setWorksheetID('od6');
        $SheetEntries = $spreadsheetService->getListFeed($query);


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
    } catch (Exception $e) {
        die('ERROR: ' . $e->getMessage());
    }
}
?>