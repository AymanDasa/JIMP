<?php 
	use Dompdf\Dompdf;
	use Dompdf\Options;
	require '../include/dompdf/vendor/autoload.php';
	$options = new Options();
	$options->set('defaultFont', 'Arabic');
	$options->set('chroot', realpath(''));
	$dompdf = new Dompdf($options); 
	require_once '../include/dompdf/vendor/src/Arabic.php';
	$Arabic = new ArPHP\I18N\Arabic(); 
	Require_once( "C:\\wow\\password\\config.php"); 
	Require_once("../include/auth.php"); 
	Require_once("../include/config.php"); 
	function E2A($myText)
		{
			$digit = (string)$myText;
			if(empty($digit))return '';
			if($digit<1)return '';
			// &#8199;
			$ar_digit = array('&#1632;', '&#1633;', '&#1634;', '&#1635;', '&#1636;', '&#1637;', '&#1638;', '&#1639;', '&#1640;', '&#1641;',
								'-'=>'-','.'=>'/',','=>'/','/'=>'/',':'=>':',' '=>'-','^'=>',');
			$arabic_digit = '';
			$length = strlen($digit);
			for($i=0;$i<$length;$i++){
				if(isset($ar_digit[$digit[$i]]))
					$arabic_digit .= $ar_digit[$digit[$i]];}
			return $arabic_digit;
		}
		
	if(isset($_GET['id'])) {		
		$InvoiceID=$_GET['id']; 
		$query = "SELECT *  FROM `invoice` WHERE `InvoiceID`=".$InvoiceID." LIMIT 1;"; 
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
		  $Status=$invoicev['Status'];  
		  $OracleCode=$invoicev['OracleCode']; 
		  
		  



		  $query = "SELECT * FROM `information`  LIMIT 1;"; 
		$infos = $dbop->query($query)->fetchAll(); 
		foreach ($infos as $info) {
		$name_user1=$info['name_user1'];
		$name_user2=$info['name_user2'];
		$name_user3=$info['name_user3'];
		$name_user4=$info['name_user4'];
		$name_user5=$info['name_user5'];
		$job_user1=$info['job_user1'];
		$job_user2=$info['job_user2'];
		$job_user3=$info['job_user3'];
		$job_user4=$info['job_user4'];
		$job_user5=$info['job_user5']; 
	}


		} 
	}else{$InvoiceID=1;} // exit(); 
	
	$MovePortName='';
	if($MovePort1!=''){$MovePortName=$MovePortName.' / '.$MovePort1;}
	if($MovePort2!=''){$MovePortName=$MovePortName.' / '.$MovePort2;}
	if($MovePort3!=''){$MovePortName=$MovePortName.' / '.$MovePort3;} 
	if($ShipWeight<3000){$txtAncor="أقل من 3000 ";}else { $txtAncor="أكثر من 3000";}
			$html='<!DOCTYPE html>
					<head>
						<style>
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
									position: absolute;
						overflow: visible;
						left: 9px;
						top: 2px;
						width:98%;  
						font-family:sans;
						margin: 0;
						}
					

						.table0{
							dir:ltr;
							width:100%;
							border-collapse:collapse;
							position:absolute;
							top:0pt;
							left:0pt;
							z-index:4;  
						}
						</style>

					</head> 
					<body>  
				  
					
			<table  cellpadding="0" cellspacing="0" border="1"  class="table0">
			<tr>		
			<td align=center width=20%  style="border-right-style:hidden" height="20" valign="middle">
				<p>	
					<span lang="ar-SA" style="font-size:8pt">   
						  المملكة العربية السعودية <br>
						   شركة ساحل الغربية لخدمات الموانئ <br>
						'.E2A("0123456789").' تيلفون  	:
				   
						<br>
						 '.E2A("0138574202").' فـاكس  	:
					
					</span>
				</p>
			</td>
			<td align=center width=20% valign="middle" style="border-right-style:hidden">
				  <p>
					  <span lang="ar-SA">
						  <img src="img/logo_s1.png" height="50px">
					  </span>
				  </p>
			  </td>
			  <td align=center width=20% height="20" valign="middle" style="border-right-style:hidden">
					  <span lang="ar-SA"> فــــاتــــورة <br>
					  </span>
				   <br>
					   <span dir="ltr" style="font-size:12pt;font-family:DejaVuSansCondensed;color:red;language:en-US;direction:ltr;
			  unicode-bidi:embed" lang="en-US">JD-'.$InvoiceID.' </span> 
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
										  المملكة العربية السعودية <br>
										المؤسسة العامة للموانئ<br>
										ميناء الملك عبد العزيز / الدمام<br>
										www.ports.gov.sa
					  </span>
				  </p>
			  </td></tr>
			</table>

