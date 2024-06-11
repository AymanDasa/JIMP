<?php
// composer require phpoffice/phpspreadsheet
require_once( '../../vendor/autoload.php'); // Include the PhpSpreadsheet library

$folder_name =  basename(dirname(__FILE__));
require_once( "C:\\wow\\password\\config.php"); 
require_once("../include/auth.php");  
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
$info_sql = "SELECT `name`, `value` FROM `info`";
		$info_result = $dbop->query($info_sql)->fetchAll();   
		$info_data = array();
		$info_data = array_column($info_result, 'value', 'name');  
		$invoiceStart =$info_data['invoiceStart']; // JB- 
		$orginalinvoiceStart=$invoiceStart;
// Your SQL query with Arabic columns 
$SQL = "SELECT * FROM `full_invoice_view` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY."  ;";   
 
$result = $dbop->query($SQL)->fetchAll();   


// Check if there are rows in the result
if (1) {
    // Create a new Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set the column headers
    $sheet->setCellValue('A1'  ,  'Invoice #');
    $sheet->setCellValue('B1'  ,  'Vessel');
    $sheet->setCellValue('C1'  ,  'Arrival');
    $sheet->setCellValue('D1'  ,  'Departure');
    $sheet->setCellValue('E1'  ,  'Shifting');
    $sheet->setCellValue('F1'  ,  'Port Fess');
    $sheet->setCellValue('G1'  ,  'Anchorage');
    $sheet->setCellValue('H1'  ,  'Marine S.');
    $sheet->setCellValue('I1'  ,  'Special S.'); 
    $sheet->setCellValue('J1'  ,  'Total');
    $sheet->setCellValue('K1'  ,  'VAT');
    $sheet->setCellValue('L1'  ,  'Total With VAT'); 


    // Fetch and write data to the spreadsheet
    $rowNumber = 2; 
    $CNFactor= -1 ; 
   	foreach($result as $row){  
        $Status =intval($row['Status']); 

        if($Status > 0){ 
        $invoiceStart=$orginalinvoiceStart;
		$InvoiceID=$invoiceStart.$row['InvoiceID'];
		$sheet->setCellValue('A'  . $rowNumber, $InvoiceID);
		$sheet->setCellValue('B'  . $rowNumber, $row['ShipName']);
		$sheet->setCellValue('C'  . $rowNumber, number_format( floatval($row['MSericeInPrice']) , 2, ".", "") );  
		$sheet->setCellValue('D'  . $rowNumber, number_format( floatval($row['MSericeOutPrice']) , 2, ".", "") );  
		$sheet->setCellValue('E'  . $rowNumber, number_format( floatval($row['MovePortPrice']) , 2, ".", "") );  
		$sheet->setCellValue('F'  . $rowNumber, number_format( floatval($row['MSericeBathPrice']) , 2, ".", "") );  
		$sheet->setCellValue('G'  . $rowNumber, number_format( floatval($row['MSericeAnchoragePrice']) , 2, ".", "") );  
		$sheet->setCellValue('H'  . $rowNumber, number_format( floatval($row['MSTOTAL']) , 2, ".", "") );  
		$sheet->setCellValue('I'  . $rowNumber, number_format( floatval($row['SSTOTAL']) , 2, ".", "") );   
		$sheet->setCellValue('J'  . $rowNumber, number_format( floatval($row['TOTAL']) , 2, ".", "") );  
		$sheet->setCellValue('K'  . $rowNumber, number_format( floatval($row['VAT']) , 2, ".", "") );  
		$sheet->setCellValue('L'  . $rowNumber, number_format( floatval($row['VAT_TOTAL']) , 2, ".", "") );   
        } 
       
		if($Status == 0){   
            $invoiceStart=$orginalinvoiceStart;
            $InvoiceID=$invoiceStart.$row['InvoiceID'];
            $sheet->setCellValue('A'  . $rowNumber, $InvoiceID);
            $sheet->setCellValue('B'  . $rowNumber, $row['ShipName']);
            $sheet->setCellValue('C'  . $rowNumber, number_format( floatval($row['MSericeInPrice']) , 2, ".", "") );  
            $sheet->setCellValue('D'  . $rowNumber, number_format( floatval($row['MSericeOutPrice']) , 2, ".", "") );  
            $sheet->setCellValue('E'  . $rowNumber, number_format( floatval($row['MovePortPrice']) , 2, ".", "") );  
            $sheet->setCellValue('F'  . $rowNumber, number_format( floatval($row['MSericeBathPrice']) , 2, ".", "") );  
            $sheet->setCellValue('G'  . $rowNumber, number_format( floatval($row['MSericeAnchoragePrice']) , 2, ".", "") );  
            $sheet->setCellValue('H'  . $rowNumber, number_format( floatval($row['MSTOTAL']) , 2, ".", "") );  
            $sheet->setCellValue('I'  . $rowNumber, number_format( floatval($row['SSTOTAL']) , 2, ".", "") );   
            $sheet->setCellValue('J'  . $rowNumber, number_format( floatval($row['TOTAL']) , 2, ".", "") );  
            $sheet->setCellValue('K'  . $rowNumber, number_format( floatval($row['VAT']) , 2, ".", "") );  
            $sheet->setCellValue('L'  . $rowNumber, number_format( floatval($row['VAT_TOTAL']) , 2, ".", "") );   
            $invoiceStart='CN-';   
            $rowNumber++;
            $InvoiceID=$invoiceStart.$row['InvoiceID'];
            $sheet->setCellValue('A'  . $rowNumber, $InvoiceID);
            $sheet->setCellValue('B'  . $rowNumber, $row['ShipName']);
            $sheet->setCellValue('C'  . $rowNumber, number_format( floatval($row['MSericeInPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('D'  . $rowNumber, number_format( floatval($row['MSericeOutPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('E'  . $rowNumber, number_format( floatval($row['MovePortPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('F'  . $rowNumber, number_format( floatval($row['MSericeBathPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('G'  . $rowNumber, number_format( floatval($row['MSericeAnchoragePrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('H'  . $rowNumber, number_format( floatval($row['MSTOTAL'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('I'  . $rowNumber, number_format( floatval($row['SSTOTAL'])* $CNFactor , 2, ".", "") );   
            $sheet->setCellValue('J'  . $rowNumber, number_format( floatval($row['TOTAL'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('K'  . $rowNumber, number_format( floatval($row['VAT'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue('L'  . $rowNumber, number_format( floatval($row['VAT_TOTAL'])* $CNFactor , 2, ".", "") );   
		} 
        $rowNumber++;
    }

    // Save the spreadsheet to a file
    $writer = new Xlsx($spreadsheet);
    $filename = 'Monthly_'.$string.'_data.xlsx'; 
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
