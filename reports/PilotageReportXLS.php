<?php
// composer require phpoffice/phpspreadsheet
require '../../vendor/autoload.php'; // Include the PhpSpreadsheet library

$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php");  
$SAPPOname =  $table_body= '';
$IsActive = 0 ;	  
$TotalInvoiceTable=0;
//  http://localhost/jIMP/reports/DailyInvoiceReportXLS.php?InvoiceDate=20240229
 
// Include PhpSpreadsheet classes
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 
// Your SQL query with Arabic columns 
$debug =0; 

$info_sql = "SELECT `name`, `value` FROM `info`";
		$info_result = $dbop->query($info_sql)->fetchAll();   
		$info_data = array();
		$info_data = array_column($info_result, 'value', 'name');  
		$invoiceStart =$info_data['invoiceStart']; // JB- 
		$orginalinvoiceStart=$invoiceStart;
		
$TotalInvoice_Table=$TotalInvoice_VAT=$TotalInvoice_TOTAL=$TotalInvoice_MSericeInPrice=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_SSTOTAL=$TotalInvoice_MSTOTAL=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_Anchorage 	= $TotalVAT= 0;
 

if(isset($_GET['FromInvoice']) && isset($_GET['ToInvoice'])){
	$FromInvoice=intval($_GET['FromInvoice']);
	$ToInvoice=intval($_GET['ToInvoice']);
	if($debug){echo "<b>FromInvoice :</b>".$FromInvoice."<br>";}
	if($debug){echo "<b>ToInvoice :</b>".$ToInvoice."<br>";}
}else{exit();}
$sql = "SELECT * FROM `invoice` WHERE `InvoiceID` BETWEEN $FromInvoice AND $ToInvoice"; 
$result = $dbop->query($sql)->fetchAll();   

// print_r($result );
// Check if there are rows in the result
if (1) {
    // Create a new Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set the column headers
    $sheet->setCellValue('A1'  ,  'SN');
    $sheet->setCellValue('B1'  ,  'SHIP NAME');
    $sheet->setCellValue('C1'  ,  'G.R.T.');
    $sheet->setCellValue('D1'  ,  'ARRIVAL DATE');
    $sheet->setCellValue('E1'  ,  'SAILED DATE');
    $sheet->setCellValue('F1'  ,  'ARRIVAL CHARGE SAR');
    $sheet->setCellValue('G1'  ,  'DEPARTURE CHARGE SAR');
    $sheet->setCellValue('H1'  ,  'BERTH USE SAR');
    $sheet->setCellValue('I1'  ,  'ANCH CHARGE SAR');
    $sheet->setCellValue('J1'  ,  'SHIFT CHARGE SAR'); 
    $sheet->setCellValue('K1'  ,  'OTHER CHARGE SAR');
    $sheet->setCellValue('L1'  ,  'BEFORE VAT CHARGE SAR');
    $sheet->setCellValue('M1'  ,  'VAT CHARGE SAR');
    $sheet->setCellValue('N1'  ,  'AFTER VAT CHARGE SAR');
    $sheet->setCellValue('O1'  ,  'AGENT');
    $sheet->setCellValue('P1'  ,  'BERTH');
    $sheet->setCellValue('Q1'  ,  'TRIP ROT NO');
    $sheet->setCellValue('R1'  ,  'INVOICE NUMBER');  


    // Fetch and write data to the spreadsheet
    $rowNumber = 2;
    $SNO=1;
   	foreach($result as $row){ 
		//echo  $row['InvoiceID']."<br>";
		$Status =intval($row['Status']);
		if($Status==0){
			$invoiceStart='CN-';  
		}else{
			$invoiceStart=$orginalinvoiceStart;   
		}
		$InvoiceID=$invoiceStart.$row['InvoiceID'];
		$sheet->setCellValue('A'  . $rowNumber, $SNO); 
		$sheet->setCellValue('B'  . $rowNumber, $row['ShipName']);
		$sheet->setCellValue('C'  . $rowNumber, $row['ShipWeight']);
		$sheet->setCellValue('D'  . $rowNumber, $row['ArrivalDate']);
		$sheet->setCellValue('E'  . $rowNumber, $row['DepartureDate']);
		$sheet->setCellValue('F'  . $rowNumber, $row['MSericeInPrice']);
		$sheet->setCellValue('G'  . $rowNumber, $row['MSericeOutPrice']);
		$sheet->setCellValue('H'  . $rowNumber, $row['MSericeBathPrice']);
		$sheet->setCellValue('I'  . $rowNumber, $row['MSericeAnchoragePrice']); 
		$sheet->setCellValue('J'  . $rowNumber, $row['MovePortPrice']);
		$sheet->setCellValue('K'  . $rowNumber, $row['SSTOTAL']);
		$sheet->setCellValue('L'  . $rowNumber, $row['TOTAL']);
		$sheet->setCellValue('M'  . $rowNumber, $row['VAT']);
		$sheet->setCellValue('N'  . $rowNumber, $row['VAT_TOTAL']);
		$sheet->setCellValue('O'  . $rowNumber, $row['AgentNameEn']);
		$sheet->setCellValue('P'  . $rowNumber, $row['RouteNo']);
		$sheet->setCellValue('Q'  . $rowNumber, $row['TripNo']);
		$sheet->setCellValue('R'  . $rowNumber, $InvoiceID); 

        $SNO++;
        $rowNumber++;
    }
 // exit();
    // Save the spreadsheet to a file
    $writer = new Xlsx($spreadsheet);
    $filename = 'Pilotage_data.xlsx'; 

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