<style>
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
 	font-size:15px; 
 	text-align: right;
 	font-family:Verdana;
 }
   .datae1  
   {
 	font-size:15px; 
 	text-align: right;
 	font-family:Sans-serif; 
 }
 .dataa1x 
 {
 	font-size:15px; 
 	text-align: right;
 	float: right;
 	display: inline;
 }
</style>




<div><span style="font-size:65.0pt">&nbsp;</span></div>

<table dir="ltr" width=100% style="border-collapse:collapse;position:absolute;z-index:4" cellspacing="1" border="1">
	<tbody>
		<tr>
				<td align=right width=20% valign="middle" 	>
				 		<span lang="ar-SA" class="labela1">'.E2A(date("H:i", strtotime($InvoiceDate))).'  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.E2A(date("Y/m/d", strtotime($InvoiceDate))).'&nbsp; &nbsp;'.'  م   '.' </span> <br>
				  		<span lang="ar-SA" class="labela1"> '.E2A($InvoiceDateH).'&nbsp; &nbsp;'.'  هـ  </span>
			  	</td> 
				<td align=right width=10% valign="middle" 	>
				  		<span lang="ar-SA" class="labela1">&nbsp;&nbsp; التاريخ </span><br>
				  		<span lang="en-US" class="labele1">Date&nbsp;&nbsp;</span>
			  	</td> 
			  <td align=right width=36% valign="middle" style="border-bottom-style: hidden;">
					  	<span lang="ar-SA" class="labela1">&nbsp;&nbsp;  اسم الوكيل </span><br>
					  	<span lang="en-US" class="labele1">&nbsp;&nbsp; Agent Name </span>
			  </td>
			  <td align=right width=34% valign="middle" style="border-bottom-style: hidden;">
					 	<span lang="ar-SA" class="labela1"> &nbsp;&nbsp;  اسم السفينة  </span><br>
						<span lang="en-US" class="labele1"> Vessel Name&nbsp;&nbsp;</span>
			  </td>
		 </tr>
		 <tr>
		 	<td align=center  valign="middle"> 
 				<span lang="en-US" class="labele1">WCPS - '.$InvoiceID.'</span> 
			  </td> 
		 	<td align=right  valign="middle">
				 		<span lang="ar-SA" class="labela1">&nbsp;&nbsp; رقم النظام </span><br>
				  		<span lang="en-US" class="labele1">Sytem No.&nbsp;&nbsp;</span>
			</td>
			  <td align=center   height="30pt" valign="middle">
				    	<span lang="ar-SA" class="labela1">&nbsp;&nbsp;'.$AgentNameAr.'</span><br>
				  		<span lang="en-US" class="labele1">'.$AgentNameEn.'</span> 
			  </td>	
			  <td align=center  height="30pt" valign="middle">
				  <p >  <span lang="en-US" class="labele1">&nbsp;&nbsp;'.$ShipName.'&nbsp;&nbsp;</span></p>
			  </td>
		 </tr>
		 	</tbody>
</table>




<div><span style="font-size:60pt">&nbsp;</span></div>

