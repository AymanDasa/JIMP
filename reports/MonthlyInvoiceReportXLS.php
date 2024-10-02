<?php
// composer require phpoffice/phpspreadsheet
require_once( '../../vendor/autoload.php'); // Include the PhpSpreadsheet library

$folder_name =  basename(dirname(__FILE__));
require_once( "C:\\wow\\password\\config.php"); 
require_once("../include/auth.php");  
$SAPPOname =  $table_body= '';
$IsActive = $currentPosition= 0 ;	  
$TotalInvoiceTable=0;
// http://localhost/JIMP/reports/MonthlyInvoiceReportXLS.php?YM=2402 
$string=strval($_GET['YM']);
$MM = substr($string, 0, 2); 
$YY = substr($string, 2);  
 
// Include PhpSpreadsheet classes
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$info_sql = "SELECT `name`, `value` FROM `info`";
		$info_result = $dbop->query($info_sql)->fetchAll();   
		$info_data = array();
		$info_data = array_column($info_result, 'value', 'name');  
		$invoiceStart =$info_data['invoiceStart']; // JB- 
		$orginalinvoiceStart=$invoiceStart;
// Your SQL query with Arabic columns 
$SQL = "SELECT * FROM `full_invoice_view` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY."  ;";   
 
$result = $dbop->query($SQL)->fetchAll();   

$currentPosition= 0 ;	
function createAlphaArray() {
    $alpha = []; 
    // Single letters A to Z
    foreach (range('A', 'Z') as $char) {
        $alpha[] = $char;
    }  
    foreach (range('A', 'C') as $firstChar) {
        foreach (range('A', 'Z') as $secondChar) {
            $alpha[] = $firstChar . $secondChar;
        }
    } 
    return $alpha;
}
$currentPosition= 0 ;	
$alpha = createAlphaArray();  
// Initialize the current position in the array 
$currentPosition=0;
function getNextAlpha() {
    global $alpha, $currentPosition;
    // Get the current element
    $element = $alpha[$currentPosition];
    // Increment the current position
    $currentPosition++;
    // Reset to the first element if the end is reached
    if ($currentPosition >= count($alpha)) {
        $currentPosition = 0;
    }
    return   $element ;
}
$currentPosition=0;
function getNextAlphaX() {
    global $alpha, $currentPosition;
    // Get the current element
    $element = $alpha[$currentPosition]."1";
    // Increment the current position
    $currentPosition++;
    // Reset to the first element if the end is reached
    if ($currentPosition >= count($alpha)) {
        $currentPosition = 0;
    }
    return   $element ;
}
$currentPosition= 0 ;	

// Check if there are rows in the result
if (1) {
    // Create a new Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
	$currentPosition= 0 ;
    // Set the column headers
    $sheet->setCellValue(getNextAlphaX() ,  'InvoiceID');
    $sheet->setCellValue(getNextAlphaX() ,  'ShipID');
    $sheet->setCellValue(getNextAlphaX() ,  'ShipName');
    $sheet->setCellValue(getNextAlphaX() ,  'ShipWeight');
    $sheet->setCellValue(getNextAlphaX() ,  'AgentID');
    $sheet->setCellValue(getNextAlphaX() ,  'AgentNameAr');
    $sheet->setCellValue(getNextAlphaX() ,  'AgentNameEn');
    $sheet->setCellValue(getNextAlphaX() ,  'ServiceType');
    $sheet->setCellValue(getNextAlphaX() ,  'ServiceTypeName'); 
    $sheet->setCellValue(getNextAlphaX() ,  'InvoiceDate');
    $sheet->setCellValue(getNextAlphaX() ,  'InvoiceDateT');
    $sheet->setCellValue(getNextAlphaX() ,  'ArrivalDate');
    $sheet->setCellValue(getNextAlphaX() ,  'ArrivalDateT');
    $sheet->setCellValue(getNextAlphaX() ,  'DepartureDate');
    $sheet->setCellValue(getNextAlphaX() ,  'DepartureDateT');
    $sheet->setCellValue(getNextAlphaX() ,  'PeriodDays');
    $sheet->setCellValue(getNextAlphaX() ,  'AnchorageEntry');
    $sheet->setCellValue(getNextAlphaX() ,  'AnchorageEntryT');
    $sheet->setCellValue(getNextAlphaX() ,  'AnchorageLeave');
    $sheet->setCellValue(getNextAlphaX() ,  'AnchorageLeaveT');
    $sheet->setCellValue(getNextAlphaX() ,  'AnchorageDays');
    $sheet->setCellValue(getNextAlphaX() ,  'MSericeAnchoragePrice');
    $sheet->setCellValue(getNextAlphaX() ,  'MovePort1');
    $sheet->setCellValue(getNextAlphaX() ,  'MovePort2');
    $sheet->setCellValue(getNextAlphaX() ,  'MovePort3');

    $sheet->setCellValue(getNextAlphaX() ,  'TripNo');
    $sheet->setCellValue(getNextAlphaX() ,  'DockingNo');
    $sheet->setCellValue(getNextAlphaX() ,  'RouteNo');
    $sheet->setCellValue(getNextAlphaX() ,  'ShiftedNo');
    $sheet->setCellValue(getNextAlphaX() ,  'Reason');
    $sheet->setCellValue(getNextAlphaX() ,  'MSFraction1');
    $sheet->setCellValue(getNextAlphaX() ,  'MSFraction2');
    $sheet->setCellValue(getNextAlphaX() ,  'MSFraction3');
    $sheet->setCellValue(getNextAlphaX() ,  'MService1');
    $sheet->setCellValue(getNextAlphaX() ,  'MService2');
    $sheet->setCellValue(getNextAlphaX() ,  'MService3');
    $sheet->setCellValue(getNextAlphaX() ,  'MSericeInPrice');
    $sheet->setCellValue(getNextAlphaX() ,  'MSericeOutPrice');
    $sheet->setCellValue(getNextAlphaX() ,  'MovePortPrice');
    $sheet->setCellValue(getNextAlphaX() ,  'MSericeBathPrice');
    $sheet->setCellValue(getNextAlphaX() ,  'MGPrice');
    $sheet->setCellValue(getNextAlphaX() ,  'MSTOTAL');
    //  SServices 1
    $sheet->setCellValue(getNextAlphaX()  ,  'code1'); 
    $sheet->setCellValue(getNextAlphaX()  ,  'SSName1');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSUnit1');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSQut1');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSUPrice1');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSPrice1');
