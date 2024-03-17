<?php    
use Dompdf\Dompdf;
use Dompdf\Options;
require '../../dompdf/vendor/autoload.php';
$options = new Options();
$options->set('defaultFont', 'Arabic');
$options->set('chroot', realpath(''));
$dompdf = new Dompdf($options); 
require_once '../../dompdf/vendor/src/Arabic.php';
$Arabic = new ArPHP\I18N\Arabic(); 
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
function X0X($myText)
		{
			$digit = intval($myText); 
			if($digit<1)return '';
			else{ return $myText;} 
		}
$html= '';
$i=0; 
$string=strval($_GET['YM']); 
$MM = intval(substr($string, 0, 2));
$YY = intval(substr($string, 2));
$MonthDate = " ".$MM."-".$YY." ";


$TotalInvoice_Table=$non_VATabl_gross=$VATabl_gross=$CPSP_TotalShare=$PORT_TotalShare=$CPSP_TotalVAT =$PORT_TotalVAT= $TotalInvoice_VAT=$TotalInvoice_TOTAL=$TotalInvoice_MSericeInPrice=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_SSTOTAL=$TotalInvoice_MSTOTAL=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_Anchorage 	= $TotalVAT= 0;
$TotalInvoice_MSericeBathPrice=0;
$SQL = "SELECT * FROM `invoice` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY."  AND `Status`= '800';";  
$invoices = $dbop->query($SQL)->fetchAll();    

 $html='';
 

$html= '
<html> 
<head>   
<style>
	.table_heade{
		font-size: 12px;
		
		} 
	.table_tbody{
		font-size: 14px;  
		bordercolor:#B4B4B4;
		} 
	.table_tH{
		font-size: 10px;  
		} 
	.table1{
		width:100%  ;
		bordercolor:#B4B4B4; 
		} 
	@page { margin: 15px; }
	@font-face {
		font-family: "Arabic";
		src:  url("DubaiRegular.ttf") format("truetype");
		font-weight: normal;
		font-style:normal; 
		} 
	body{
		font-family:Arabic;
		font-size:9;
		text-align:right;
		}   
	.myfixed2 {  
		overflow: visible;
		left: 9px;
		top: 2px;
		width:98%;  
		font-family:sans;
		margin: 0;
		} 
	.table0{
		bordercolor:#B4B4B4;
		dir:ltr;
		width:100%;
		border-collapse:collapse; 
		top:0pt;
		left:0pt;
		z-index:4;  
		}
	.table30{
		bordercolor:#B4B4B4;
		dir:center;
		width:44%;
		border-collapse:collapse; 
		top:0pt; 
		margin-left: auto;
		margin-right: auto;
		z-index:4;  
		}
	.titele1{
		font-size:15px; 
		font-family:Verdana;  
		}
	.titela1{
		font-size:18px; 
		text-align: right; 
		} 
	.titele1e{
		font-size:20px; 
		text-align: right; 
		} 
	.labela1{
		font-size:13px; 
		text-align: right;
		}
	.labele1{
		font-size:13px; 
		font-family:Verdana; 
		}
	.dataa1{
		bordercolor:#B4B4B4;
		font-size:15px; 
		text-align: right;
		font-family:Verdana;
		}
	.datae1{
		bordercolor:#B4B4B4;
		font-size:15px;
		text-align: right;
		font-family:Sans-serif; 
		}
	.dataa1x{
		bordercolor:#B4B4B4;
		font-size:15px; 
		text-align: right;
		float: right;
		display: inline;
		}
	.footer{ 
		text-align: center;
		position: fixed;
		}
	.footer{
		bottom: 0px;
		}
	.numbersTD{
		font-family:Verdana;
		border:1px solid #dee2e6;
		padding-right: 2px;
		text-align: right; 
		}
	.tableDay{
		font-family:Verdana;
		border:0px solid #dee2e6;
		padding-right: 2px;
		text-align: right; 
		}
	.tableDayTotal{
		font-size:15px; 
		font-family:Verdana;
		border: 1px solid #dee2e6;
		border-width: 1px solid #dee2e6;
		padding-right: 2px;
		text-align: right;    
		padding-top: 4px;
		padding-bottom: 4px; 
		}
	.tablecenter{
		font-family:Verdana;
		border:1px solid #dee2e6;
		padding-right: 2px;
		text-align: center;
		}
	.tableleft{
		font-family:Verdana;
		border:1px solid #dee2e6;
		padding-right: 2px;
		text-align: left;
		}
	.tableright{
		font-family:Verdana;
		border:1px solid #dee2e6;
		padding-right: 2px;
		padding-top: 4px;
		padding-bottom: 4px;
		text-align: right;
		}
	.tablerightMz{
		font-family:Verdana;
		border:1px solid #dee2e6;
		padding-right: 2px;
		padding-top: 4px;
		padding-bottom: 4px;
		text-align: center; 
		font-size:15px;  
		}
	.tablecenterHead{ 
		cellpadding:0; 
		cellspacing:0;  
		font-family:Verdana;
		border:1px solid #dee2e6; 
		text-align: center;
		}
	footer:last-child {
		position: fixed;
		left: 0px;
		right: 0px;
		height: 150px;
		bottom: 0px;
		margin-bottom: -150px;
		} 
	.tableFoot{
		width: 100%;
		font-family:Verdana;
		border:0px solid #dee2e6;
		padding-right: 2px;
		text-align: right; 
		} 
	.invoicecount{
		font-size:9px;  
		font-family:Verdana;
		border:0px solid #dee2e6;
		padding-right: 2px;
		padding-bottom: 4px;
		text-align: right; 
		} 
	.page_break { 
		page-break-before: always;  <!--  div class="page_break"  -->
	}
	 
	</style> 