<table dir="ltr" width=100% style="border-collapse:collapse;position:absolute;z-index:4" cellspacing="1" border="1">
	<tbody>
		  <tr>
			   	<td align=center width=10% valign="middle" height="30pt">
					  <p>	<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$TripNo.'&nbsp;&nbsp; </span>&nbsp;<br></p>
				</td>
				<td align=right width=16% valign="middle">
					  <p>	<span lang="ar-SA" class="labela1">رقم الرحلة </span><br>
					  		<span lang="en-US" class="labele1" >Trip No</span></p>
				</td>
			  	<td align=center width=11% valign="middle">
					  <p>	<span lang="ar-SA" class="labela1">&nbsp;'.E2A($ShipWeight).'&nbsp;&nbsp; </span>&nbsp;<br></p>
				</td>
				<td align=right width=21% valign="middle">
					  <p>	<span lang="ar-SA" class="labela1"> سعة السفينة</span><br>
					  		<span lang="en-US" class="labele1">G.R.T.</span></p>
				</td>
			 	<td align=right width=27% valign="middle">
					  <p>	<span lang="ar-SA" class="labela1">&nbsp;'.E2A(date("H:i", strtotime($ArrivalDate))).'  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.E2A(date("Y/m/d", strtotime($ArrivalDate))).'&nbsp; &nbsp;'.'م  </span>&nbsp;<br>
					  		<span lang="ar-SA" class="labela1">&nbsp;'.E2A($ArrivalDateH).'&nbsp; &nbsp;'.' هـ  </span>&nbsp;</p>
				</td> 
				<td align=right width=15% valign="middle">
					  <p>	<span lang="ar-SA" class="labela1"> تاريخ الوصول </span><br>
					  		<span lang="en-US" class="labele1">Arrival Date</span></p>
				</td>
		 </tr>
		<tr>
				<td align=center valign="middle" height="30pt">
					  <p>	<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$DockingNo.'&nbsp;&nbsp; </span>&nbsp;<br></p>
				  	</td>
				  	<td align=right  valign="middle">
					  <p>	<span lang="ar-SA" class="labela1">رصيف الإرساء </span><br>
					  		<span lang="en-US" class="labele1">Docking Berth No</span></p>
				</td>
				<td align=center valign="middle">
				  	<p>	<span lang="ar-SA" class="labela1">&nbsp;'.E2A(number_format($PeriodDays)).'&nbsp;&nbsp; </span>&nbsp;<br></p>
			  	</td>
			  	<td align=right valign="middle">
				  	<p>	<span lang="ar-SA" class="labela1"> عدد ايام بقاء السفية بالرصيف</span><br>
				  		<span lang="en-US" class="labele1">Period Days</span></p>
			  	</td>
			  	<td align=right  valign="middle">
					  <p>	<span lang="ar-SA"  class="labela1">&nbsp;'.E2A(date("H:i", strtotime($DepartureDate))).'&nbsp;&nbsp;&nbsp;&nbsp;'.E2A(date("Y/m/d", strtotime($DepartureDate))).'&nbsp; &nbsp;'.'م  </span>&nbsp;<br>
					  		<span lang="ar-SA"  class="labela1">&nbsp;'.E2A($DepartureDateH).'&nbsp; &nbsp;'.' هـ  </span>&nbsp;</p>
				</td> 
				<td align=right  valign="middle">
					  <p>	<span lang="ar-SA" class="labela1"> تاريخ المغادرة </span><br>
					  		<span lang="en-US"class="labele1">Arrival Date</span></p>
				</td> 

		</tr>
		<tr>
				<td align=center  valign="middle" height="30pt">
				  <p>	<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$RouteNo.'&nbsp;&nbsp; </span>&nbsp;<br></p>
			  	</td>
			  	<td align=right  valign="middle">
				  <p>	<span lang="ar-SA" class="labela1">رقم الطريق</span><br>
				  		<span lang="en-US" class="labele1">Route No</span></p>
			  	</td>

			 
				<td align=center  valign="middle">
				  	<p>	<span lang="ar-SA" class="labela1">&nbsp;'.E2A(number_format($AnchorageDays)).'&nbsp;&nbsp; </span>&nbsp;</p>
			  	</td>
			  	<td align=right  valign="middle">
				  	<p>	<span lang="ar-SA" class="labela1"> عدد ايام بقاء السفية بالمخطاف</span><br>
				  		<span lang="en-US" class="labele1">Anchorage Days</span></p>
			  	</td>
			  	<td align=left  valign="middle"> 
					  <p>	<span lang="en-US" class="labele1" style="text-transform:uppercase">&nbsp;'.$MovePortName.'&nbsp;&nbsp; </span>&nbsp; </p>
				</td> 
				<td align=right  valign="middle">
					  <p>	<span lang="ar-SA" class="labela1"> رصيف الإنتقال </span><br>
					  		<span lang="en-US" class="labele1"> Shifted Bath No</span></p>
				</td>	
		</tr>

	</tbody>
