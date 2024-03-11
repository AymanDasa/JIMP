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
$html= '';
$i=0;
if(1){ 
	$InvoiceDate= date_format(date_create('2024-3-9'),"Y-m-d" );  
	$TotalInvoice_Table=$TotalInvoice_VAT=$TotalInvoice_TOTAL=$TotalInvoice_MSericeInPrice=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_SSTOTAL=$TotalInvoice_MSTOTAL=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_Anchorage 	= $TotalVAT= 0;
	$SQL = "SELECT * FROM `invoice` WHERE DATE(`InvoiceDate`) = '".$InvoiceDate."' AND `Status`= '800';";  
	$invoices = $dbop->query($SQL)->fetchAll();    
	 }   
$html= ''; 
$pageNumper =1;
$pg =1;
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
		.titele1
		{
			font-size:15px; 
			font-family:Verdana;  
		}
			.titela1
		{
			font-size:18px; 
			text-align: right; 
		}

		.titele1e
		{
			font-size:20px; 
			text-align: right; 
		}

			.labela1
		{
			font-size:13px; 
			text-align: right;
		}
			.labele1
		{
			font-size:13px; 
			font-family:Verdana; 
		}
			.dataa1  
			{
			bordercolor:#B4B4B4;
			font-size:15px; 
			text-align: right;
			font-family:Verdana;
		}
			.datae1  
			{
			bordercolor:#B4B4B4;
			font-size:15px;
			text-align: right;
			font-family:Sans-serif; 
		}
		.dataa1x 
		{
			bordercolor:#B4B4B4;
			font-size:15px; 
			text-align: right;
			float: right;
			display: inline;
		}
		.footer { 
			text-align: center;
			position: fixed;
			} 
		footer:last-child {
			position: fixed;
			left: 100px;
			right: 100px;
			height: 30px;
			width: 50%;
			bottom: 20px;
			margin-bottom: 20px;
		}  
		.tableFoot{
			width: 100%;
			font-family:Verdana;
			border:0px solid #dee2e6;
			padding-right: 2px;
			text-align: right; 
		}
		.sigtable
		{
			position: fixed;
			left: 2px;
			right: 5px;
			height: 30px;
			width: 100%;
			bottom: 20px;
			margin-bottom: 20px;
			border-collapse:collapse;
			cellpadding=0;
			cellspacing=0;
			border=0; 
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
		.tablecenterHead{
			width: 100%;
			cellpadding:0; 
			cellspacing:0;  
			font-family:Verdana;
			border:1px solid #dee2e6; 
			text-align: center;
		}
		.invoicecount{
			font-size:9px; 
			width: 100%;
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
	<main> 
		<table class="table0">
			<tbody  class="tableDay">
				<tr>
					<td style="text-align:center; width:20%  ; height:20px ;">
					<p> <span lang="ar-SA">   
							المملكة العربية السعودية <br>
							'.$CompanyName.' <br>
							<span lang="ar-SA">هـاتف :8696300 013</span>
							<br>
							<span lang="ar-SA">فـاكس :8574202 013</span>      
						</span> </p>
					</td>
					<td style="text-align:center; width:20%  ; height:20px ;">
						<p> <span lang="ar-SA"><br> 
							<img src="img/'.$companyLogo.'" height="70px">  
						</span> </p>
					</td>
					<td style="text-align:center; width:20%  ; height:20px ;"> 
						<span lang="ar-SA"> كشف الفواتير اليومية<br>
						</span>
						<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
							Daily Invoice Report  
						</span><br> '.$InvoiceDate.'   التاريخ
					</td>
					<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
						<p> <span lang="ar-SA">
							<img src="img/mawani.png" height="70px"> 
						</span> </p>
					</td>
					<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
						<p> <span style="font-size:8pt" lang="ar-SA">
							المملكة العربية السعودية 
							<br>
							الهيئة العامة للموانئ
							<br>
							'.$port_name.' 
							<br>
							www.ports.gov.sa
						</span> </p>
					</td>
				</tr>
			</tbody>
		</table>   

		<table class="table0">
			<thead>
			<tr class="tablecenterHead">
					<th width="5%"  >Invoice</th>
					<th width="5%"  >Date</th>
					<th width="15%" >Vessel Name</th>
					<th width="2%"  >GRT</th>
					<th width="20%" >Agent Name</th>
					<th width="5%"  >Gross Amount</th>
					<th width="5%"  >VAT</th>
					<th width="5%"  >Port Share</th>
					<th width="5%"  >Port VAT</th>
					<th width="5%"  >'.$companySlog .' Share</th> 
					<th width="5%"  >'.$companySlog .' VAT</th>  
					<th width="5%"  >Net Amount</th>
			</tr>
			</thead>
			<tbody> '; 
			foreach ($invoices as $invoice) {  
				$pageNumper = $pageNumper + 1; 
				$i=$i+1;  
				$InvoiceID    = $invoice['InvoiceID'];
				$ShipName     = $invoice['ShipName']; 
				$AgentNameEn  = $invoice['AgentNameEn']; 
				$AgentNameAr  = $invoice['AgentNameAr']; 
				$ShipWeight  = $invoice['ShipWeight']; 
				$VAT_TOTAL    = $invoice['VAT_TOTAL'];  
				$TotalInvoice_Table 	=  $TotalInvoice_Table +$VAT_TOTAL ; 
				$VAT    		= $invoice['VAT']; 
				$TotalInvoice_VAT=  $TotalInvoice_VAT +$VAT ; 
				$TOTAL    	= $invoice['TOTAL'];  
				$TotalInvoice_TOTAL=  $TotalInvoice_TOTAL +$TOTAL ; 
				$SSTOTAL    	= $invoice['SSTOTAL'];  
				$TotalInvoice_SSTOTAL=  $TotalInvoice_SSTOTAL +$SSTOTAL ; 
				$MSTOTAL    	= $invoice['MSTOTAL'];  
				$TotalInvoice_MSTOTAL=  $TotalInvoice_MSTOTAL +$MSTOTAL ; 
				$MSericeAnchoragePrice	= $invoice['MSericeAnchoragePrice'];  
				$TotalInvoice_Anchorage=  $TotalInvoice_Anchorage +$MSericeAnchoragePrice ; 
				$MovePortPrice    	= $invoice['MovePortPrice'];  
				$TotalInvoice_MovePortPrice=  $TotalInvoice_MovePortPrice +$MovePortPrice ; 
				$MSericeOutPrice    = $invoice['MSericeOutPrice'];  
				$TotalInvoice_MSericeOutPrice=  $TotalInvoice_MSericeOutPrice +$MSericeOutPrice ; 
				$MSericeInPrice    	= $invoice['MSericeInPrice'];   
				$TotalInvoice_MSericeInPrice=  $TotalInvoice_MSericeInPrice +$MSericeInPrice ; 

				$PortShare =  (floatval($PortPercentage)/100) * floatval($TOTAL); 
				$PortVAT 		 = 	floatval($PortShare) * (floatval($vat)/100)  ;
				$ZamilShare 	 = 	(floatval($ZamilPercentage)/100) *  floatval($TOTAL); 
				$ZamilVAT 	 = 	floatval($ZamilShare) * (floatval($vat)/100);	

				$html.= '<tr class="tableDay">
				
						<td class="tablecenter">'.$InvoiceID.'</td>  
						<td class="tableright">'.$InvoiceDate. ' </td>
						<td class="tableleft">'.$ShipName. ' </td>
						<td class="tableright">'.$ShipWeight.'  </td>
						<td class="tableleft">'.$AgentNameEn.'  </td>
						<td class="tableright">'.number_format($TOTAL,2,".").'  </td>
						<td class="tableright">'.number_format($VAT,2,".").'  </td>
						<td class="tableright">'.number_format($PortShare,2,".").'  </td>
						<td class="tableright">'.number_format($PortVAT,2,".").'  </td>
						<td class="tableright">'.number_format($ZamilShare,2,".").'  </td> 
						<td class="tableright">'.number_format($ZamilVAT,2,".").'   </td>  
						<td class="tableright">'.number_format($VAT_TOTAL,2,".").'  </td>  
					</tr>' ;
					if( ($pageNumper % 22)==0){
					$html.=' </tbody> </table> 
						';$html.=' <div class="page_break"></div>'; $html.='	
		<table class="table0">
			<tbody  class="tableDay">
				<tr>
					<td style="text-align:center; width:20%  ; height:20px ;">
						<p> <span lang="ar-SA">   
							المملكة العربية السعودية <br>
							'.$CompanyName.' <br>
							<span lang="ar-SA">هـاتف :8696300 013</span>
							<br>
							<span lang="ar-SA">فـاكس :8574202 013</span>      
							</span><small></p>
					</td>
					<td style="text-align:center; width:20%  ; height:20px ;">
						<p> <span lang="ar-SA"><br> 
							<img src="img/'.$companyLogo.'" height="70px">  
						</span> </p>
					</td>
						<td style="text-align:center; width:20%  ; height:20px ;"> 
							<span lang="ar-SA"> كشف الفواتير اليومية<br>
							</span>
							<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
								Daily Invoice Report  
							</span><br> '.$InvoiceDate.'   التاريخ
						</td>
					<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
						<p> <span lang="ar-SA">
							<img src="img/mawani.png" height="70px"> 
						</span> </p>
					</td>
					<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
						<p> <span style="font-size:8pt" lang="ar-SA">
							المملكة العربية السعودية 
							<br>
							الهيئة العامة للموانئ
							<br>
							'.$port_name.' 
							<br>
							www.ports.gov.sa
						</span> </p>
					</td>
				</tr>
			</tbody>
		</table> 	

		<table class="table0">
			<thead>
				<tr class="tablecenterHead">
							<th width="5%"  >Invoice</th>
							<th width="5%"  >Date</th>
							<th width="15%" >Vessel Name</th>
							<th width="2%"  >GRT</th>
							<th width="20%" >Agent Name</th>
							<th width="5%"  >Gross Amount</th>
							<th width="5%"  >VAT</th>
							<th width="5%"  >Port Share</th>
							<th width="5%"  >Port VAT</th>
							<th width="5%"  >'.$companySlog .' Share</th> 
							<th width="5%"  >'.$companySlog .' VAT</th>  
							<th width="5%"  >Net Amount</th>
				</tr>
			</thead>
			<tbody> '; }
					}
					$html.= '
				<tr class="tableDayTotal"   ">
						<td class="tablecenter">'.$InvoiceID.'</td>  
						<td class="tableright">'.$InvoiceDate. ' </td>
						<td class="tableleft">'.$ShipName. ' </td>
						<td class="tableright">'.$ShipWeight.'  </td>
						<td class="tableleft">'.$AgentNameEn.'  </td>
						<td class="tableright">'.number_format($TOTAL,2,".").'  </td>
						<td class="tableright">'.number_format($VAT,2,".").'  </td>
						<td class="tableright">'.number_format($PortShare,2,".").'  </td>
						<td class="tableright">'.number_format($PortVAT,2,".").'  </td>
						<td class="tableright">'.number_format($ZamilShare,2,".").'  </td> 
						<td class="tableright">'.number_format($ZamilVAT,2,".").'   </td>  
						<td class="tableright">'.number_format($VAT_TOTAL,2,".").'  </td>   
				</tr>   ';  
				$html.= '
			</tbody>
		</table>  

		<table dir="ltr" class="sigtable">
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
		';
		 
		$PortShare 	=  (floatval($PortPercentage)/100) * floatval($TotalInvoice_TOTAL); 
		$PortVAT 		=  floatval($PortShare) * floatval($vat)  ;
		$ZamilShare 	=  (floatval($ZamilPercentage)/100) * floatval($TotalInvoice_TOTAL) ;
		$ZamilVAT 	=  floatval($ZamilShare) * floatval($vat);		 
		
		$html.='
		';$html.=' <div class="page_break"></div>'; $html.='
		<table class="table0">
		<tbody  class="tableDay">
			<tr>
				<td style="text-align:center; width:20%  ; height:20px ;">
				<p> <span lang="ar-SA">   
						المملكة العربية السعودية <br>
						'.$CompanyName.' <br>
						<span lang="ar-SA">هـاتف :8696300 013</span>
						<br>
						<span lang="ar-SA">فـاكس :8574202 013</span>      
					</span> </p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;">
					<p> <span lang="ar-SA"><br> 
						<img src="img/'.$companyLogo.'" height="70px">  
					</span> </p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;"> 
					<span lang="ar-SA"> كشف الفواتير اليومية<br>
					</span>
					<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
						Daily Invoice Report  
					</span><br> '.$InvoiceDate.'   التاريخ
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
					<p> <span lang="ar-SA">
						<img src="img/mawani.png" height="70px"> 
					</span> </p>
				</td>
				<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
					<p> <span style="font-size:8pt" lang="ar-SA">
						المملكة العربية السعودية 
						<br>
						الهيئة العامة للموانئ
						<br>
						'.$port_name.' 
						<br>
						www.ports.gov.sa
					</span> </p>
				</td>
			</tr>
		</tbody>
	</table> 
 
	   <table   class="ter" width="100%"> 
	   	<thead> 
	   		<tr> 
			   <th class="ther" width="11%"><span lang="ar-SA" style="font-size:12px"> أجور الإرشاد </span><br>PILOTAGE & SHIFTING</th> 
			   <th class="ther" width="11%"><span lang="ar-SA" style="font-size:12px"> أجور الرصيف </span><br>BEARTH CHARGES</th>
			   <th class="ther" width="11%"><span lang="ar-SA" style="font-size:12px"> أجور المخطاف </span><br>ANCHORE CHARGES</th>
			   <th class="ther" width="11%"><span lang="ar-SA" style="font-size:12px"> خدمات أخرى </span><br>OTHER SERVICES</th>
			   <th class="ther" width="15%"><span lang="ar-SA" style="font-size:12px"> ألإجمالي </span><br>TOTAL</th>
			   <th class="ther" width="15%"><span lang="ar-SA" style="font-size:12px"> حصة الميناء </span><br>PORT SHARE</th>
			   <th class="ther" width="15%"><span lang="ar-SA" style="font-size:12px"> حصة الشركة </span><br>ZOSCO SHARE</th>
			 </tr> 
	 	</thead>  
	   	<tbody>
	   
		   	<tr>
			 	<td rowspan="2" class="tderc" width="11%" style="padding: 15px;text-align:center"><span lang="ar-SA" style="font-size:15px">  <br>ر.س </span></td> 
				<td rowspan="2" class="tderc" width="11%" style="padding: 15px;text-align:center"><span lang="ar-SA" style="font-size:15px"> <br>ر.س </span></td> 
				<td rowspan="2" class="tderc" width="11%" style="padding: 15px;text-align:center"><span lang="ar-SA" style="font-size:15px">  <br>ر.س </span></td> 
				<td rowspan="2" class="tderc" width="11%" style="padding: 15px;text-align:center"><span lang="ar-SA" style="font-size:15px">  <br>ر.س</span></td> 
				<td rowspan="2" class="tderc" width="15%" style="padding: 15px;text-align:center"><span lang="ar-SA" style="font-size:15px">  <br>ر.س</span></td> 
				<td class="tderc" width="15%" style="padding: 15px;text-align:center"><div style="font-size:15px">'.number_format($PortPercentage,2 ,',')  .'% </div></td> 
				<td class="tderc" width="15%" style="padding: 15px;text-align:center"><div style="font-size:15px">'.number_format($ZamilPercentage,2 ,',')  .'% </div></td> 
		   	</tr> 
			<tr>
		   <td class="tderc" width="15%" style="padding: 15px;text-align:center"><span lang="ar-SA" style="font-size:15px">'. number_format($PortShare ) .' <br>ر.س </span></td>
		   <td class="tderc" width="15%" style="padding: 15px;text-align:center"><span lang="ar-SA" style="font-size:15px">'.number_format( $ZamilShare ) .' <br>ر.س </span></td> 
		 </tr>
		</tbody>
	   </table>  
	</main> 
	<footer>  

	</footer> 
</body>
</html> ';  

 

$p = $Arabic->arIdentify($html);
for ($i = count($p)-1; $i >= 0; $i-=2) {
	$utf8ar = $Arabic->utf8Glyphs(substr($html, $p[$i-1], $p[$i] - $p[$i-1]));
	$html   = substr_replace($html, $utf8ar, $p[$i-1], $p[$i] - $p[$i-1]);
}  
$Iday = date("Ymd", strtotime($InvoiceDate));
$filename =  "D_".strval($Iday);			
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf -> stream($filename, array("Attachment" => false));
$dompdf->close_object();
$footer = $dompdf->open_object();
$dompdf->add_object($footer, "all");
$dompdf->close_object();

?>