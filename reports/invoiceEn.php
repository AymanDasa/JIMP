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
	function D0D($myText)
		{ 
		    $dateTime = DateTime::createFromFormat("Y/m/d", $myText); 
		    if ($dateTime !== false) { 
			   $year = (int)$dateTime->format("Y"); 
			   if ($year < 2000) {return false; } else { return True;} } else { return false; }
		}
		
	if(isset($_GET['id'])) {		
		$InvoiceID=$_GET['id']; 
		$query = "SELECT *  FROM `invoice` WHERE `InvoiceID`=".$InvoiceID." ;"; 
		$invoicevs = $dbop->query($query)->fetchAll();   
		foreach ($invoicevs as $invoicev) {   
		  $ShipID=$invoicev['ShipID'];
		  $ShipName=$invoicev['ShipName'];
		  $ShipWeight=$invoicev['ShipWeight'];
		  $AgentID=$invoicev['AgentID'];
		  $AgentNameAr=$invoicev['AgentNameAr'];
		  $AgentNameEn=$invoicev['AgentNameEn'];
		  $ServiceType=$invoicev['ServiceType'];
		  $ServiceTypeName=$invoicev['ServiceTypeName'];
		  $ServiceTypeFactor=$invoicev['ServiceTypeFactor'];
		  $InvoiceDate=$invoicev['InvoiceDate'];
		  $InvoiceDateT=$invoicev['InvoiceDateT'];
		  $InvoiceDateH=$invoicev['InvoiceDateH'];
		  $ArrivalDate=$invoicev['ArrivalDate'];
		  $ArrivalDateT=$invoicev['ArrivalDateT'];
		  $ArrivalDateH=$invoicev['ArrivalDateH'];
		  $DepartureDate=$invoicev['DepartureDate'];
		  $DepartureDateT=$invoicev['DepartureDateT'];
		  $DepartureDateH=$invoicev['DepartureDateH'];
		  $PeriodDays=$invoicev['PeriodDays'];
		  $AnchorageEntry=$invoicev['AnchorageEntry'];
		  $AnchorageEntryT=$invoicev['AnchorageEntryT'];
		  $AnchorageEntryH=$invoicev['AnchorageEntryH'];
		  $AnchorageLeave=$invoicev['AnchorageLeave'];
		  $AnchorageLeaveT=$invoicev['AnchorageLeaveT'];
		  $AnchorageLeaveH=$invoicev['AnchorageLeaveH'];
		  $AnchorageDays=$invoicev['AnchorageDays'];
		  $MSericeAnchoragePrice=$invoicev['MSericeAnchoragePrice'];
		  $MovePort1=$invoicev['MovePort1'];
		  $MovePort2=$invoicev['MovePort2'];
		  $MovePort3=$invoicev['MovePort3'];
		  $TripNo=$invoicev['TripNo'];
		  $DockingNo=$invoicev['DockingNo'];
		  $RouteNo=$invoicev['RouteNo'];
		  $ShiftedNo=$invoicev['ShiftedNo'];
		  $Reason=$invoicev['Reason'];
		  $Note=$invoicev['Note'];
		  $MSFraction1=$invoicev['MSFraction1'];
		  $MSFraction2=$invoicev['MSFraction2'];
		  $MSFraction3=$invoicev['MSFraction3'];
		  $MService1=$invoicev['MService1'];
		  $MService2=$invoicev['MService2'];
		  $MService3=$invoicev['MService3'];
		  $CA0=$invoicev['CA0'];
		  $CA1=$invoicev['CA1'];
		  $CA2=$invoicev['CA2'];
		  $CA3=$invoicev['CA3'];
		  $MSericeInPrice=$invoicev['MSericeInPrice'];
		  $CB0=$invoicev['CB0'];
		  $CB1=$invoicev['CB1'];
		  $CB2=$invoicev['CB2'];
		  $CB3=$invoicev['CB3'];
		  $MSericeOutPrice=$invoicev['MSericeOutPrice'];
		  $MA=$invoicev['MA'];
		  $MA0=$invoicev['MA0'];
		  $MA1=$invoicev['MA1'];
		  $MA2=$invoicev['MA2'];
		  $MA3=$invoicev['MA3'];
		  $MB=$invoicev['MB'];
		  $MB0=$invoicev['MB0'];
		  $MB1=$invoicev['MB1'];
		  $MB2=$invoicev['MB2'];
		  $MB3=$invoicev['MB3'];
		  $MC=$invoicev['MC'];
		  $MC0=$invoicev['MC0'];
		  $MC1=$invoicev['MC1'];
		  $MC2=$invoicev['MC2'];
		  $MC3=$invoicev['MC3'];
		  $MovePortPrice=$invoicev['MovePortPrice'];
		  $MSericeBathPrice=$invoicev['MSericeBathPrice'];
		  $MSNote1=$invoicev['MSNote1'];
		  $MSNote2=$invoicev['MSNote2'];
		  $MSNote3=$invoicev['MSNote3'];
		  $MGPrice=$invoicev['MGPrice'];
		  $MSTOTAL=$invoicev['MSTOTAL'];
		  $SService1=$invoicev['SService1'];
		  $SService2=$invoicev['SService2'];
		  $SService3=$invoicev['SService3'];
		  $SService4=$invoicev['SService4'];
		  $SService5=$invoicev['SService5'];
		  $SSName1=$invoicev['SSName1'];
		  $SSName2=$invoicev['SSName2'];
		  $SSName3=$invoicev['SSName3'];
		  $SSName4=$invoicev['SSName4'];
		  $SSName5=$invoicev['SSName5'];
		  $SSNote1=$invoicev['SSNote1'];
		  $SSNote2=$invoicev['SSNote2'];
		  $SSNote3=$invoicev['SSNote3'];
		  $SSNote4=$invoicev['SSNote4'];
		  $SSNote5=$invoicev['SSNote5'];
		  $SSUnit1=$invoicev['SSUnit1'];
		  $SSUnit2=$invoicev['SSUnit2'];
		  $SSUnit3=$invoicev['SSUnit3'];
		  $SSUnit4=$invoicev['SSUnit4'];
		  $SSUnit5=$invoicev['SSUnit5'];
		  $SSQut1=$invoicev['SSQut1'];
		  $SSQut2=$invoicev['SSQut2'];
		  $SSQut3=$invoicev['SSQut3'];
		  $SSQut4=$invoicev['SSQut4'];
		  $SSQut5=$invoicev['SSQut5'];
		  $SSUPrice1=$invoicev['SSUPrice1'];
		  $SSUPrice2=$invoicev['SSUPrice2'];
		  $SSUPrice3=$invoicev['SSUPrice3'];
		  $SSUPrice4=$invoicev['SSUPrice4'];
		  $SSUPrice5=$invoicev['SSUPrice5'];
		  $SSPrice1=$invoicev['SSPrice1'];
		  $SSPrice2=$invoicev['SSPrice2'];
		  $SSPrice3=$invoicev['SSPrice3'];
		  $SSPrice4=$invoicev['SSPrice4'];
		  $SSPrice5=$invoicev['SSPrice5'];
		  $SSTOTAL=$invoicev['SSTOTAL'];
		  $TOTAL=$invoicev['TOTAL'];
		  $is_VAT=$invoicev['is_VAT'];
		  $VAT=$invoicev['VAT'];
		  $VAT_TOTAL=$invoicev['VAT_TOTAL']; 
		  $Status=intval($invoicev['Status']);  
		  $OracleCode=$invoicev['OracleCode'];  
	$ArrivalDate0 = intval(date('Y', strtotime($ArrivalDateH)));
	if($ArrivalDate0<1444){$ArrivalDateH='';}  
	$DepartureDateH0 = intval(date('Y', strtotime($DepartureDateH)));
	if($DepartureDateH0<1444){$DepartureDateH='';} 


		} 
	}else{exit();} // exit(); 
	$CreditNote = '';
	if($Status==0){
		$invoiceStart="CN-";
		$query_credit="SELECT * FROM `credit` WHERE `InvoiceID` =".$InvoiceID." LIMIT 1";
		$credits = $dbop->query($query_credit)->fetchAll();   
		foreach ($credits as $row) {
			$reason=$row['reason'];	
			$CreditDate=$row['CreditDate'];	
		}
		$CreditNote = "CN-".$InvoiceID." Reason: ".$reason . " ON ".$CreditDate;
	}
	// QR FUNCTION
 
	// code by meYnot
	function zatca_base64_tlv_encode($seller_name, $vat_registration_number, $invoice_datetime, $invoice_amount, $invoice_tax_amount)
	{
	    $result = chr(1) . chr( strlen($seller_name) ) . $seller_name;
	    $result.= chr(2) . chr( strlen($vat_registration_number) ) . $vat_registration_number;
	    $result.= chr(3) . chr( strlen($invoice_datetime) ) . $invoice_datetime;
	    $result.= chr(4) . chr( strlen($invoice_amount) ) . $invoice_amount;
	    $result.= chr(5) . chr( strlen($invoice_tax_amount) ) . $invoice_tax_amount;
	    return base64_encode($result);
	}
 
    $query = "SELECT *  FROM `agents` WHERE `AgentID`=".$AgentID." LIMIT 1;"; 
    $ships = $dbop->query($query)->fetchAll();   
    foreach ($ships as $ship) {  $AgentVAT =$ship['AgentCR'];  }


	// 
	include_once('../../phpqrcode/qrlib.php');
	 
	$QR= zatca_base64_tlv_encode(  
	    'Western Coast Port Services','311940454500003',$InvoiceDate,   $TOTAL,   $VAT); 
	QRcode::png($QR, '../../phpqrcode/invoiceQR.png','S' ,2, 0);  
	// END QR FUNCTION
	$MovePortName='';
	if($MovePort1!=''){$MovePortName=$MovePort1;} 
	if($ShipWeight<3000){$txtAncor="Less than";}else { $txtAncor="More than";}
			$html='
			<html>
    <head>
        <style> 
            @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 10px;
                margin-left: 10px;
                margin-right: 10px;
                margin-bottom: 10px;
            }
 
            header {
                position: fixed;
                top: 10px; 
                left: 10px; 
                right:10px;   
            } 
            footer {
                position: fixed; 
                bottom: 10px; 
                left: 10px;
                right: 10px;
 
            }
		  main{
			width:100%;
		  }
		  .labele1s{
			font-size:10px;
		  }
		  .labele_l{
			text-align: left;
		  }
		  .labele_r{
			text-align: right;
		  }
		  .labele_c{
			text-align: center;
		  }
		  .labele_j{
			text-align:  justify;
		  }
        </style>
    </head>
    <body> 
		<header>
			
			<table  cellpadding="0" cellspacing="0" border="1" width=100%    class="table0">
				<tr>		
				<td align=center width=20%  style="border-right-style:hidden" height="20" valign="middle">
					<p>	
						<span lang="ar-SA" style="font-size:8pt">   
						'.$AdressCompanyEN.' 
						</span>
					</p>
				</td>
				<td align=center width=20% valign="middle" style="border-right-style:hidden">
					<p>
						<span lang="ar-SA">
							<img src="img/'.$companyLogo.'" height="50px">
						</span>
					</p>
				</td>
				<td align=center width=20% height="20" valign="middle" style="border-right-style:hidden">