</head>
<body> 
';  
/*
##########################################################################################
#############################         HEADDER       ######################################
##########################################################################################
*/
$html.= '
	<table class="table0">
		<tbody  class="tableDay">
			<tr>
				<td style="text-align:center; width:20%  ; height:20px ;">
				<p> 
					<span lang="ar-SA">   
						المملكة العربية السعودية <br>
						'.$CompanyName.' <br>
						<span lang="ar-SA">هـاتف :8696300 013</span>
						<br>
						<span lang="ar-SA">فـاكس :8574202 013</span>      
					</span>
				</p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;">
				<p>
					<span lang="ar-SA"><br>
						<img src="img/'.$companyLogo.'" height="60px">
					</span>
				</p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;"> 
					<span lang="ar-SA"> كشف الفواتير الشهرية<br>
					</span>
					<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
						Monthly Invoice Report  
					</span><br> '.$MonthDate .'   التاريخ
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
				<p>
					<span lang="ar-SA">
						<img src="img/mawani.png" height="70px"> 
					</span>
				</p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
				<p>
					<span style="font-size:8pt" lang="ar-SA">
							المملكة العربية السعودية 
							<br>
						الهيئة العامة للموانئ
						<br>
						'.$port_name.'
						<br>
						www.ports.gov.sa
					</span>
				</p>
				</td>
			</tr>
		</tbody>
	</table>  
	';  