//  SServices 2
    $sheet->setCellValue(getNextAlphaX() ,  'code2');
    $sheet->setCellValue(getNextAlphaX() ,  'SSName2');
    $sheet->setCellValue(getNextAlphaX() ,  'SSUnit2');
    $sheet->setCellValue(getNextAlphaX() ,  'SSQut2');
    $sheet->setCellValue(getNextAlphaX() ,  'SSUPrice2');
    $sheet->setCellValue(getNextAlphaX() ,  'SSPrice2');

    $sheet->setCellValue(getNextAlphaX() ,  'code3');
    $sheet->setCellValue(getNextAlphaX() ,  'SSName3');
    $sheet->setCellValue(getNextAlphaX() ,  'SSUnit3');
    $sheet->setCellValue(getNextAlphaX() ,  'SSQut3');
    $sheet->setCellValue(getNextAlphaX() ,  'SSUPrice3');
    $sheet->setCellValue(getNextAlphaX() ,  'SSPrice3');

    $sheet->setCellValue(getNextAlphaX()  ,  'code4');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSName4');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSUnit4');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSQut4');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSUPrice4');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSPrice4');

    $sheet->setCellValue(getNextAlphaX()  ,  'code5'); 
    $sheet->setCellValue(getNextAlphaX()  ,  'SSName5');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSUnit5');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSQut5');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSUPrice5');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSPrice5');

    $sheet->setCellValue(getNextAlphaX()  ,  'SSNote1');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSNote2');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSNote3');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSNote4');
    $sheet->setCellValue(getNextAlphaX()  ,  'SSNote5');
    
    $sheet->setCellValue(getNextAlphaX()  ,  'SSTOTAL');
    $sheet->setCellValue(getNextAlphaX()  ,  'TOTAL');
    $sheet->setCellValue(getNextAlphaX()  ,  'is_VAT');
    $sheet->setCellValue(getNextAlphaX()  ,  'VAT');
    $sheet->setCellValue(getNextAlphaX()  ,  'VAT_TOTAL');
    $sheet->setCellValue(getNextAlphaX()  ,  'Status'); 
	