</table>









<div><span style="font-size:120pt">&nbsp;</span></div>

<table dir="ltr" width=100% style="border-collapse:collapse;position:absolute;z-index:4" cellspacing="1" border="1">
  <tbody>
    <tr>
    <td colspan="7" align=center valign="middle"> 
    <span lang="en-US" class="titele1e" > General Marine Services </span>
    <span lang="ar-SA" class="titela1"> الخدمات البحرية العامة </span> </td>
  </tr>
  <tr>
    <td width=17% rowspan="6" align=center valign="middle"> &nbsp;
     </td>
    <td colspan="5" align=center valign="middle"><span lang="ar-SA" class="labela1">أجور الإرشاد</span></td>
    <td rowspan="2" align=center valign="middle" ><span lang="ar-SA" class="labela1">الوزن</span></td>
  </tr>
  <tr>
    <td colspan="3" align=center valign="middle"><span lang="ar-SA" class="labela1">أجور الإنتقال من رصيف الى اخر</span></td>
    <td align=center valign="middle"><span lang="ar-SA" class="labela1">أجور المغادرة</span></td>
    <td align=center valign="middle"><span lang="ar-SA" class="labela1">أجور القدوم</span></td>
  </tr>
  <tr>
    <td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MC0, 2,'.', '^')).'</span></td>
    <td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MB0, 2,'.', '^')).'</span></td>
    <td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MA0, 2,'.', '^')).'</span></td>
    <td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CB0, 2,'.', '^')).'</span></td>
    <td width=13% align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CA0, 2,'.', '^')).'</span></td>
    <td width=18% align=right valign="middle">&nbsp;<span lang="ar-SA" class="labela1"> اقل من 500</span></td>
  </tr>
  <tr>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MC1, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MB1, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MA1, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CB1, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CA1, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="labela1">من 500 الى 3000 </span></td>
  </tr>
  <tr>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MC2, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MB2, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MA2, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CB2, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CA2, 2,'.', '^')).'</span></td> 
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="labela1">من 3000 الى 15000</span></td>
  </tr>
  <tr>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MC3, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MB3, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MA3, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CB3, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($CA3, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="labela1">اكثر من 15000</span></td>
    
  </tr>
  <tr>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MGPrice, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MC, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MB, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MA, 2,'.', '^')).'</span></td> 
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MSericeOutPrice, 2,'.', '^')).'</span></td>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MSericeInPrice, 2,'.', '^')).'</span></td>
    <td>&nbsp;</td>

  </tr>
  <tr>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MSericeBathPrice, 2,'.', '^')).'</span></td>
    <td align=right colspan="2"><span lang="ar-SA" class="labela1">أجور استخدام الرصيف</span></td>
    <td colspan="4" style="border-right-style:hidden;border-bottom-style:hidden">&nbsp;</td>
  </tr>
  <tr>
    <td align=right valign="middle">&nbsp;<span lang="ar-SA" class="dataa1">'.E2A(number_format($MSericeAnchoragePrice, 2,'.', '^')).'</span></td>
    <td align=right colspan="2"><span lang="ar-SA" class="labela1">أجور المخطاف '.$txtAncor.'</span></td>
    <td colspan="4" style="border-right-style:hidden;border-bottom-style:hidden">&nbsp;</td>
  </tr>
  <tr>
    <td align=right valign="middle">&nbsp;<span dir="rtl" lang="ar-SA" class="dataa1x">'.E2A(number_format($MSTOTAL, 2,'.', '^')).'</span></td>
    <td  align=right colspan="2"><span lang="ar-SA" class="labela1"> المجموع</span></td>
    <td colspan="4" style="border-right-style:hidden;border-bottom-style:hidden">&nbsp;</td>
  </tr>
  </tbody>