/*
##########################################################################################
#############################         Table         ######################################
##########################################################################################
*/
$html.= '
	<table class="table0">
		<thead>
			<tr class="tablecenterHead">
				<th width="6%"class="tablecenterHead">Invoice</th>
				<th width="6%" class="tablecenterHead">Date</th>
				<th class="tablecenterHead">Agent Name</th>
				<th width="65px" class="tablecenterHead">Gross With VAT</th>
				<th width="65px" class="tablecenterHead">VAT</th>
				<th width="65px"  class="tablecenterHead">'.$companySlog.' VAT<br>'.$CPSPercentage.'%</th>
				<th width="65px" class="tablecenterHead">Port VAT <br>'.$PortPercentage.'%</th>
				<th width="65px" class="tablecenterHead">Amount</th>
				<th width="65px" class="tablecenterHead">'.$companySlog.' Share</th>
				<th width="65px" class="tablecenterHead">Port Share</th> 
			</tr>
		</thead>
		<tbody> 
		';

			
		foreach ($invoices as $invoice) {   
			$i=$i+1;  
			$InvoiceID    = $invoice['InvoiceID'];  
			$dateTime = new DateTime($invoice['InvoiceDate']);
			$InvoiceDate = $dateTime->format('Y-m-d');
			$AgentNameEn  = $invoice['AgentNameEn'];  
			$VAT_TOTAL    = floatval($invoice['VAT_TOTAL']);  
			$TotalInvoice_Table 	=  $TotalInvoice_Table +$VAT_TOTAL ; 
			$VAT    		= floatval($invoice['VAT']); 
			$TotalInvoice_VAT=  $TotalInvoice_VAT +$VAT ; 
			
			$TOTAL    	= floatval($invoice['TOTAL']);  
			if($VAT>0){$non_VATabl_gross= $non_VATabl_gross+$TOTAL;} 
				else{$VATabl_gross= $VATabl_gross+$TOTAL;} 
			$TotalInvoice_TOTAL=  $TotalInvoice_TOTAL +$TOTAL ; 
			$CPSP_VAT 	= floatval(($CPSPercentage*$VAT)  	/100);
			$PORT_VAT 	= floatval(($PortPercentage*$VAT)  /100);
			$CPSP_TotalVAT = $CPSP_TotalVAT + $CPSP_VAT  ;
			$PORT_TotalVAT = $PORT_TotalVAT +$PORT_VAT  ;
			$CPSP_Share 	= ($TOTAL*$CPSPercentage)  /100;        
			$PORT_Share 	= ($TOTAL*$PortPercentage)  /100;    
			$CPSP_TotalShare = $CPSP_TotalShare + $CPSP_Share  ;
			$PORT_TotalShare = $PORT_TotalShare +$PORT_Share  ;   
			$html.= '<tr class="tableDay">
						<td class="tableleft">'.$invoiceStart.$InvoiceID . ' </td>
						<td class="tableleft">'.$InvoiceDate. ' </td>
						<td class="tableleft">'.$AgentNameEn.'  </td>
						<td class="tableright">'.number_format($VAT_TOTAL,2,".").'  </td>
						<td class="tableright">'.X0X(number_format($VAT,2,".")).'</td>
						<td class="tableright">'.X0X(number_format($CPSP_VAT,2,".")).'  </td> 
						<td class="tableright">'.X0X(number_format($PORT_VAT,2,".")).'  </td> 
						<td class="tableright">'.number_format($TOTAL,2,".").'  </td>
						<td class="tableright">'.number_format($CPSP_Share,2,".").'  </td> 
						<td class="tableright">'.number_format($PORT_Share,2,".").'  </td>   
				</tr>' ;
		}
		$html.= '
		<tr class="tableDayTotal"> 
					<td></td>
					<td></td>
					<td></td>
					<td class="tableright">'.number_format($TotalInvoice_Table,2,".").' </td>  
					<td class="tableright">'.number_format($TotalInvoice_VAT,2,".").' </td>   
					<td class="tableright">'.number_format($CPSP_TotalVAT,2,".").' </td>  
					<td class="tableright">'.number_format($PORT_TotalVAT,2,".").' </td>  
					<td class="tableright">'.number_format($TotalInvoice_TOTAL,2,".").' </td>  
					<td class="tableright">'.number_format($CPSP_TotalShare,2,".").' </td>   
					<td class="tableright">'.number_format($PORT_TotalShare,2,".").' </td>    
			</tr> 

		<tr class="tableDayTotal">
					<td></td>  
					<td></td>  
					<td></td> 
					<td></td> 
					<td></td> 
					<td></td> 
					<td></td> 
					<td></td> 
					<td></td> 
					<td class="invoicecount"> عدد الفواتير  '.$i.'</td>    
			</tr> 
		</tbody>
	</table>  
	';$html.=' <div class="page_break"></div>';
	
	
	
