<?php
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
$YY = substr($string, 0, 2);
$YY='20'.$YY ;
$MM = substr($string, 2);  
// Include PhpSpreadsheet classes
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Your SQL query with Arabic columns 
$SQL = "SELECT * FROM `invoice` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY."  AND `Status`= '800';";   
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
    $sheet->setCellValue('AR1' ,  'SService1');
    $sheet->setCellValue('AS1' ,  'SService2');
    $sheet->setCellValue('AT1' ,  'SService3');
    $sheet->setCellValue('AU1' ,  'SService4');
    $sheet->setCellValue('AV1' ,  'SService5');
    $sheet->setCellValue('AW1' ,  'SSName1');
    $sheet->setCellValue('AX1' ,  'SSName2');
    $sheet->setCellValue('AY1' ,  'SSName3');
    $sheet->setCellValue('AZ1' ,  'SSName4');

    $sheet->setCellValue('BA1' ,  'SSName5');
    $sheet->setCellValue('BB1' ,  'SSNote1');
    $sheet->setCellValue('BC1' ,  'SSNote2');
    $sheet->setCellValue('BD1' ,  'SSNote3');
    $sheet->setCellValue('BE1' ,  'SSNote4');
    $sheet->setCellValue('BF1' ,  'SSNote5');
    $sheet->setCellValue('BG1' ,  'SSUnit1');
    $sheet->setCellValue('BH1' ,  'SSUnit2');
    $sheet->setCellValue('BI1' ,  'SSUnit3');
    $sheet->setCellValue('BG1' ,  'SSUnit4');
    $sheet->setCellValue('BK1' ,  'SSUnit5');
    $sheet->setCellValue('BL1' ,  'SSQut1');
    $sheet->setCellValue('BM1' ,  'SSQut2');
    $sheet->setCellValue('BN1' ,  'SSQut3');
    $sheet->setCellValue('BO1' ,  'SSQut4');
    $sheet->setCellValue('BP1' ,  'SSQut5');
    $sheet->setCellValue('BQ1' ,  'SSUPrice1');
    $sheet->setCellValue('BR1' ,  'SSUPrice2');
    $sheet->setCellValue('BS1' ,  'SSUPrice3');
    $sheet->setCellValue('BT1' ,  'SSUPrice4');
    $sheet->setCellValue('BU1' ,  'SSUPrice5');
    $sheet->setCellValue('BV1' ,  'SSPrice1');
    $sheet->setCellValue('BW1' ,  'SSPrice2');
    $sheet->setCellValue('BX1' ,  'SSPrice3');
    $sheet->setCellValue('BY1' ,  'SSPrice4');
    $sheet->setCellValue('BZ1' ,  'SSPrice5');
    
    $sheet->setCellValue('CA1' ,  'SSTOTAL');
    $sheet->setCellValue('CA1' ,  'TOTAL');
    $sheet->setCellValue('CB1' ,  'is_VAT');
    $sheet->setCellValue('CC1' ,  'VAT');
    $sheet->setCellValue('CD1' ,  'VAT_TOTAL');
    $sheet->setCellValue('CE1' ,  'Status'); 


    // Fetch and write data to the spreadsheet
    $rowNumber = 2;
   	foreach($result as $row){ 
		$sheet->setCellValue('A1'  . $rowNumber, $row['InvoiceID']);
		$sheet->setCellValue('B1'  . $rowNumber, $row['ShipID']);
		$sheet->setCellValue('C1'  . $rowNumber, $row['ShipName']);
		$sheet->setCellValue('D1'  . $rowNumber, $row['ShipWeight']);
		$sheet->setCellValue('E1'  . $rowNumber, $row['AgentID']);
		$sheet->setCellValue('F1'  . $rowNumber, $row['AgentNameAr']);
		$sheet->setCellValue('G1'  . $rowNumber, $row['AgentNameEn']);
		$sheet->setCellValue('H1'  . $rowNumber, $row['ServiceType']);
		$sheet->setCellValue('I1'  . $rowNumber, $row['ServiceTypeName']);
		$sheet->setCellValue('G1'  . $rowNumber, $row['ServiceTypeFactor']);
		$sheet->setCellValue('K1'  . $rowNumber, $row['InvoiceDate']);
		$sheet->setCellValue('L1'  . $rowNumber, $row['InvoiceDateT']);
		$sheet->setCellValue('M1'  . $rowNumber, $row['ArrivalDate']);
		$sheet->setCellValue('N1'  . $rowNumber, $row['ArrivalDateT']);
		$sheet->setCellValue('O1'  . $rowNumber, $row['DepartureDate']);
		$sheet->setCellValue('P1'  . $rowNumber, $row['DepartureDateT']);
		$sheet->setCellValue('Q1'  . $rowNumber, $row['PeriodDays']);
		$sheet->setCellValue('R1'  . $rowNumber, $row['AnchorageEntry']);
		$sheet->setCellValue('S1'  . $rowNumber, $row['AnchorageEntryT']);
		$sheet->setCellValue('T1'  . $rowNumber, $row['AnchorageLeave']);
		$sheet->setCellValue('U1'  . $rowNumber, $row['AnchorageLeaveT']);
		$sheet->setCellValue('V1'  . $rowNumber, $row['AnchorageDays']);
		$sheet->setCellValue('W1'  . $rowNumber, $row['MSericeAnchoragePrice']);
		$sheet->setCellValue('X1'  . $rowNumber, $row['MovePort1']);
		$sheet->setCellValue('Y1'  . $rowNumber, $row['MovePort2']);
		$sheet->setCellValue('Z1'  . $rowNumber, $row['MovePort3']); 
	    $sheet->setCellValue('AA1' . $rowNumber, $row['TripNo']);
	    $sheet->setCellValue('AB1' . $rowNumber, $row['DockingNo']);
	    $sheet->setCellValue('AC1' . $rowNumber, $row['RouteNo']);
	    $sheet->setCellValue('AD1' . $rowNumber, $row['ShiftedNo']);
	    $sheet->setCellValue('AE1' . $rowNumber, $row['Reason']);
	    $sheet->setCellValue('AF1' . $rowNumber, $row['MSFraction1']);
	    $sheet->setCellValue('AG1' . $rowNumber, $row['MSFraction2']);
	    $sheet->setCellValue('AH1' . $rowNumber, $row['MSFraction3']);
	    $sheet->setCellValue('AI1' . $rowNumber, $row['MService1']);
	    $sheet->setCellValue('AG1' . $rowNumber, $row['MService2']);
	    $sheet->setCellValue('AK1' . $rowNumber, $row['MService3']);
	    $sheet->setCellValue('AL1' . $rowNumber, $row['MSericeInPrice']);
	    $sheet->setCellValue('AM1' . $rowNumber, $row['MSericeOutPrice']);
	    $sheet->setCellValue('AN1' . $rowNumber, $row['MovePortPrice']);
	    $sheet->setCellValue('AO1' . $rowNumber, $row['MSericeBathPrice']);
	    $sheet->setCellValue('AP1' . $rowNumber, $row['MGPrice']);
	    $sheet->setCellValue('AQ1' . $rowNumber, $row['MSTOTAL']);
	    $sheet->setCellValue('AR1' . $rowNumber, $row['SService1']);
	    $sheet->setCellValue('AS1' . $rowNumber, $row['SService2']);
	    $sheet->setCellValue('AT1' . $rowNumber, $row['SService3']);
	    $sheet->setCellValue('AU1' . $rowNumber, $row['SService4']);
	    $sheet->setCellValue('AV1' . $rowNumber, $row['SService5']);
	    $sheet->setCellValue('AW1' . $rowNumber, $row['SSName1']);
	    $sheet->setCellValue('AX1' . $rowNumber, $row['SSName2']);
	    $sheet->setCellValue('AY1' . $rowNumber, $row['SSName3']);
	    $sheet->setCellValue('AZ1' . $rowNumber, $row['SSName4']); 
	    $sheet->setCellValue('BA1'  . $rowNumber, $row['SSName5']);
	    $sheet->setCellValue('BB1'  . $rowNumber, $row['SSNote1']);
	    $sheet->setCellValue('BC1'  . $rowNumber, $row['SSNote2']);
	    $sheet->setCellValue('BD1'  . $rowNumber, $row['SSNote3']);
	    $sheet->setCellValue('BE1'  . $rowNumber, $row['SSNote4']);
	    $sheet->setCellValue('BF1'  . $rowNumber, $row['SSNote5']);
	    $sheet->setCellValue('BG1'  . $rowNumber, $row['SSUnit1']);
	    $sheet->setCellValue('BH1'  . $rowNumber, $row['SSUnit2']);
	    $sheet->setCellValue('BI1'  . $rowNumber, $row['SSUnit3']);
	    $sheet->setCellValue('BG1'  . $rowNumber, $row['SSUnit4']);
	    $sheet->setCellValue('BK1'  . $rowNumber, $row['SSUnit5']);
	    $sheet->setCellValue('BL1'  . $rowNumber, $row['SSQut1']);
	    $sheet->setCellValue('BM1'  . $rowNumber, $row['SSQut2']);
	    $sheet->setCellValue('BN1'  . $rowNumber, $row['SSQut3']);
	    $sheet->setCellValue('BO1'  . $rowNumber, $row['SSQut4']);
	    $sheet->setCellValue('BP1'  . $rowNumber, $row['SSQut5']);
	    $sheet->setCellValue('BQ1'  . $rowNumber, $row['SSUPrice1']);
	    $sheet->setCellValue('BR1'  . $rowNumber, $row['SSUPrice2']);
	    $sheet->setCellValue('BS1'  . $rowNumber, $row['SSUPrice3']);
	    $sheet->setCellValue('BT1'  . $rowNumber, $row['SSUPrice4']);
	    $sheet->setCellValue('BU1'  . $rowNumber, $row['SSUPrice5']);
	    $sheet->setCellValue('BV1'  . $rowNumber, $row['SSPrice1']);
	    $sheet->setCellValue('BW1'  . $rowNumber, $row['SSPrice2']);
	    $sheet->setCellValue('BX1'  . $rowNumber, $row['SSPrice3']);
	    $sheet->setCellValue('BY1'  . $rowNumber, $row['SSPrice4']);
	    $sheet->setCellValue('BZ1'  . $rowNumber, $row['SSPrice5']); 
	   $sheet->setCellValue('CA1' . $rowNumber, $row['SSTOTAL']);
	   $sheet->setCellValue('CA1' . $rowNumber, $row['TOTAL']);
	   $sheet->setCellValue('CB1' . $rowNumber, $row['is_VAT']);
	   $sheet->setCellValue('CC1' . $rowNumber, $row['VAT']);
	   $sheet->setCellValue('CD1' . $rowNumber, $row['VAT_TOTAL']);
	   $sheet->setCellValue('CE1' . $rowNumber, $row['Status']); 


        $rowNumber++;
    }

    // Save the spreadsheet to a file
    $writer = new Xlsx($spreadsheet);
    $filename = 'exported_data.xlsx';
    $writer->save($filename);

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
