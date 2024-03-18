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
if(isset($_GET['InvoiceDate'])){ 
	$InvoiceDate= date_format(date_create($_GET['InvoiceDate']),"Y-m-d" );  
	$TotalInvoice_Table=$TotalInvoice_VAT=$TotalInvoice_TOTAL=$TotalInvoice_MSericeInPrice=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_SSTOTAL=$TotalInvoice_MSTOTAL=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_Anchorage 	= $TotalVAT= 0;
	$SQL = "SELECT * FROM `invoice` WHERE DATE(`InvoiceDate`) = '".$InvoiceDate."';";  
	$invoices = $dbop->query($SQL)->fetchAll();    
	 }  
$html= ''; 
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
						.footer {
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
						 .tablecenterCN{
							color:red;
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
						 .tablerightCN{
							font-family:Verdana;
							border:1px solid #dee2e6;
							padding-right: 2px;
							padding-top: 4px;
							padding-bottom: 4px;
							text-align: right;
							color:red;
						 }
						 

						 .tablecenterHead{
							width: 100%;
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
							width: 100%;
							font-family:Verdana;
							border:0px solid #dee2e6;
							padding-right: 2px;
							padding-bottom: 4px;
							text-align: right; 
						 }

						</style>

</head>
<body>  
	<section class="content">
		<div class="container-fluid">
			<div class="row">  
				<div class="col-12">
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
										<img src="img/'.$companyLogo.'" height="70px">  
									</span>
								</p>
								</td>
								<td style="text-align:center; width:20%  ; height:20px ;"> 
									<span lang="ar-SA"> كشف الفواتير اليومية<br>
									</span>
									<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
										Daily Invoice Report  
									</span><br> '.$InvoiceDate.'   التاريخ
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


					<table class="table0">
						<thead>
							<tr class="tablecenterHead"> 
								<th width="8%"  class="tablecenterHead"> Invoice#  </th>  
								<th width="10%" class="tablecenterHead"> Vessel </th>
								<th width="10%" class="tablecenterHead"> Araval </th>
								<th width="10%" class="tablecenterHead"> Departure </th>
								<th width="10%" class="tablecenterHead"> Port Fees </th>
								<th width="10%" class="tablecenterHead">Anchorage  </th> 
								<th width="10%" class="tablecenterHead">Marine S.</th>
								<th width="10%" class="tablecenterHead">Special S.</th>
								<th width="10%" class="tablecenterHead">Total</th>
								<th width="10%" class="tablecenterHead">VAT</th>
								<th width="10%" class="tablecenterHead">Total with VAT</th>



							</tr>
						</thead>
						<tbody> 
						';


foreach ($invoices as $invoice) {   
	$i=$i+1;  
	$InvoiceID    = $invoice['InvoiceID'];
	$ShipName     = $invoice['ShipName']; 
	$AgentNameEn  = $invoice['AgentNameEn']; 
	$AgentNameAr  = $invoice['AgentNameAr']; 
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
	$Status    	= $invoice['Status'];   
	$TotalInvoice_MSericeInPrice=  $TotalInvoice_MSericeInPrice +$MSericeInPrice ; 
	if($Status==0){
		$invoiceStart='CN-'; 
		$fontRed='CN';
	}else{
		$invoiceStart=$orginalinvoiceStart;  
		$fontRed='';
	}
	$html.= '<tr class="tableDay">
			
			<td class="tablecenter'.$fontRed.'">'.$invoiceStart.$InvoiceID. '</td>  
			<td class="tableleft">'.$ShipName.' </td>   
			<td class="tableright'.$fontRed.'">'.number_format($MSericeInPrice,2,".").'  </td>  
			<td class="tableright'.$fontRed.'">'.number_format($MSericeOutPrice,2,".").'  </td> 
			<td class="tableright'.$fontRed.'">'.number_format($MovePortPrice,2,".").'  </td> 
			<td class="tableright'.$fontRed.'">'.number_format($MSericeAnchoragePrice,2,".").'  </td> 
			<td class="tableright'.$fontRed.'">'.number_format($MSTOTAL,2,".").'  </td> 
			<td class="tableright'.$fontRed.'">'.number_format($SSTOTAL,2,".").'  </td> 
			<td class="tableright'.$fontRed.'">'.number_format($TOTAL,2,".").'  </td> 
			<td class="tableright'.$fontRed.'">'.number_format($VAT,2,"."). ' </td> 
			<td class="tableright'.$fontRed.'">'.number_format($VAT_TOTAL,2,"."). ' </td>

		</tr>' ;
}
 
$html.= '<tr class="tableDayTotal"   ">
		<td class="invoicecount"> 
			عدد الفواتير  '.$i.'
		</td>  
		<td class="tableDayTotal">  </td> 
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_MSericeInPrice,2,".").' </b></td> 
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_MSericeOutPrice,2,".").' </b></td> 
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_MovePortPrice,2,".").' </b></td>
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_Anchorage,2,".").' </b></td>  
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_MSTOTAL,2,".").' </b></td> 
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_SSTOTAL,2,".").' </b></td> 
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_TOTAL,2,".").' </b></td>
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_VAT,2,".").' </b></td>
		<td class="tableDayTotal"><b>'.number_format($TotalInvoice_Table,2,".").' </b></td>  
	</tr>   ';  
$html.= '
						</tbody>
					</table> 



				</div>
			</div>
		</div> 
	</section>


 <br>

	<table  class="tableFoot">
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
						
					<td align=right width=33% valign="top"><br><br><br>
						<span lang="ar-SA" style="font-size:9pt">التوقيع : ........................</span>
					</td> 
					<td align=right width=34%   valign="top"><br><br><br>
						<span lang="ar-SA" style="font-size:9pt">التوقيع : ........................</span>
					</td> 
					<td align=right width=33%   valign="top"><br><br><br>
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
$Iday = date("Ymd", strtotime($InvoiceDate));
$filename = strval($InvoiceID)."_".strval($Iday);			
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf -> stream($filename, array("Attachment" => false));
$dompdf->close_object();
$footer = $dompdf->open_object();
$dompdf->add_object($footer, "all");
$dompdf->close_object();

?>