$html.= '
<table class="table0">
	<tbody  class="tableDay">
		<tr>
			<td style="text-align:center; width:20%  ; height:20px ;">
			<p> 
				<span lang="ar-SA">   
					المملكة العربية السعودية <br>
					'.$CompanyName.' <br>
					<span lang="ar-SA">هـاتف :8696300 013</span>
					<br>
					<span lang="ar-SA">فـاكس :8574202 013</span>      
				</span>
			</p>
			</td>
			<td style="text-align:center; width:20%  ; height:20px ;">
			<p>
				<span lang="ar-SA"><br>
					<img src="img/'.$companyLogo.'" height="60px">
				</span>
			</p>
			</td>
			<td style="text-align:center; width:20%  ; height:20px ;"> 
				<span lang="ar-SA"> عكس الفواتير الشهرية<br>
				</span>
				<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
					Monthly Credit Note Report  
				</span><br> '.$MonthDate .'   التاريخ
			</td>
			<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
			<p>
				<span lang="ar-SA">
					<img src="img/mawani.png" height="70px"> 
				</span>
			</p>
			</td>
			<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
			<p>
				<span style="font-size:8pt" lang="ar-SA">
						المملكة العربية السعودية 
						<br>
					الهيئة العامة للموانئ
					<br>
					'.$port_name.'
					<br>
					www.ports.gov.sa
				</span>
			</p>
			</td>
		</tr>
	</tbody>
</table>  
<br><br><br><br><br><br><br><br>
';  
$CN_MSTOTAL	=$CN_non_VATabl_gross=$CN_CPSP_Share=0;	
$CN_SSTOTAL	=$CN_VATabl_gross=$CN_PORT_TotalVAT=0;	
$CN_TOTAL		=$CN_PORT_TotalShare=$CN_CPSP_TotalVAT =0;
$CN_VAT		=$CN_CPSP_TotalShare=$CN_PORT_VAT =0;	
$CN_VAT_TOTAL 	=$CN_PORT_Share=$CN_CPSP_VAT = 0;
	$html.='	 
	<table class="table0">
		<thead>
			<tr class="tablecenterHead">
				<th class="tablecenterHead">#</th> 
				<th class="tablecenterHead">Date</th> 
				<th style="width:35%;" class="tablecenterHead">Agent Name</th> 
				<th class="tablecenterHead">Ship Name</th> 
				<th class="tablecenterHead">Marine Amount</th>
				<th class="tablecenterHead">SServices Amount</th>
				<th class="tablecenterHead">TOTAL (SAR)</th>
				<th class="tablecenterHead">VAT (SAR)</th>
				<th class="tablecenterHead">TOTAL With VAT (SAR)</th>   
			</tr>
		</thead>
		<tbody> ';
			$query_credit = "SELECT *  FROM `credit` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY. "; ";
			$credits = $dbop->query($query_credit)->fetchAll();   
foreach ($credits as $row) {   
			$InvoiceID	= $row['InvoiceID'];
			$InvoiceDate	= $row['InvoiceDate'];
			$CreditDate	= $row['CreditDate'];
			$AgentID		= intval($row['AgentID']);
			$ShipID		= intval($row['ShipID']);
			$reason		= $row['reason'];
			$MSTOTAL		= floatval($row['MSTOTAL']);  
			$SSTOTAL		= floatval($row['SSTOTAL']);  
			$TOTAL		= floatval($row['TOTAL']);  
			$VAT			= floatval($row['VAT']);  
			$VAT_TOTAL 	= floatval($row['VAT_TOTAL']);  
			$Note		= $row['Note'];   
			$CN_MSTOTAL	=$CN_MSTOTAL	+$MSTOTAL	;
			$CN_SSTOTAL	=$CN_SSTOTAL	+$SSTOTAL	;
			$CN_TOTAL		=$CN_TOTAL	+$TOTAL	;
			$CN_VAT		=$CN_VAT		+$VAT ;
			$CN_VAT_TOTAL 	=$CN_VAT_TOTAL +$VAT_TOTAL ;


			if($VAT>0){$CN_non_VATabl_gross= $CN_non_VATabl_gross+$TOTAL;} 
				else{$CN_VATabl_gross= $CN_VATabl_gross+$TOTAL;} 
				
			$CN_CPSP_VAT 		= floatval(($CPSPercentage*$CN_VAT)  	/100);
			$CN_PORT_VAT 		= floatval(($PortPercentage*$CN_VAT)  /100);
			$CN_CPSP_TotalVAT 	= $CN_CPSP_TotalVAT + $CN_CPSP_VAT  ;
			$CN_PORT_TotalVAT 	= $CN_PORT_TotalVAT +$CN_PORT_VAT  ;
			$CN_CPSP_Share 	= ($CN_TOTAL*$CPSPercentage)  /100;        
			$CN_PORT_Share 	= ($CN_TOTAL*$PortPercentage)  /100;    
			$CN_CPSP_TotalShare = $CN_CPSP_TotalShare + $CN_CPSP_Share  ;
			$CN_PORT_TotalShare = $CN_PORT_TotalShare +$CN_PORT_Share  ; 
			 
			$date1=date_create($InvoiceDate);  
		$query = "SELECT `AgentNameEn`  FROM `agents` WHERE `AgentID`=".$AgentID." LIMIT 1;"; 
			$agents = $dbop->query($query)->fetchAll();   
			foreach ($agents as $row) {   
				$AgentNameEn  =	$row['AgentNameEn']; } 
		$query = "SELECT `ShipName`  FROM `ship` WHERE `ShipID`=".$ShipID." LIMIT 1;"; 
			$ships = $dbop->query($query)->fetchAll();   
			foreach ($ships as $row) {  
				$ShipName 	= 	$row['ShipName'];   } 
				
				$html.= '
				<tr class="tableDay">
					<td class="tableleft">CN-'.$InvoiceID. ' </td>  
					<td class="tableleft">'.date_format($date1,"Y-m-d"). ' </td>  
					<td class="tableleft">'.$AgentNameEn.'  </td>
					<td class="tableleft">'.$ShipName. ' </td>  
					<td  class="tableright">'.number_format($MSTOTAL,2,"."). ' </td> 
					<td  class="tableright">'.number_format($SSTOTAL,2,"."). ' </td> 
					<td  class="tableright">'.number_format($TOTAL,2,"."). ' </td> 
					<td  class="tableright">'.number_format($VAT,2,"."). ' </td> 
					<td  class="tableright">'.number_format($VAT_TOTAL,2,"."). ' </td>     
			</tr>' ; 
 }