';	
if($Status==0){
$html.='	
 <br>
 <span dir="ltr" style="font-size:12pt;color:red;">CREDIT NOTE</span>
						<br>

';}else{
$html.='						
						<span lang="ar-SA"> Invoice </span><br>
					
';}
$html.='						
						<span dir="ltr" style="font-size:12pt;font-family:DejaVuSansCondensed;color:red;language:en-US;direction:ltr;
				unicode-bidi:embed" lang="en-US">'.$invoiceStart.$InvoiceID.' </span> 
				<br> <span lang="ar-SA" style="font-size:8pt">   VAT : '.$company_vat.' </span>
				</td>
				<td align=center width=20% height="65" valign="middle" style="border-right-style:hidden">
					<p>
						<span lang="ar-SA">
							<img src="img/mawani.png" height="55px"> 
						</span>
					</p>
				</td>
				<td align=center width=20% height="20" valign="middle" >
					<p>
							<span style="font-size:8pt" lang="ar-SA">
                            Kingdom Of Saudi Arabia	 <br>
                            Saudi Ports Authority <br>
						    '.$port_nameEn.'<br>
					        www.ports.gov.sa
							</span>
					</p>
					</td>
				</tr>
			</table> 
		</header> 
		';
/*
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ######################################        footer Information      #################################### 
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ##########################################################################################################   
*/ 
$html.='
		<footer> 
            <table dir="ltr" width=100% style="border-collapse:collapse; z-index:4" cellpadding="0" cellspacing="0" border="0">
                <tbody>  
                        <tr>
                                
                            <td align=right width=33% " valign="top">
                                <span lang="ar-SA" style="font-size:9pt">'.$job_user3En.'</span>
                            </td> 
                                <td align=right width=34%   valign="top">
                            <span lang="ar-SA" style="font-size:9pt">'.$job_user2En.'</span>
                            </td> 
                            <td align=right width=33%   valign="top">
                                <span lang="ar-SA" style="font-size:9pt">'.$job_user1En.'</span>
                            </td> 
                        </tr>
                        <tr>
                                
                            <td align=right width=33%  valign="top">
                            <span lang="ar-SA" style="font-size:9pt">'.$name_user3En.'</span>
                            </td> 
                            <td align=right width=34%   valign="top">
                            <span lang="ar-SA" style="font-size:9pt">'.$name_user2En.'</span>
                            </td> 
                            <td align=right width=33%   valign="top">
                            <span lang="ar-SA" style="font-size:9pt">'.$name_user1En.'</span>
                            </td> 
                        </tr>
                        <tr>
                                
                            <td align=right width=33% valign="top"><br> 
                                <span lang="ar-SA" style="font-size:9pt">Signatures : ........................</span>
                            </td> 
                            <td align=right width=34%   valign="top"><br>  
                                <span lang="ar-SA" style="font-size:9pt">Signatures : ........................</span>
                            </td> 
                            <td align=right width=33%   valign="top"><br> 
                                <span lang="ar-SA" style="font-size:9pt">Signatures : ........................</span>
                                
                            </td> 
                        </tr>
                    
                </tbody>
            </table>  
		  <br>
			<table dir="ltr"   style="border-collapse:collapse; height:100px; width:100%; z-index:4; cellpadding:0; cellspacing:0; border:0;">
				<tbody> 
					<tr  style="font-size:8px;  border-top: solid; border-top-width: thin;"> 	 	
						<td align=left width=50%">'.$footerEN.'</td>  
						<td align=right width=50%">'.$footerAR.'</td> 
					<tr>
				</tbody>
			</table> 
		</footer>';
/*
########################################################################################################## 
########################################################################################################## 
########################################################################################################## 
########################################################################################################## 
########################################       main  Information      ################################# 
########################################################################################################## 
########################################################################################################## 
########################################################################################################## 
##########################################################################################################   
*/ 


$html.='
<main>         
<div><span style="font-size:60.0pt">&nbsp;</span></div>
<table dir="ltr" width=100% style="border-collapse:collapse; z-index:4" cellspacing="1" border="1">
	<tbody>
		<tr>
			
			<td  class="labele_l" width=12% valign="middle" 	>
				<span lang="ar-SA" >Invoice Date </span><br> 
			</td> 
			<td class="labele_c"  width=24% valign="middle" 	>'; 
				if(D0D(date("Y/m/d", strtotime($InvoiceDate)))){
				$html.='
					 '.date("Y/m/d", strtotime($InvoiceDate)). '&nbsp;&nbsp;   &nbsp;'. date("H:i", strtotime($InvoiceDate)) .' <br>
				';}
				$html.='			
			</td> 
			<td  class="labele_l"  width=36% valign="middle" style="border-bottom-style: hidden;">
				<span lang="ar-SA" class="labela1">&nbsp;Agent Name &nbsp;      </span><br>
		 
			</td>
			<td  class="labele_l"  width=29% valign="middle" style="border-bottom-style: hidden;">
				<span lang="ar-SA" class="labela1"> &nbsp;Vessel Name &nbsp;  </span><br>
				 
			</td>
		 </tr>
		 <tr>

		 	
		 	<td class="labele_l"  valign="middle"> 
				<span lang="en-US" class="labele1">Sytem No.&nbsp;&nbsp;</span>
			</td>
			<td class="labele_c" valign="middle"> 
 				<span lang="en-US" class="labele1"> '.$invoiceStart.$InvoiceID.'</span> 
			  </td> 

			  <td align=center   height="30pt" valign="middle">
				<span lang="ar-SA" class="labela1"> '.$AgentNameEn.'</span><br>
				<span lang="en-US" class="labele1">'.$AgentNameAr.'</span> <br>
				<span lang="en-US" class="labele1s">'.$AgentVAT.'</span> 
			  </td>	
			  <td align=center  height="30pt" valign="middle">
				  <p >  <span lang="en-US" class="labele1">&nbsp;&nbsp;'.$ShipName.'&nbsp;&nbsp;</span></p>
			  </td>
		 </tr>
	</tbody>
</table> 
<div><span style="font-size:3pt">&nbsp;</span></div>
<style>
.p10pt{
	padding-top: 5px;
	padding-bottom: 5px; 
}
</style>
<table dir="ltr" width=100% style="border-collapse:collapse;z-index:4" cellspacing="1" border="1">
	<tbody>
		<tr> 
			<td class="labele_l p10pt" width=15%> 
				<span lang="en-US" class="labele1">Arrival Date</span> 
			</td>
			<td  class="labele_c p10pt" width=25%>
			';
				if(D0D(date("Y/m/d", strtotime($ArrivalDate)))){
				$html.='
				'.date("Y/m/d", strtotime($ArrivalDate)).'&nbsp;&nbsp;   &nbsp;'.date("H:i", strtotime($ArrivalDate)).'  
				';}
				$html.='	
				  	 
			</td> 
			<td class="labele_l p10pt"  width=25%> 
				<span lang="en-US" class="labele1">G.R.T.</span> 
			</td> 
			<td class="labele_c p10pt" width=8%>
				<span lang="ar-SA" class="labela1">&nbsp;'.$ShipWeight.'&nbsp;&nbsp; </span> 
			</td>
			
			<td class="labele_l p10pt"  width=16% valign="middle"> 
				<span lang="en-US" class="labele1" >Trip No</span> 
			</td>
			<td  class="labele_c p10pt" width=10% valign="middle">
				<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$TripNo.'&nbsp;&nbsp; </span>&nbsp; 
			</td> 
		</tr>
		<tr> 
			<td   class="labele_l p10pt"> 
				<span lang="en-US"class="labele1">Departure Date</span> 
			</td>  
			<td   class="labele_c p10pt">';
				if(D0D(date("Y/m/d", strtotime($DepartureDate)))){
				$html.='
				'.date("Y/m/d", strtotime($DepartureDate)).'&nbsp;&nbsp;   &nbsp;'.date("H:i", strtotime($DepartureDate)).'
				';}
				$html.='	 		
			</td> 
			<td    class="labele_l p10pt"> 
				<span lang="en-US" class="labele1">Period Days</span> 
			</td> 
			<td class="labele_c p10pt" >
				<span lang="ar-SA" class="labela1">&nbsp;'.X0X(number_format($PeriodDays)).'&nbsp;&nbsp; </span> 
			</td> 
			<td class="labele_l p10pt"> 
				<span lang="en-US" class="labele1">Docking Berth No</span> 
			</td> 
			<td class="labele_c p10pt">
				<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$DockingNo.'&nbsp;&nbsp; </span> 
			</td>  
		</tr>
		<tr>  
			<td class="labele_l p10pt">
				<span lang="en-US" class="labele1"> Shifted Bath No</span> 
			</td> 
			<td class="labele_l p10pt">
				<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$MovePortName.'&nbsp;&nbsp; </span> 
			</td> 
			<td class="labele_l p10pt">
				<span lang="en-US" class="labele1">Anchorage Days</span> 
			</td> 
			<td class="labele_c p10pt" >
				<span lang="ar-SA" class="labela1">&nbsp;'.X0X(number_format($AnchorageDays)).'&nbsp;&nbsp; </span> 
			</td> 
			<td class="labele_l p10pt" >
				  '.$EmptyLineEn.'  
			</td>  
			<td  class="labele_c p10pt">
				<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$RouteNo.'&nbsp;&nbsp; </span> 
			</td> 
		</tr> 
	</tbody>
</table>

'; 
if(intval($MSTOTAL)>0){ 
/*
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ####################################        General Marine Services     ################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ##########################################################################################################  

*/ 
$html.=' 

<div><span style="font-size:2pt">&nbsp;</span></div>

<table  style="width:100%; border-collapse:collapse; z-index:4" cellspacing="1" border="1">
  	<tbody>
    		<tr>
    			<td colspan="7" align=center valign="middle"> 
				<span lang="en-US" class="titele1e" > General Marine Services </span>
			</td>
  		</tr>
  		<tr> 
			<td rowspan="2" align=center valign="middle" ><span lang="ar-SA" class="labela1">G.R.T.</span></td> 
			<td colspan="5" align=center valign="middle"><span lang="ar-SA" class="labela1">pilotage </span></td>
    			<td width=17% rowspan="6" align=center valign="middle"> &nbsp;</td>
		</tr>
		<tr>
			
			<td align=center valign="middle"><span lang="ar-SA" class="labela1">Arrival Fees</span></td>
			<td align=center valign="middle"><span lang="ar-SA" class="labela1">Departure Fees</span></td>
			<td colspan="3" align=center valign="middle"><span lang="ar-SA" class="labela1">Transferring from one wharf to another</span></td>
			
		</tr>
		<tr>
			<td width=18% align=right valign="middle">&nbsp;<span lang="ar-SA" class="labela1">500 or less</span></td> 
			<td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CA0, 2,'.')).'</span></td> 
			<td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CB0, 2,'.')).'</span></td> 
			<td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MA0, 2,'.')).'</span></td> 
			<td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MB0, 2,'.')).'</span></td> 
			<td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MC0, 2,'.')).'</span></td> 
		</tr>
		<tr>
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="labela1">500 - 3000 </span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CA1, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CB1, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MA1, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MB1, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MC1, 2,'.')).'</span></td>






		</tr>
		<tr>
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="labela1"> 15000 - 3000  </span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CA2, 2,'.')).'</span></td>  
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CB2, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MA2, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MB2, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MC2, 2,'.')).'</span></td>  
		</tr>
		<tr>
			<td  align=right valign="middle" class="labela1">Over 15000  </td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CA3, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($CB3, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MA3, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MB3, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MC3, 2,'.')).'</span></td>  
		</tr>
		<tr>
			<td>&nbsp;</td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MSericeInPrice, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MSericeOutPrice, 2,'.')).'</span></td>
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MA, 2,'.')).'</span></td> 
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MB, 2,'.')).'</span></td>
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MC, 2,'.')).'</span></td>
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MGPrice, 2,'.')).'</span></td>



		</tr>
		<tr>
			
			<td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden">&nbsp;</td>
			<td align=right colspan="2"><span lang="ar-SA" class="labela1">أجور استخدام الرصيف</span></td>
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MSericeBathPrice, 2,'.')).'</span></td>
			
		</tr>
		<tr>
			
			<td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden">&nbsp;</td>
			<td align=right colspan="2"><span lang="ar-SA" class="labela1"> </span> Anchorage   '.$txtAncor.' 3000</td>
			<td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.X0X(number_format($MSericeAnchoragePrice, 2,'.')).'</span></td>
			
		</tr>
		<tr>
			
			<td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden">&nbsp;</td>
			<td  align=right colspan="2"><span lang="ar-SA" class="labela1"> Total</span></td>
			<td align=right valign="middle">&nbsp;<span dir="rtl" lang="ar-SA" class="dataa1x">'.X0X(number_format($MSTOTAL, 2,'.')).'</span></td>
			
  		</tr>
  	</tbody>
