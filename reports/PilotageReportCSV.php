<?php
require_once("C:\\wow\\password\\config.php");
require_once("../include/auth.php");

$folder_name = basename(dirname(__FILE__));
$SAPPOname = $table_body = '';
$IsActive = 0;
$TotalInvoiceTable = 0;

$debug = 0;

$info_sql = "SELECT `name`, `value` FROM `info`";
$info_result = $dbop->query($info_sql)->fetchAll();
$info_data = array();
$info_data = array_column($info_result, 'value', 'name');
$invoiceStart = $info_data['invoiceStart'];
$orginalinvoiceStart = $invoiceStart;

$TotalInvoice_Table = $TotalInvoice_VAT = $TotalInvoice_TOTAL = $TotalInvoice_MSericeInPrice = $TotalInvoice_MSericeOutPrice = $TotalInvoice_MovePortPrice = $TotalInvoice_SSTOTAL = $TotalInvoice_MSTOTAL = $TotalInvoice_MSericeOutPrice = $TotalInvoice_MovePortPrice = $TotalInvoice_Anchorage = $TotalVAT = 0;

if (isset($_GET['FromInvoice']) && isset($_GET['ToInvoice'])) {
    $FromInvoice = intval($_GET['FromInvoice']);
    $ToInvoice = intval($_GET['ToInvoice']);
    if ($debug) {
        echo "<b>FromInvoice :</b>" . $FromInvoice . "<br>";
    }
    if ($debug) {
        echo "<b>ToInvoice :</b>" . $ToInvoice . "<br>";
    }
} else {
    exit();
}

$sql = "SELECT * FROM `invoice` WHERE `InvoiceID` BETWEEN $FromInvoice AND $ToInvoice";
$result = $dbop->query($sql)->fetchAll();

if (count($result) > 0) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename="Pilotage_data.csv"');
    header('Cache-Control: max-age=0');

    $output = fopen('php://output', 'w');

    // Write the column headers
    fputcsv($output, [
        'SN', 'SHIP NAME', 'G.R.T.', 'ARRIVAL DATE', 'SAILED DATE', 'ARRIVAL CHARGE SAR',
        'DEPARTURE CHARGE SAR', 'BERTH USE SAR', 'ANCH CHARGE SAR', 'SHIFT CHARGE SAR',
        'OTHER CHARGE SAR', 'BEFORE VAT CHARGE SAR', 'VAT CHARGE SAR', 'AFTER VAT CHARGE SAR',
        'AGENT', 'BERTH', 'TRIP ROT NO', 'INVOICE NUMBER'
    ]);

    $SNO = 1;
    foreach ($result as $row) {
        $Status = intval($row['Status']);
        if ($Status == 0) {
            $invoiceStart = 'CN-';
        } else {
            $invoiceStart = $orginalinvoiceStart;
        }
        $InvoiceID = $invoiceStart . $row['InvoiceID'];
        fputcsv($output, [
            $SNO,
            $row['ShipName'],
            $row['ShipWeight'],
            $row['ArrivalDate'],
            $row['DepartureDate'],
            $row['MSericeInPrice'],
            $row['MSericeOutPrice'],
            $row['MSericeBathPrice'],
            $row['MSericeAnchoragePrice'],
            $row['MovePortPrice'],
            $row['SSTOTAL'],
            $row['TOTAL'],
            $row['VAT'],
            $row['VAT_TOTAL'],
            $row['AgentNameEn'],
            $row['RouteNo'],
            $row['TripNo'],
            $InvoiceID
        ]);
        $SNO++;
    }

    fclose($output);
} else {
    echo "No results found";
}
 
?>