$html.= '	<tr class="tableDay">
				<td class="tableleft">  </td>  
				<td class="tableleft"> </td>  
				<td class="tableleft">  </td>
				<td class="tableright">TOTAL</td>  
				<td  class="tableright">'.number_format($CN_MSTOTAL,2,"."). ' </td> 
				<td  class="tableright">'.number_format($CN_SSTOTAL,2,"."). ' </td> 
				<td  class="tableright">'.number_format($CN_TOTAL,2,"."). ' </td> 
				<td  class="tableright">'.number_format($CN_VAT,2,"."). ' </td> 
				<td  class="tableright">'.number_format($CN_VAT_TOTAL,2,"."). ' </td>    
		</tr> 
	</tbody>
	</table>    
	'; 
	
$html.='<div class="page_break"></div>'; $html.='	 
	<table class="table0">
		<tbody  class="tableDay">
			<tr>
				<td style="text-align:center; width:20%  ; height:20px ;">
				<p> 
					<span lang="ar-SA">   
						المملكة العربية السعودية <br>
						'.$CompanyName.' <br>
						<span lang="ar-SA">هـاتف :8696300 013</span>
						<br>
						<span lang="ar-SA">فـاكس :8574202 013</span>      
					</span>
				</p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;">
				<p>
					<span lang="ar-SA"><br>
						<img src="img/'.$companyLogo.'" height="60px">
					</span>
				</p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;"> 
					<span lang="ar-SA"> كشف الفواتير الشهرية<br>
					</span>
					<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
						Monthly Invoice Report  
					</span><br> '.$MonthDate .'   التاريخ
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
				<p>
					<span lang="ar-SA">
						<img src="img/mawani.png" height="70px"> 
					</span>
				</p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
				<p>
					<span style="font-size:8pt" lang="ar-SA">
							المملكة العربية السعودية 
							<br>
						الهيئة العامة للموانئ
						<br>
						'.$port_name.'
						<br>
						www.ports.gov.sa
					</span>
				</p>
				</td>
			</tr>
		</tbody>
	</table>   
	<br><br><br><br><br><br><br>
	<table class="table0">
		<thead>
			<tr class="tablecenterHead"> 
				<th width="65px" class="tablerightMz">Gross With VAT</th> 
				<th width="65px" class="tablerightMz">VAT</th>
 
				<th width="65px" class="tablerightMz">VAT Gross</th>
				<th width="65px" class="tablerightMz">NON-VAT Gross</th>


				<th width="65px"  class="tablerightMz">'.$companySlog.' VAT<br>'.$CPSPercentage.'%</th>
				<th width="65px" class="tablerightMz">Port VAT<br>'.$PortPercentage.'%</th>


				<th width="65px" class="tablerightMz">Amount</th>

				<th width="65px" class="tablerightMz">'.$companySlog.' Share<br>'.$CPSPercentage.'%</th>
				<th width="65px" class="tablerightMz">Port Share<br>'.$PortPercentage.'%</th> 
			</tr>
		</thead> 
		<tbody>
			<tr class="tableDayTotal"> 
					<td class="tableright">'.number_format($TotalInvoice_Table,2,".").' </td>  
					<td class="tableright">'.number_format($TotalInvoice_VAT,2,".").' </td>  

					<td class="tableright">'.number_format($VATabl_gross,2,".").' </td>  
					<td class="tableright">'.number_format($non_VATabl_gross,2,".").' </td> 

					<td class="tableright">'.number_format($CPSP_TotalVAT,2,".").' </td>   
					<td class="tableright">'.number_format($PORT_TotalVAT,2,".").' </td>   
 

					<td class="tableright">'.number_format($TotalInvoice_TOTAL,2,".").' </td> 

					<td class="tableright">'.number_format($CPSP_TotalShare,2,".").' </td> 
					<td class="tableright">'.number_format($PORT_TotalShare,2,".").' </td>    
			</tr>  
			' ;
			 if($CN_TOTAL>0){
				$CPSP_color='#fcb0b7';
				$PORT_color='#A8DBA8';
			$html.='  
			<tr class="tableDayTotal"> 
					<td class="tableright">  - '.number_format($CN_VAT_TOTAL,2,"."). '</td> 
					<td class="tableright">  - '.number_format($CN_VAT,2,".").'</td>  

					<td class="tableright">  - '.number_format($CN_VATabl_gross,2,".").'</td>  
					<td class="tableright">  - '.number_format($CN_non_VATabl_gross,2,".").'</td>
					
					<td class="tableright">  - '.number_format($CN_CPSP_VAT,2,".").'</td>  
					<td class="tableright">  - '.number_format($CN_PORT_VAT,2,".").'</td> 
  
					<td class="tableright">  - '.number_format($CN_TOTAL	,2,".").'</td>  
					 
					<td class="tableright">  - '.number_format($CN_CPSP_Share,2,".").'</td>
					<td class="tableright">  - '.number_format($CN_PORT_Share,2,".").'</td>    
			</tr> 
			<tr class="tableDayTotal"> 
					<td class="tableright">  '.number_format(floatval($TotalInvoice_Table-$CN_VAT_TOTAL),2,"."). '</td> 
					<td class="tableright">  '.number_format(floatval($TotalInvoice_VAT-$CN_VAT),2,".").'</td>  

					<td class="tableright">  '.number_format(floatval($VATabl_gross-$CN_VATabl_gross),2,".").'</td>  
					<td class="tableright">  '.number_format(floatval($non_VATabl_gross-$CN_non_VATabl_gross),2,".").'</td>
					
					<td class="tableright">  '.number_format(floatval($CPSP_TotalVAT-$CN_CPSP_VAT),2,".").'</td>  
					<td class="tableright">  '.number_format(floatval($PORT_TotalVAT-$CN_PORT_VAT),2,".").'</td> 
  
					<td class="tableright">  '.number_format(floatval($TotalInvoice_TOTAL-$CN_TOTAL),2,".").'</td>  
					 
					<td class="tableright">  '.number_format(floatval($CPSP_TotalShare-$CN_CPSP_Share),2,".").'</td>
					<td class="tableright">  '.number_format(floatval($PORT_TotalShare-$CN_PORT_Share),2,".").'</td>    
			</tr> 

			
		</tbody>
	</table>  





	<br><br><br> 
	<br><br><br> 
	<table class="table30">
		<thead>
			<tr class="tablecenterHead">  
				<th   class="tablerightMz">Amount</th>
				<th   class="tablerightMz">VAT</th>  
				<th  class="tablerightMz" style="background: '.$CPSP_color.';">'.$companySlog.' Share<br>'.$CPSPercentage.'%</th>
				<th   class="tablerightMz" style="background: '.$CPSP_color.';">'.$companySlog.' VAT<br>'.$CPSPercentage.'%</th>  
				<th  class="tablerightMz" style="background: '.$PORT_color.';">Port Share<br>'.$PortPercentage.'%</th> 
				<th  class="tablerightMz" style="background: '.$PORT_color.';">Port VAT<br>'.$PortPercentage.'%</th> 
			</tr>
		</thead>   
		' ;
			  }
			  
			  $CELL1 = floatval($TotalInvoice_TOTAL-$CN_TOTAL); 
			  $CELL2 = floatval($TotalInvoice_VAT-$CN_VAT);
			  $CELL3 = floatval($CPSP_TotalShare-$CN_CPSP_Share); 
			  $CELL4 = floatval($CPSP_TotalVAT-$CN_CPSP_VAT);
			  $CELL5 = floatval($PORT_TotalShare-$CN_PORT_Share); 
			  $CELL6 = floatval($PORT_TotalVAT-$CN_PORT_VAT);
			$html.=' 
			<tbody> 
				<tr class="tableDayTotal"> 
					<td class="tableright">'.number_format($CELL1,2,".").' </td>  
					<td class="tableright">'.number_format($CELL2,2,".").' </td>  
					<td class="tableright" style="background: '.$CPSP_color.';">'.number_format($CELL3,2,".").' </td>  
					<td class="tableright"  style="background: '.$CPSP_color.';">'.number_format($CELL4,2,".").' </td>  
					<td class="tableright"  style="background: '.$PORT_color.';">'.number_format($CELL5,2,".").' </td>  
					<td class="tableright"  style="background: '.$PORT_color.';">'.number_format($CELL6,2,".").' </td>  
				</tr>
			</tbody>

		</table>




 <br>';  