//  ============================================
    // Fetch and write data to the spreadsheet
    $rowNumber = 2; 
    $CNFactor= -1 ; 
	$currentPosition= 0 ;
    foreach($result as $row){  
	$Status =intval($row['Status']); 

	if($Status > 0){

		$invoiceStart=$orginalinvoiceStart;
		$InvoiceID=$invoiceStart.$row['InvoiceID'];
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $InvoiceID);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipID']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipName']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipWeight']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AgentID']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AgentNameAr']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AgentNameEn']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ServiceType']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ServiceTypeName']); 
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['InvoiceDate']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['InvoiceDateT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ArrivalDate']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ArrivalDateT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['DepartureDate']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['DepartureDateT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['PeriodDays']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageEntry']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageEntryT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageLeave']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageLeaveT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageDays']); 
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval(  $row['MSericeAnchoragePrice']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MovePort1']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MovePort2']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MovePort3']); 
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['TripNo']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['DockingNo']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['RouteNo']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShiftedNo']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['Reason']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MSFraction1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MSFraction2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MSFraction3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MService1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MService2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MService3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['MSericeInPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['MSericeOutPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['MovePortPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['MSericeBathPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['MGPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['MSTOTAL']) , 2, ".", "") );   
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SScode1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSName1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUnit1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSQut1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUPrice1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSPrice1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SScode2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSName2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUnit2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSQut2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUPrice2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSPrice2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SScode3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSName3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUnit3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSQut3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUPrice3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSPrice3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SScode4']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSName4']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUnit4']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSQut4']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUPrice4']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSPrice4']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SScode5']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSName5']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUnit5']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSQut5']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSUPrice5']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSPrice5']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSNote1']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSNote2']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSNote3']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSNote4']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['SSNote5']);
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['SSTOTAL']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval( $row['TOTAL']), 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, number_format( floatval( $row['is_VAT']), 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, number_format( floatval( $row['VAT']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, number_format( floatval( $row['VAT_TOTAL']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['Status']);
		 
	}
	$currentPosition= 0 ;
	if($Status == 0){   
		$invoiceStart=$orginalinvoiceStart;
		$InvoiceID=$invoiceStart.$row['InvoiceID'];

		$sheet->setCellValue(getNextAlpha() . $rowNumber, $InvoiceID);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipID']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipName']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipWeight']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AgentID']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AgentNameAr']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AgentNameEn']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ServiceType']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ServiceTypeName']); 
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['InvoiceDate']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['InvoiceDateT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ArrivalDate']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ArrivalDateT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['DepartureDate']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['DepartureDateT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['PeriodDays']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageEntry']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageEntryT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageLeave']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageLeaveT']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['AnchorageDays']); 
		$sheet->setCellValue(getNextAlpha() . $rowNumber,number_format( floatval(  $row['MSericeAnchoragePrice']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MovePort1']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MovePort2']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['MovePort3']); 
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['TripNo']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['DockingNo']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['RouteNo']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ShiftedNo']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['Reason']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MSFraction1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MSFraction2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MSFraction3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MService1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MService2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MService3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval(  $row['MSericeInPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval($row['MSericeOutPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval($row['MovePortPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval($row['MSericeBathPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval($row['MGPrice']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval($row['MSTOTAL']) , 2, ".", "") );   
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode4']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName4']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit4']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut4']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice4']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice4']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode5']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName5']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit5']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut5']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice5']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice5']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote1']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote2']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote3']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote4']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote5']);
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval($row['SSTOTAL']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval( $row['TOTAL']), 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval( $row['is_VAT']), 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval( $row['VAT']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber,number_format( floatval( $row['VAT_TOTAL']) , 2, ".", "") );  
	     $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['Status']);
		  $invoiceStart='CN-';   
            $rowNumber++;
			$currentPosition= 0 ;
            $InvoiceID=$invoiceStart.$row['InvoiceID'];
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $InvoiceID);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ShipID']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ShipName']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ShipWeight']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AgentID']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AgentNameAr']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AgentNameEn']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ServiceType']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ServiceTypeName']); 
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['InvoiceDate']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['InvoiceDateT']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ArrivalDate']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ArrivalDateT']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['DepartureDate']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['DepartureDateT']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['PeriodDays']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AnchorageEntry']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AnchorageEntryT']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AnchorageLeave']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AnchorageLeaveT']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['AnchorageDays']); 
		  $sheet->setCellValue(getNextAlpha().  $rowNumber, number_format( floatval($row['MSericeAnchoragePrice']) *$CNFactor, 2, ".", "") );  
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MovePort1']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MovePort2']);
		  $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MovePort3']); 
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['TripNo']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['DockingNo']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['RouteNo']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['ShiftedNo']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['Reason']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MSFraction1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MSFraction2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MSFraction3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MService1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MService2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['MService3']);
	       $sheet->setCellValue(getNextAlpha().  $rowNumber,  number_format( floatval( $row['MSericeInPrice']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber,  number_format( floatval( $row['MSericeOutPrice']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber,  number_format( floatval( $row['MovePortPrice']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber,  number_format( floatval( $row['MSericeBathPrice']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber,  number_format( floatval( $row['MGPrice']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber,  number_format( floatval( $row['MSTOTAL']) *$CNFactor, 2, ".", "") );   
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode4']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName4']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit4']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut4']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice4']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice4']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SScode5']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSName5']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUnit5']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSQut5']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSUPrice5']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSPrice5']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote1']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote2']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote3']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote4']);
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['SSNote5']);
	       $sheet->setCellValue(getNextAlpha().  $rowNumber, number_format( floatval($row['SSTOTAL']) *$CNFactor , 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber, number_format( floatval( $row['TOTAL']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber, number_format( floatval( $row['is_VAT']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber, number_format( floatval( $row['VAT']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha().  $rowNumber, number_format( floatval( $row['VAT_TOTAL']) *$CNFactor, 2, ".", "") );  
	       $sheet->setCellValue(getNextAlpha(). $rowNumber, $row['Status']); 
	} 
	$rowNumber++;
}
 
$rowNumber+5;
//  ============================================
    // Save the spreadsheet to a file
    $writer = new Xlsx($spreadsheet);
	$formattedDateTime = date('ymdHis');
    $filename = 'Monthly_'.$string.'_'.$formattedDateTime.'.xlsx'; 
    // Set headers for download
    
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    header('Content-Type: text/html; charset=UTF-8'); // This line seems redundant, you might remove it if it's unnecessary
    
    // Output the Excel file to the browser
    $writer->save('php://output');
} else {
    echo "No results found";
} 
// Close the database connection
$dbop->close();
?>