</table>





 
 
<!-- table for Special Marine Services -->

<div><span style="font-size:155.0pt">&nbsp;</span></div>

<table dir="ltr" width=100% style="border-collapse:collapse;position:absolute;z-index:4" cellspacing="1" border="1">
  <tbody>
    <tr>
    	<td colspan="6" align=center valign="middle">
	    	<span lang="en-US" class="titele1e" > Special Marine Services </span>
	    	<span lang="ar-SA" class="titela1"> الخدمات البحرية الخاصة </span>
	    </td>
  	</tr>
  	<tr>
		<td width=15% align=center valign="middle">
			<span lang="ar-SA" class="labela1">المبلغ</span><br>
			<span lang="en-US" class="labele1"> Amount </span>
		</td>
		<td width=9% align=center valign="middle">
			<span lang="ar-SA" class="labela1">العدد</span><br>
			<span lang="en-US" class="labele1"> Qty. </span>
		</td>
		<td width=9% align=center valign="middle">
			<span lang="ar-SA" class="labela1">سعر الوحدة</span><br>
			<span lang="en-US" class="labele1"> U. Price </span>
		</td>
		<td width=10% align=center valign="middle">
			<span lang="ar-SA" class="labela1">الوحدة</span><br>
			<span lang="en-US" class="labele1"> Unit </span>
		</td>
		<td width=37% align=center valign="middle">
			<span lang="ar-SA" class="labela1">الوصف</span><br>
			<span lang="en-US" class="labele1"> Description </span>
		</td>
		<td width=6% align=center valign="middle">
			<span lang="ar-SA" class="labela1">البند</span><br>
			<span lang="en-US" class="labele1"> No  </span>
		</td>
  	</tr>


';
$i=0;
$noSSLine='<tr>
<td align=center valign="middle">&nbsp;</td>
<td align=center valign="middle">&nbsp;</td>
<td align=center valign="middle">&nbsp;</td>
<td align=center valign="middle">&nbsp;</td>
<td align=center valign="middle">&nbsp;</td>
<td align=center valign="middle">&nbsp;</td>
</tr>';
if($SSPrice1>0){
		$i=$i+1;
		$html.='
  		<tr>
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($SSPrice1, 2,'.', '^')).'</span></td>
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSQut1).'</span></td>
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSUPrice1).'</span></td>
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit1.'</span></td>
			<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName1.' </span></td>
			<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($i)).'</span></td>
  		</tr>';}else{$html.=$noSSLine;} 
if($SSPrice2>0){
			$i=$i+1;
		  $html.='
  		<tr>
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($SSPrice1	, 2,'.', '^')).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSQut2).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSUPrice2).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit2.'</span></td>
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName2.' </span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($i)).'</span></td>
  	</tr>';}else{$html.=$noSSLine;} 
if($SSPrice3>0){
		$i=$i+1;
	  $html.='
  		<tr>
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($SSPrice1, 2,'.', '^')).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSQut3).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSUPrice3).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit3.'</span></td>
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName3.' </span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($i)).'</span></td>
  	</tr>';}else{$html.=$noSSLine;} 
if($SSPrice4>0){
		$i=$i+1;
	  $html.='
  		<tr>
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($SSPrice1, 2,'.', '^')).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSQut4).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSUPrice4).'</span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit4.'</span></td>
		<td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName4.' </span></td>
		<td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($i)).'</span></td>
  	</tr>';}else{$html.=$noSSLine;} 