/*
##########################################################################################
#############################         FOOTER        ######################################
##########################################################################################
*/
$html.= ' 
<br><br><br><br><br><br><br> 
<br><br><br><br><br><br><br> 
<table  style="width:100%;border-collapse:collapse; " cellpadding="0" cellspacing="0" border="0">
	<tbody>  
			<tr> 	
				<td align=right width=33% " valign="top">
					<span lang="ar-SA" style="font-size:9pt">'.$job_user3.'</span>
				</td> 
				<td align=right width=34%   valign="top">
					<span lang="ar-SA" style="font-size:9pt">'.$job_user2.'</span>
				</td> 
				<td align=right width=33%   valign="top">
					<span lang="ar-SA" style="font-size:9pt">'.$job_user1.'</span>
				</td> 
			</tr>
			<tr> 
				<td align=right width=33%  valign="top">
				<span lang="ar-SA" style="font-size:9pt">'.$name_user3.'</span>
				</td> 
				<td align=right width=34%   valign="top">
				<span lang="ar-SA" style="font-size:9pt">'.$name_user2.'</span>
				</td> 
				<td align=right width=33%   valign="top">
				<span lang="ar-SA" style="font-size:9pt">'.$name_user1.'</span>
				</td> 
			</tr>
			<tr> 
				<td align=right width=33% valign="top"><br> 
					<span lang="ar-SA" style="font-size:9pt">التوقيع : ........................</span>
				</td> 
				<td align=right width=34%   valign="top"><br>  
					<span lang="ar-SA" style="font-size:9pt">التوقيع : ........................</span>
				</td> 
				<td align=right width=33%   valign="top"><br> 
					<span lang="ar-SA" style="font-size:9pt">التوقيع : ........................</span>   
				</td> 
			</tr> 
	</tbody>
</table>   
</body>
</html> ';  
$p = $Arabic->arIdentify($html);
for ($i = count($p)-1; $i >= 0; $i-=2) {
	$utf8ar = $Arabic->utf8Glyphs(substr($html, $p[$i-1], $p[$i] - $p[$i-1]));
	$html   = substr_replace($html, $utf8ar, $p[$i-1], $p[$i] - $p[$i-1]);
}   
$filename =  "Month".strval($YY)."-".strval($MM); 		
$dompdf->loadHtml($html); 
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf -> stream($filename, array("Attachment" => false));
$dompdf->close_object();
$footer = $dompdf->open_object();
$dompdf->add_object($footer, "all");
$dompdf->close_object(); 
?>