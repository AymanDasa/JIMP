<?php
// composer require phpoffice/phpspreadsheet
require '../../vendor/autoload.php'; // Include the PhpSpreadsheet library

$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
$SAPPOname =  $table_body= '';
$IsActive = 0 ;	  
$TotalInvoiceTable=0;
// http://localhost/JIMP/reports/MonthlyInvoiceReportXLS.php?YM=2402 
$string=strval($_GET['YM']);
$MM = substr($string, 0, 2); 
$YY = substr($string, 2);  
 
// Include PhpSpreadsheet classes
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Your SQL query with Arabic columns 
$SQL = "SELECT * FROM `full_invoice_view` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY."  AND `Status`= '800';";   
// echo $SQL; exit();
$result = $dbop->query($SQL)->fetchAll();   


// Check if there are rows in the result
if (1) {
    // Create a new Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set the column headers
    $sheet->setCellValue('A1'  ,  'InvoiceID');
    $sheet->setCellValue('B1'  ,  'ShipID');
    $sheet->setCellValue('C1'  ,  'ShipName');
    $sheet->setCellValue('D1'  ,  'ShipWeight');
    $sheet->setCellValue('E1'  ,  'AgentID');
    $sheet->setCellValue('F1'  ,  'AgentNameAr');
    $sheet->setCellValue('G1'  ,  'AgentNameEn');
    $sheet->setCellValue('H1'  ,  'ServiceType');
    $sheet->setCellValue('I1'  ,  'ServiceTypeName');
    $sheet->setCellValue('G1'  ,  'ServiceTypeFactor');
    $sheet->setCellValue('K1'  ,  'InvoiceDate');
    $sheet->setCellValue('L1'  ,  'InvoiceDateT');
    $sheet->setCellValue('M1'  ,  'ArrivalDate');
    $sheet->setCellValue('N1'  ,  'ArrivalDateT');
    $sheet->setCellValue('O1'  ,  'DepartureDate');
    $sheet->setCellValue('P1'  ,  'DepartureDateT');
    $sheet->setCellValue('Q1'  ,  'PeriodDays');
    $sheet->setCellValue('R1'  ,  'AnchorageEntry');
    $sheet->setCellValue('S1'  ,  'AnchorageEntryT');
    $sheet->setCellValue('T1'  ,  'AnchorageLeave');
    $sheet->setCellValue('U1'  ,  'AnchorageLeaveT');
    $sheet->setCellValue('V1'  ,  'AnchorageDays');
    $sheet->setCellValue('W1'  ,  'MSericeAnchoragePrice');
    $sheet->setCellValue('X1'  ,  'MovePort1');
    $sheet->setCellValue('Y1'  ,  'MovePort2');
    $sheet->setCellValue('Z1'  ,  'MovePort3');

    $sheet->setCellValue('AA1' ,  'TripNo');
    $sheet->setCellValue('AB1' ,  'DockingNo');
    $sheet->setCellValue('AC1' ,  'RouteNo');
    $sheet->setCellValue('AD1' ,  'ShiftedNo');
    $sheet->setCellValue('AE1' ,  'Reason');
    $sheet->setCellValue('AF1' ,  'MSFraction1');
    $sheet->setCellValue('AG1' ,  'MSFraction2');
    $sheet->setCellValue('AH1' ,  'MSFraction3');
    $sheet->setCellValue('AI1' ,  'MService1');
    $sheet->setCellValue('AG1' ,  'MService2');
    $sheet->setCellValue('AK1' ,  'MService3');
    $sheet->setCellValue('AL1' ,  'MSericeInPrice');
    $sheet->setCellValue('AM1' ,  'MSericeOutPrice');
    $sheet->setCellValue('AN1' ,  'MovePortPrice');
    $sheet->setCellValue('AO1' ,  'MSericeBathPrice');
    $sheet->setCellValue('AP1' ,  'MGPrice');
    $sheet->setCellValue('AQ1' ,  'MSTOTAL');
    //  SServices 1
    $sheet->setCellValue('AR1' ,  'code1'); 
    $sheet->setCellValue('AS1' ,  'SSName1');
    $sheet->setCellValue('AT1' ,  'SSUnit1');
    $sheet->setCellValue('AU1' ,  'SSQut1');
    $sheet->setCellValue('AV1' ,  'SSUPrice1');
    $sheet->setCellValue('AW1' ,  'SSPrice1');
//  SServices 2
    $sheet->setCellValue('AX1' ,  'code2');
    $sheet->setCellValue('AY1' ,  'SSName2');
    $sheet->setCellValue('AZ1' ,  'SSUnit2');
    $sheet->setCellValue('BA1' ,  'SSQut2');
    $sheet->setCellValue('BB1' ,  'SSUPrice2');
    $sheet->setCellValue('BC1' ,  'SSPrice2');

    $sheet->setCellValue('BD1' ,  'code3');
    $sheet->setCellValue('BE1' ,  'SSName3');
    $sheet->setCellValue('BF1' ,  'SSUnit3');
    $sheet->setCellValue('BG1' ,  'SSQut3');
    $sheet->setCellValue('BH1' ,  'SSUPrice3');
    $sheet->setCellValue('BI1' ,  'SSPrice3');

    $sheet->setCellValue('BG1' ,  'code4');
    $sheet->setCellValue('BK1' ,  'SSName4');
    $sheet->setCellValue('BL1' ,  'SSUnit4');
    $sheet->setCellValue('BM1' ,  'SSQut4');
    $sheet->setCellValue('BN1' ,  'SSUPrice4');
    $sheet->setCellValue('BO1' ,  'SSPrice4');

    $sheet->setCellValue('BP1' ,  'code5'); 
    $sheet->setCellValue('BQ1' ,  'SSName5');
    $sheet->setCellValue('BR1' ,  'SSUnit5');
    $sheet->setCellValue('BS1' ,  'SSQut5');
    $sheet->setCellValue('BT1' ,  'SSUPrice5');
    $sheet->setCellValue('BU1' ,  'SSPrice5');

    $sheet->setCellValue('BV1' ,  'SSNote1');
    $sheet->setCellValue('BW1' ,  'SSNote2');
    $sheet->setCellValue('BX1' ,  'SSNote3');
    $sheet->setCellValue('BY1' ,  'SSNote4');
    $sheet->setCellValue('BZ1' ,  'SSNote5');
    
    $sheet->setCellValue('CA1' ,  'SSTOTAL');
    $sheet->setCellValue('CA1' ,  'TOTAL');
    $sheet->setCellValue('CB1' ,  'is_VAT');
    $sheet->setCellValue('CC1' ,  'VAT');
    $sheet->setCellValue('CD1' ,  'VAT_TOTAL');
    $sheet->setCellValue('CE1' ,  'Status'); 


    // Fetch and write data to the spreadsheet
    $rowNumber = 2;
   	foreach($result as $row){ 
		$sheet->setCellValue('A'  . $rowNumber, $row['InvoiceID']);
		$sheet->setCellValue('B'  . $rowNumber, $row['ShipID']);
		$sheet->setCellValue('C'  . $rowNumber, $row['ShipName']);
		$sheet->setCellValue('D'  . $rowNumber, $row['ShipWeight']);
		$sheet->setCellValue('E'  . $rowNumber, $row['AgentID']);
		$sheet->setCellValue('F'  . $rowNumber, $row['AgentNameAr']);
		$sheet->setCellValue('G'  . $rowNumber, $row['AgentNameEn']);
		$sheet->setCellValue('H'  . $rowNumber, $row['ServiceType']);
		$sheet->setCellValue('I'  . $rowNumber, $row['ServiceTypeName']);
		$sheet->setCellValue('G'  . $rowNumber, $row['ServiceTypeFactor']);
		$sheet->setCellValue('K'  . $rowNumber, $row['InvoiceDate']);
		$sheet->setCellValue('L'  . $rowNumber, $row['InvoiceDateT']);
		$sheet->setCellValue('M'  . $rowNumber, $row['ArrivalDate']);
		$sheet->setCellValue('N'  . $rowNumber, $row['ArrivalDateT']);
		$sheet->setCellValue('O'  . $rowNumber, $row['DepartureDate']);
		$sheet->setCellValue('P'  . $rowNumber, $row['DepartureDateT']);
		$sheet->setCellValue('Q'  . $rowNumber, $row['PeriodDays']);
		$sheet->setCellValue('R'  . $rowNumber, $row['AnchorageEntry']);
		$sheet->setCellValue('S'  . $rowNumber, $row['AnchorageEntryT']);
		$sheet->setCellValue('T'  . $rowNumber, $row['AnchorageLeave']);
		$sheet->setCellValue('U'  . $rowNumber, $row['AnchorageLeaveT']);
		$sheet->setCellValue('V'  . $rowNumber, $row['AnchorageDays']);
		$sheet->setCellValue('W'  . $rowNumber, $row['MSericeAnchoragePrice']);
		$sheet->setCellValue('X'  . $rowNumber, $row['MovePort1']);
		$sheet->setCellValue('Y'  . $rowNumber, $row['MovePort2']);
		$sheet->setCellValue('Z'  . $rowNumber, $row['MovePort3']); 
	    $sheet->setCellValue('AA'  . $rowNumber, $row['TripNo']);
	    $sheet->setCellValue('AB'  . $rowNumber, $row['DockingNo']);
	    $sheet->setCellValue('AC'  . $rowNumber, $row['RouteNo']);
	    $sheet->setCellValue('AD'  . $rowNumber, $row['ShiftedNo']);
	    $sheet->setCellValue('AE'  . $rowNumber, $row['Reason']);
	    $sheet->setCellValue('AF'  . $rowNumber, $row['MSFraction1']);
	    $sheet->setCellValue('AG'  . $rowNumber, $row['MSFraction2']);
	    $sheet->setCellValue('AH'  . $rowNumber, $row['MSFraction3']);
	    $sheet->setCellValue('AI'  . $rowNumber, $row['MService1']);
	    $sheet->setCellValue('AG'  . $rowNumber, $row['MService2']);
	    $sheet->setCellValue('AK'  . $rowNumber, $row['MService3']);
	    $sheet->setCellValue('AL'  . $rowNumber, $row['MSericeInPrice']);
	    $sheet->setCellValue('AM'  . $rowNumber, $row['MSericeOutPrice']);
	    $sheet->setCellValue('AN'  . $rowNumber, $row['MovePortPrice']);
	    $sheet->setCellValue('AO'  . $rowNumber, $row['MSericeBathPrice']);
	    $sheet->setCellValue('AP'  . $rowNumber, $row['MGPrice']);
	    $sheet->setCellValue('AQ'  . $rowNumber, $row['MSTOTAL']);

	    $sheet->setCellValue('AR'  . $rowNumber, $row['SScode1']);
	    $sheet->setCellValue('AS'  . $rowNumber, $row['SSName1']);
	    $sheet->setCellValue('AT'  . $rowNumber, $row['SSUnit1']);
	    $sheet->setCellValue('AU'  . $rowNumber, $row['SSQut1']);
	    $sheet->setCellValue('AV'  . $rowNumber, $row['SSUPrice1']);
	    $sheet->setCellValue('AW'  . $rowNumber, $row['SSPrice1']);
	    $sheet->setCellValue('AX'  . $rowNumber, $row['SScode2']);
	    $sheet->setCellValue('AY'  . $rowNumber, $row['SSName2']);
	    $sheet->setCellValue('AZ'  . $rowNumber, $row['SSUnit2']);
	    $sheet->setCellValue('BA'  . $rowNumber, $row['SSQut2']);
	    $sheet->setCellValue('BB'  . $rowNumber, $row['SSUPrice2']);
	    $sheet->setCellValue('BC'  . $rowNumber, $row['SSPrice2']);
	    $sheet->setCellValue('BD'  . $rowNumber, $row['SScode3']);
	    $sheet->setCellValue('BE'  . $rowNumber, $row['SSName3']);
	    $sheet->setCellValue('BF'  . $rowNumber, $row['SSUnit3']);
	    $sheet->setCellValue('BG'  . $rowNumber, $row['SSQut3']);
	    $sheet->setCellValue('BH'  . $rowNumber, $row['SSUPrice3']);
	    $sheet->setCellValue('BI'  . $rowNumber, $row['SSPrice3']);
	    $sheet->setCellValue('BG'  . $rowNumber, $row['SScode4']);
	    $sheet->setCellValue('BK'  . $rowNumber, $row['SSName4']);
	    $sheet->setCellValue('BL'  . $rowNumber, $row['SSUnit4']);
	    $sheet->setCellValue('BM'  . $rowNumber, $row['SSQut4']);
	    $sheet->setCellValue('BN'  . $rowNumber, $row['SSUPrice4']);
	    $sheet->setCellValue('BO'  . $rowNumber, $row['SSPrice4']);
	    $sheet->setCellValue('BP'  . $rowNumber, $row['SScode5']);
	    $sheet->setCellValue('BQ'  . $rowNumber, $row['SSName5']);
	    $sheet->setCellValue('BR'  . $rowNumber, $row['SSUnit5']);
	    $sheet->setCellValue('BS'  . $rowNumber, $row['SSQut5']);
	    $sheet->setCellValue('BT'  . $rowNumber, $row['SSUPrice5']);
	    $sheet->setCellValue('BU'  . $rowNumber, $row['SSPrice5']);
	    $sheet->setCellValue('BV'  . $rowNumber, $row['SSNote1']);
	    $sheet->setCellValue('BW'  . $rowNumber, $row['SSNote2']);
	    $sheet->setCellValue('BX'  . $rowNumber, $row['SSNote3']);
	    $sheet->setCellValue('BY'  . $rowNumber, $row['SSNote4']);
	    $sheet->setCellValue('BZ'  . $rowNumber, $row['SSNote5']);
	   $sheet->setCellValue('CA'  . $rowNumber, $row['SSTOTAL']);
	   $sheet->setCellValue('CA'  . $rowNumber, $row['TOTAL']);
	   $sheet->setCellValue('CB'  . $rowNumber, $row['is_VAT']);
	   $sheet->setCellValue('CC'  . $rowNumber, $row['VAT']);
	   $sheet->setCellValue('CD'  . $rowNumber, $row['VAT_TOTAL']);
	   $sheet->setCellValue('CE'  . $rowNumber, $row['Status']); 


        $rowNumber++;
    }

    // Save the spreadsheet to a file
    $writer = new Xlsx($spreadsheet);
    $filename = 'Monthly_'.$string.'_data.xlsx'; 
    // Set headers for download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    // Output the Excel file to the browser
    $writer->save('php://output');
} else {
    echo "No results found";
}

// Close the database connection
$conn->close();
?>