if($SSPrice5>0){
		$i=$i+1;
	  $html.='
	  <tr>
	  <td align=right valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($SSPrice1, 2,'.', '^')).'</span></td>
	  <td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSQut5).'</span></td>
	  <td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A($SSUPrice5).'</span></td>
	  <td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.$SSUnit5.'</span></td>
	  <td align=right valign="middle"><span lang="ar-SA" class="dataa1"> '.$SSName5.' </span></td>
	  <td align=center valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($i)).'</span></td>
	</tr>';}else{$html.=$noSSLine;} 
	$html.='
  	<tr>
  		<td width=13%  align=right valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($SSTOTAL, 2,'.', '^')).'</span></td>
		<td align=left colspan="5"   valign="middle"><span lang="ar-SA" class="labela1">المجموع</span>
  	</tr>

  </tbody>
</table>






<div><span style="font-size:120.0pt">&nbsp;</span></div>

<table dir="ltr" width=100% style="border-collapse:collapse;position:absolute;z-index:4" cellspacing="1" border="1">
  <tbody>
   <tr>
    	<td align=right  width=15%	valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($MSTOTAL, 2,'.', '^')).'</span></td>
    	<td align=right  width=30%	valign="middle" style="border-right-style:hidden"><span lang="ar-SA" class="labela1">  الخدمات البحرية العامة</span></td>
    	<td align=right  width=10%	valign="middle" style="border-right-style:hidden"> &nbsp;</td>
    	<td align=left   width=30%	valign="middle" ><span lang="en-US"  class="labele1" >  General Marine Services</span></td>
    	<td align=right  width=15% 	valign="middle"><span lang="en-US" class="datae1">'.number_format($MSTOTAL, 2).'</span></td>
	</tr>
    <tr>
    	<td align=right   valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($SSTOTAL, 2,'.', '^')).'</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"><span lang="ar-SA" class="labela1">  الخدمات البحرية الخاصة</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td>
    	<td align=left    valign="middle" ><span lang="en-US" class="labele1">  Special Marine Services</span></td>
    	<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($SSTOTAL, 2).'</span></td>
	</tr>
    <tr>
    	<td align=right   valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($TOTAL, 2,'.', '^')).'</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"><span lang="ar-SA" class="labela1">    المجموع</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td>
    	<td align=left    valign="middle" ><span lang="en-US" class="labele1">Subtotal </span></td>
    	<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($TOTAL, 2).'</span></td>
	</tr>
	 <tr>
    	<td align=right   valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($VAT, 2,'.', '^')).'</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"><span lang="ar-SA" class="labela1">ضريبة القيمة المضافة</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td>
    	<td align=left    valign="middle" ><span lang="en-US" class="labele1">VAT</span></td>
    	<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($VAT, 2).'</span></td>
	</tr>
	 <tr>
    	<td align=right   valign="middle"><span lang="ar-SA" class="dataa1">'.E2A(number_format($VAT_TOTAL, 2,'.', '^')).'</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"><span lang="ar-SA" class="labela1">  الإجمالي</span></td>
    	<td align=right   valign="middle" style="border-right-style:hidden"> &nbsp;</td>
    	<td align=left    valign="middle" ><span lang="en-US" class="labele1">Total</span></td>
    	<td align=right   valign="middle"><span lang="en-US"  class="datae1">'.number_format($VAT_TOTAL, 2).'</span></td>
	</tr>
  </tbody>
</table>	











<!-- table for Note



$name_user3
$name_user4
$name_user5
 
$job_user2 
$job_user3 
$job_user4 

-->
  
<div><span style="font-size:100.0pt">&nbsp;</span></div>

<table dir="ltr" width=100% style="border-collapse:collapse;position:absolute;z-index:4" cellpadding="0" cellspacing="0" border="0">
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





















					</body></html>';

			 
				
	 
			$p = $Arabic->arIdentify($html);
			for ($i = count($p)-1; $i >= 0; $i-=2) {
				$utf8ar = $Arabic->utf8Glyphs(substr($html, $p[$i-1], $p[$i] - $p[$i-1]));
				$html   = substr_replace($html, $utf8ar, $p[$i-1], $p[$i] - $p[$i-1]);
			} 
			  
	$Iday = date("Ymd", strtotime($InvoiceDate));
	$filename = strval($InvoiceID)."_".strval($Iday);			
	$dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
	$dompdf -> stream($filename, array("Attachment" => false));
	
?>