</table>
';}

/*
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ####################################        Special  Services     ######################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ########################################################################################################## 
  ##########################################################################################################   
*/
if(intval($SSTOTAL)>0){ 
$html.='


<div><span style="font-size:1.0pt">&nbsp;</span></div> 
<table dir="ltr" width=100% style="border-collapse:collapse; z-index:4" cellspacing="1" border="1">
<tbody>
	<tr>
		<td colspan="6" align=center valign="middle">
			<span lang="en-US" class="titele1e" > Special Marine Services </span> 
		</td>
	</tr>
	<tr> 
		<td width=6% align=center valign="middle"> 
			<span lang="en-US" class="labele1"> No  </span>
		</td>
		<td width=35% align=center valign="middle"> 
			<span lang="en-US" class="labele1"> Description </span>
		</td>
		<td width=12% align=center valign="middle"> 
			<span lang="en-US" class="labele1"> Unit </span>
		</td>
		<td width=9% align=center valign="middle"> 
			<span lang="en-US" class="labele1"> U. Price </span>
		</td>
		<td width=9% align=center valign="middle"> 
			<span lang="en-US" class="labele1"> Qty. </span>
		</td>
		<td width=15% align=center valign="middle"> 
			<span lang="en-US" class="labele1"> Amount </span>
		</td> 
	</tr> 
';
$i=0;  
if($SSPrice1>0){ 
		$query1 = " SELECT `code`  FROM `services` WHERE `Service_ID`='".$SService1."' ; ";  
		$codes = $dbop->query($query1)->fetchAll();   
		foreach ($codes as $code_row) { $code1 = strval($code_row['code']);}				
		$html.='
		<tr>
			
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName1.' </span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit1.'</span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1"> '.$code1.' </span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUPrice1.'</span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSQut1.'</span></td>
			
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.number_format($SSPrice1, 2,'.').'</span></td>

		</tr>';}  
if($SSPrice2>0){ 
		$query1 = " SELECT `code`  FROM `services` WHERE `Service_ID`='".$SService2."'; ";  
		$codes = $dbop->query($query1)->fetchAll();    
		foreach ($codes as $code_row) { $code =$code_row['code'];}
		$html.='
		<tr>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$code.'</span></td>
		
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName2.' </span></td>
		
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit2.'</span></td>
		
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUPrice2.'</span></td>
		
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSQut2.'</span></td>
		
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.number_format($SSPrice2, 2,'.').'</span></td>

	</tr>';} 
if($SSPrice3>0){ 
		$query1 = " SELECT `code`  FROM `services` WHERE `Service_ID`='".$SService3."'; ";  
		$codes = $dbop->query($query1)->fetchAll();    
		foreach ($codes as $code_row) { $code =$code_row['code'];}
	$html.='
		<tr>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$code.'</span></td>
		
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName3.' </span></td>
		
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit3.'</span></td>
		
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUPrice3.'</span></td>
		
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSQut3.'</span></td>
		
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.number_format($SSPrice3, 2,'.').'</span></td>
	</tr>';} 
if($SSPrice4>0){
		$query1 = " SELECT `code`  FROM `services` WHERE `Service_ID`='".$SService4."'; ";  
		$codes = $dbop->query($query1)->fetchAll();    
		foreach ($codes as $code_row) { $code =$code_row['code'];}
	$html.='
		<tr>
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$code.'</span></td>
			
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName4.' </span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit4.'</span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUPrice4.'</span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSQut4.'</span></td>
			
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.number_format($SSPrice4, 2,'.').'</span></td>
	</tr>';} 
if($SSPrice5>0){
		$query1 = " SELECT `code`  FROM `services` WHERE `Service_ID`='".$SService5."'; ";  
				$codes = $dbop->query($query1)->fetchAll();    
				foreach ($codes as $code_row) { $code =$code_row['code'];}
	$html.='
		<tr>
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$code.'</span></td>
			
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName5.' </span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit5.'</span></td>
			
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSQut5.'</span></td>
			
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.number_format($SSPrice5, 2,'.').'</span></td>
			 
		</tr>';}  
	$html.='
	<tr>
		<td align=left colspan="5"   valign="middle"><span lang="ar-SA" class="labela1">المجموع</span>
		<td width=13%  align=right valign="middle"><span lang="ar-SA" class="dataa1">'.number_format($SSTOTAL, 2,'.').'</span></td>
		
	</tr>

</tbody>
</table>';


}



/*
########################################################################################################## 
########################################################################################################## 
########################################################################################################## 
########################################################################################################## 
########################################        Invoice TOTAL      ####################################### 
########################################################################################################## 
########################################################################################################## 
########################################################################################################## 
##########################################################################################################   
*/  

$html.=' 

<div><span style="font-size:2.0pt">&nbsp;</span></div>

<table dir="ltr" width=100% style="border-collapse:collapse;z-index:4" cellspacing="1" border="1">
  <tbody>
';
if($MSTOTAL>0){
$html.=' 
   	<tr>  
	   	<td align=right  width=50%	valign="middle" style="border-right-style:hidden"> &nbsp;</td>
		<td align=left   width=20%	valign="middle" ><span lang="en-US"  class="labele1" >  General Marine Services</span></td> 
		<td align=right  width=15% 	valign="middle"><span lang="en-US" class="datae1">'.number_format($MSTOTAL, 2).'</span></td> 
	</tr>
';}
if($SSTOTAL>0){
$html.=' 
    <tr> 
		<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td>
		<td align=left    valign="middle" ><span lang="en-US" class="labele1">  Special Marine Services</span></td> 
		<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($SSTOTAL, 2).'</span></td>  
	</tr>
';}
$html.=' 
    <tr> 
		<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td>
		<td align=left    valign="middle" ><span lang="en-US" class="labele1">Subtotal </span></td> 
		<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($TOTAL, 2).'</span></td> 
		
	</tr>
	<tr>
	
		<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td>
		<td align=left    valign="middle" ><span lang="en-US" class="labele1">VAT</span></td> 
		<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($VAT, 2).'</span></td> 
		
	</tr>
	<tr>
	
	<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td> 
		<td align=left    valign="middle" ><span lang="en-US" class="labele1">Total</span></td> 
		<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($VAT_TOTAL, 2).'</span></td> 
		
	</tr>
  </tbody>
</table>	

<br>



<div style="font-size:12px;">'.$CreditNote.'</div>'; 
if($MSTOTAL>0 && $SSTOTAL>0){
	$html.='<div><span style="font-size:5.0pt">&nbsp;</span></div>';}
else{
	$html.='<div><span style="font-size:100.0pt">&nbsp;</span></div>';}

$html.='  



        </main>
    </body>
</html>
'; 
	 
	$p = $Arabic->arIdentify($html);
	for ($i = count($p)-1; $i >= 0; $i-=2) {
		$utf8ar = $Arabic->utf8Glyphs(substr($html, $p[$i-1], $p[$i] - $p[$i-1]));
		$html   = substr_replace($html, $utf8ar, $p[$i-1], $p[$i] - $p[$i-1]);
	} 
	$invID = str_pad($InvoiceID, 6, '0', STR_PAD_LEFT);		  
	$Iday = date("Ymd", strtotime($InvoiceDate));
	$filename = $invoiceStart.strval($invID);			
	$dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
	$dompdf -> stream($filename, array("Attachment" => false));
	
?>
