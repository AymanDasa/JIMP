<?php 
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php");  

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 


// Excel file name for download 
$fileName = "invoice" . date('Ymd') . ".csv"; 

// Column names 
$fields = array('INVOICE NO', 'VESSEL NAME', 'AGENT NAME', 'GROSS TONNAGE', 'ARRIVAL DATE', 'DEPARTURE DATE', 'PERIOD DAYS AT BERTH', 'ANCHORAGE DAYS', 'ARRIVAL DUES', 'DEPARTURE DUES', 'BERTH DUES', 'ANCHORAGE DUES', 'SHIFTING DUES', 'SPECIAL SERVICES DUES', 'TOTAL AMOUNT', 'VAT', 'TOTAL/VAT'); 
 
// Display column names as first invoice 
$excelData = implode("\t", array_values($fields)) . "\n"; 


// Headers for download 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
header("Content-Type: application/vnd.ms-excel"); 
$invoices = $dbop->query('SELECT * FROM `invoice`  ')->fetchAll(); 
foreach($invoices as $invoice) {  
    $lineData = array($invoice['InvoiceID'], $invoice['ShipName'], $invoice['AgentNameEn'], $invoice['ShipWeight'], $invoice['ArrivalDate'], $invoice['DepartureDate'], $invoice['PeriodDays'], $invoice['AnchorageDays'], $invoice['MSericeInPrice'], $invoice['MSericeOutPrice'], $invoice['MSericeBathPrice'], $invoice['MSericeAnchoragePrice'], $invoice['MovePortPrice'], $invoice['SSTOTAL'], $invoice['TOTAL'], $invoice['VAT'], $invoice['VAT_TOTAL'] ); 
    array_walk($lineData, 'filterData'); 
    $excelData .= implode("\t", array_values($lineData)) . "\n"; 
 
    // filter data 
    array_walk($invoice, 'filterData'); 
    echo implode("\t", array_values($invoice)) . "\n"; 
} 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
// Render excel data 
echo $excelData; 
exit;