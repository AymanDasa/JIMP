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


// ABC Functions 
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
// END ABC Functions 

// Check if there are rows in the result
if (1) {
    // Create a new Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set the column headers
    $sheet->setCellValue(getNextAlphaX()  ,  'Invoice #');
    $sheet->setCellValue(getNextAlphaX()  ,  'Vessel');
    $sheet->setCellValue(getNextAlphaX()  ,  'G.R.T.');
    $sheet->setCellValue(getNextAlphaX()  ,  'Arrival');
    $sheet->setCellValue(getNextAlphaX()  ,  'Departure');
    $sheet->setCellValue(getNextAlphaX()  ,  'Shifting');
    $sheet->setCellValue(getNextAlphaX()  ,  'Port Fess');
    $sheet->setCellValue(getNextAlphaX()  ,  'Anchorage');
    $sheet->setCellValue(getNextAlphaX()  ,  'Marine S.');
    $sheet->setCellValue(getNextAlphaX()  ,  'Special S.'); 
    $sheet->setCellValue(getNextAlphaX()  ,  'Total');
    $sheet->setCellValue(getNextAlphaX()  ,  'VAT');
    $sheet->setCellValue(getNextAlphaX()  ,  'Total With VAT'); 
    $currentPosition= 0 ;	
//  ============================================
    // Fetch and write data to the spreadsheet
    $rowNumber = 2; 
    $CNFactor= -1 ; 
   	foreach($result as $row){  
        $Status =intval($row['Status']); 
        $currentPosition= 0 ;	
        if($Status > 0){ 
        $invoiceStart=$orginalinvoiceStart;
		$InvoiceID=$invoiceStart.$row['InvoiceID'];
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $InvoiceID);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipName']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipWeight']);
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeInPrice']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeOutPrice']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MovePortPrice']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeBathPrice']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeAnchoragePrice']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSTOTAL']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['SSTOTAL']) , 2, ".", "") );   
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['TOTAL']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['VAT']) , 2, ".", "") );  
		$sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['VAT_TOTAL']) , 2, ".", "") );   
        } 
        $currentPosition= 0 ;	
		if($Status == 0){   
            $invoiceStart=$orginalinvoiceStart;
            $InvoiceID=$invoiceStart.$row['InvoiceID'];
            $sheet->setCellValue(getNextAlpha() . $rowNumber, $InvoiceID);
            $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipName']);
            $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipWeight']);
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeInPrice']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeOutPrice']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MovePortPrice']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeBathPrice']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeAnchoragePrice']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSTOTAL']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['SSTOTAL']) , 2, ".", "") );   
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['TOTAL']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['VAT']) , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['VAT_TOTAL']) , 2, ".", "") );   
            $invoiceStart='CN-';   
            $rowNumber++;
            $InvoiceID=$invoiceStart.$row['InvoiceID'];
            $currentPosition= 0 ;	
            $sheet->setCellValue(getNextAlpha() . $rowNumber, $InvoiceID);
            $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipName']);
            $sheet->setCellValue(getNextAlpha() . $rowNumber, $row['ShipWeight']);
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeInPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeOutPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MovePortPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeBathPrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSericeAnchoragePrice'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['MSTOTAL'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['SSTOTAL'])* $CNFactor , 2, ".", "") );   
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['TOTAL'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['VAT'])* $CNFactor , 2, ".", "") );  
            $sheet->setCellValue(getNextAlpha() . $rowNumber, number_format( floatval($row['VAT_TOTAL'])* $CNFactor , 2, ".", "") );   
		} 
        $rowNumber++;
    }
//  ============================================
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
