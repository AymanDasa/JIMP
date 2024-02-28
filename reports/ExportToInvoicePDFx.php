<?php 
 
	Require_once( "C:\\wow\\password\\config.php"); 
	Require_once("../include/auth.php"); 
	Require_once("../include/config.php"); 


if(isset($_GET['FromInvoice']) ){
	$FromInvoice=$_GET['FromInvoice'];
	$ToInvoice=$_GET['ToInvoice'];
	echo $FromInvoice;
	echo $ToInvoice;
} 
if(intval($FromInvoice)>intval($ToInvoice)){exit();}	
for($InvoiceID=$FromInvoice;$InvoiceID<=$ToInvoice; $InvoiceID++)		
{		 
	// Use escapeshellarg to properly escape arguments
	$InvoiceID = escapeshellarg($InvoiceID); 
	
	// Construct the command with variables as arguments
	$command = "python3 script.py $InvoiceID   2>&1";
	$command = "C:\\Python39\\python.exe script.py $escapedVar1 $escapedVar2 2>&1";
	// Execute the command
	$result = shell_exec($command);
	
	echo "<br>Result: " . $result;
}
?>
