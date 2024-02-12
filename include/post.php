<?php
#########################################################################
#########################################################################
#######################  Functions & Class  #############################
#########################################################################
#########################################################################

include "include/js/Hijri_GregorianConvert.class";
function TGH($BDate){
	// TGH() function used to seprate the Date and Time to convert  Gregorian to Hijri
	//  (T)ime(G)regorian(H)ijri = TGH()
	$GDate= date("d/m/Y", strtotime($BDate)); 				// Format the Date to Day/Month/Year
	$DateConv=new Hijri_GregorianConvert;					// New Opject for the class
	$format="DD/MM/YYYY";									// Using Format
	$HDate= $DateConv->GregorianToHijri($GDate,$format);	// Convert Gregorian Date to Hijri Date
	$TDate= date("H:i", strtotime($BDate));					// Format the Date to Houer:Minits
	return array($TDate,$GDate,$HDate);	
	/*
	How to use TGH Function:
	$X="18/03/2014 15:36";
	$DateX=TGH($X);
	echo $DateX[0]; 				// for time like 13:31
	echo $DateX[1]; 				// for Date like 08/07/2014  <-Gregorian
	echo $DateX[2]; 				// for Date like 10/09/1435  <-Hijri
	*/
}

function PeriodDay($startTimeStamp,$endTimeStamp)
{
	// PeriodDay function to calculate number of days between two Dates
	$start = strtotime($startTimeStamp); 	//Change Text to time format
	$end = strtotime($endTimeStamp);		//Change Text to time format
	$numberDays = abs($end - $start);		//Absolute value of difference , All answers is positive 
	$numberDays = intval($numberDays);		//Get the integer value of a numberDays 
	$Periods = ceil ($numberDays /(60*60*24)) ;	//Round numberDays up 
	return $Periods;						//return Period Days
	/*
	How to use PeriodDay Function:
	$X=18/03/2014 15:36;
	$Y=19/10/2014 06:42;
	$DateX=PeriodDay($X,$Y);
	echo $DateX; 							// output shld be 243 
	*/
}

function MSA($SWeight,$Days){
	// MSP() function used to Callculate MService4 Only 
	// $Days for Anchorage Days
	if ($SWeight<=3000){
		// if Ship Weight < 3000
		$MAPrice=($Days*250);}
	if ($SWeight>3000 ){
		// if Ship Weight > 3000
		$MAPrice=($Days*500);}
	return ($MAPrice);	
	/*
	How to use MSB Function:
	echo MSA($ShipWeight,$AnchorageDays);
	*/
}


function MSB($SWeight,$STFactor,$Days){
	// MSP() function used to Callculate MService2 Only
	// $STFactor for Service Type Factor 
	// $Days for Period Days
	if ($SWeight<=500){
		// if Ship Weight < 500
		$MBPrice=($Days*500)*$STFactor;
		}
	if ($SWeight>500 && $SWeight<=3000 ){
		// if Ship Weight > 500 and Weight < 3000
		$MBPrice=($Days*1000)*$STFactor;}
	if ($SWeight>3000 && $SWeight<=15000 ){
		// if Ship Weight > 3000 and Weight < 15000
		$MBPrice=($Days*1500)*$STFactor;}
	if ($SWeight>15000 ){
		// if Ship Weight > 15000 
		$MBPrice=($Days*2000)*$STFactor;}
	return $MBPrice;	
	/*
	How to use MSB Function:
	echo MSB($ShipWeight,$ServiceTypeFactor,$PeriodDays);
	*/
}


function MSP($SWeight,$STFactor){
	// MSP() function used to Callculate MService0 and MService1 Only
	// $STFactor for Service Type Factor 
	if ($SWeight<=500){
		// if Ship Weight < 500
		$MPrice=(500)*$STFactor;
		$cell1=$MPrice;
		$cell2="";
		$cell3="";
		$cell4="";}
	if ($SWeight>500 && $SWeight<=3000 ){
		// if Ship Weight > 500 and Weight < 3000
		$MPrice=($SWeight*1)*$STFactor;
		$cell1=500*$STFactor;
		$cell2=($MPrice-$cell1);
		$cell3="";
		$cell4="";}
	if ($SWeight>3000 && $SWeight<=15000 ){
		// if Ship Weight > 3000 and Weight < 15000
		$MPrice=((0.15*$SWeight)+2550)*$STFactor;
		$cell1=500*$STFactor;
		$cell2=2500*$STFactor;
		$cell3=($MPrice-$cell1-$cell2);
		$cell4="";}
	if ($SWeight>15000 ){
		// if Ship Weight > 15000 
		$MPrice=((0.10*$SWeight)+3300)*$STFactor;
		$cell1=500*$STFactor;
		$cell2=2500*$STFactor;
		$cell3=1800*$STFactor;
		$cell4=($MPrice-$cell1-$cell2-$cell3)*$STFactor;}
	return array($cell1,$cell2,$cell3,$cell4,$MPrice);	
	/*
	How to use MSP Function:
	$MServiceX=MSP($ShipWeight,$ServiceTypeFactor);
		$CX0=$MServiceX[0]; // cell 0
		$CX1=$MServiceX[1]; // cell 1
		$CX2=$MServiceX[2]; // cell 2
		$CX3=$MServiceX[3]; // cell 3
		$CX =$MServiceX[4]; // Total
	*/
}

function E2A($myText)
{$digit = (string)$myText;
if(empty($digit))
return '';
$ar_digit = array(
'&#1632;', '&#1633;', '&#1634;', '&#1635;', '&#1636;', '&#1637;', '&#1638;', '&#1639;', '&#1640;', '&#1641;',
'-'=>'-',','=>'&#1548;','.'=>'&#44','/'=>'/',':'=>':',' '=>'  ');
$arabic_digit = '';
$length = strlen($digit);
for($i=0;$i<$length;$i++){
	if(isset($ar_digit[$digit[$i]]))
		$arabic_digit .= $ar_digit[$digit[$i]];}
return $arabic_digit;}

function VWS($SWeight)
{
	if($SWeight<500){return 1;}
	if($SWeight>500 && $SWeight<=3000){return 2;}
	if($SWeight>3000 && $SWeight<=15000){return 3;}
	if($SWeight>15000){return 4;}
}

$VAT=$Actions=0;
$Status=700;

#########################################################################
#########################################################################
########################    Inforamtion   ###############################
#########################################################################
#########################################################################


$ShipID                    =$_POST['ShipID']; 
    $query = "SELECT *  FROM `ship` WHERE `ShipID`=".$ShipID." LIMIT 1;"; 
    $ships = $dbop->query($query)->fetchAll();   
    foreach ($ships as $ship) {  
        $ShipName                   =$ship['ShipName'];
        $ShipWeight                 =$ship['Weight']; 
        $ShipVAT		            =intval($ship['VAT']); 
        if ($ShipVAT==1){$SAVAT=(15/100); }else{$SAVAT=0;} 
    }

$AgentID                   =$_POST['AgentID'];
    $query = "SELECT *  FROM `agents` WHERE `AgentID`=".$AgentID." LIMIT 1;"; 
    $ships = $dbop->query($query)->fetchAll();   
    foreach ($ships as $ship) {  
        $AgentNameAr                  =$ship['AgentNameAr'];
        $AgentNameEn                =$ship['AgentNameEn'];
    }

$ServiceType               =$_POST['ServiceType'];
$ServiceTypeFactor 	=floatval($ServiceType);
	if($ServiceTypeFactor==1){$ServiceTypeName='عادية';}
	if($ServiceTypeFactor>1){$ServiceTypeName='خاصة';}
	if($ServiceTypeFactor<1){$ServiceTypeName='لم تقدم له قاطرة';}
    $VWeight=VWS($ShipWeight);

$InvoiceDate               =$_POST['InvoiceDate']; 
    $InvoiceDateX 	=TGH($InvoiceDate);
    $InvoiceDateT 	=$InvoiceDateX[0];
    $InvoiceDateG 	=$InvoiceDateX[1];
    $InvoiceDateH 	=$InvoiceDateX[2]; 

$ArrivalDate               =$_POST['ArrivalDate']; 
    $ArrivalDateX 	=TGH($ArrivalDate);
    $ArrivalDateT 	=$ArrivalDateX[0];
    $ArrivalDateG 	=$ArrivalDateX[1];
    $ArrivalDateH 	=$ArrivalDateX[2];
     
$DepartureDate             =$_POST['DepartureDate'];  
    $DepartureDateX 	=TGH($DepartureDate);
    $DepartureDateT 	=$DepartureDateX[0];
    $DepartureDateG 	=$DepartureDateX[1];
    $DepartureDateH 	=$DepartureDateX[2];
 

$AnchorageEntry            =$_POST['AnchorageEntry']; 
    $AnchorageEntryX 	=TGH($AnchorageEntry);
    $AnchorageEntryT 	=$AnchorageEntryX[0];
    $AnchorageEntryG 	=$AnchorageEntryX[1];
    $AnchorageEntryH 	=$AnchorageEntryX[2];
    $PeriodDays			= PeriodDay($ArrivalDate,$DepartureDate);

$AnchorageLeave            =$_POST['AnchorageLeave']; 
    $AnchorageLeaveX 	=TGH($AnchorageLeave);
    $AnchorageLeaveT 	=$AnchorageLeaveX[0];
    $AnchorageLeaveG 	=$AnchorageLeaveX[1];
    $AnchorageLeaveH 	=$AnchorageLeaveX[2];
    $AnchorageDays= PeriodDay($AnchorageEntry,$AnchorageLeave);
    $MSericeAnchoragePrice= MSA($ShipWeight,$AnchorageDays); 

$MovePort1                 =$_POST['MovePort1'];
$MovePort2                 =$_POST['MovePort2'];
$MovePort3                 =$_POST['MovePort3'];
$XMove=' '; 

$TripNo                    =$_POST['TripNo'];
$DockingNo                 =$_POST['DockingNo'];
$RouteNo                   =$_POST['RouteNo'];
$ShiftedNo                 =$_POST['ShiftedNo'];
$Reason                    =$_POST['Reason'];
$Note                      =$_POST['Note'];

#########################################################################
#########################################################################
########################  Marine  Service ###############################
#########################################################################
#########################################################################



if(isset($_POST['MSFraction1'])){$MSFraction1=floatval($_POST['MSFraction1']);}else{$MSFraction1=1;};
if(isset($_POST['MSFraction2'])){$MSFraction2=floatval($_POST['MSFraction2']);}else{$MSFraction2=1;};
if(isset($_POST['MSFraction3'])){$MSFraction3=floatval($_POST['MSFraction3']);}else{$MSFraction3=1;};

// Marine Services check box
if (isset($_POST['MService1'])){if (($_POST['MService1'] == '1')){$MService1 = 1;}else{$MService1=0;}}else{$MService1=0;}
if (isset($_POST['MService2'])){if (($_POST['MService2'] == '1')){$MService2 = 1;}else{$MService1=0;}}else{$MService2=0;}
if (isset($_POST['MService3'])){if (($_POST['MService3'] == '1')){$MService3 = 1;}else{$MService1=0;}}else{$MService3=0;}


// Marine Services 1 
//	$MService[1] 
    if ($MService1==1)
    {	$MServiceIn=MSP($ShipWeight,$MSFraction0);
        $CA0=$MServiceIn[0]*$ServiceTypeFactor;
        $CA1=$MServiceIn[1]*$ServiceTypeFactor;
        $CA2=$MServiceIn[2]*$ServiceTypeFactor;
        $CA3=$MServiceIn[3]*$ServiceTypeFactor;
        $MSericeInPrice =$MServiceIn[4]*$ServiceTypeFactor;
    }else
    {	$CA0=$CA1=$CA2=$CA3=$MSericeInPrice="";}

// Marine Services 2 
//	$MService[2]
    if ($MService2==1)
    {	$MServiceOut=MSP($ShipWeight,$MSFraction1);
        $CB0=$MServiceOut[0]*$ServiceTypeFactor;
        $CB1=$MServiceOut[1]*$ServiceTypeFactor;
        $CB2=$MServiceOut[2]*$ServiceTypeFactor;
        $CB3=$MServiceOut[3]*$ServiceTypeFactor;
        $MSericeOutPrice =$MServiceOut[4]*$ServiceTypeFactor;
    }else
    {	$CB0=$CB1=$CB2=$CB3=$MSericeOutPrice="";}


//  Marine Service 3  IS FOR MovePort1 AND MovePort2 MovePort3
//	$MovePort 
    if( $MovePort1!="") 
        { 
            $MAX=MSP($ShipWeight,1);
            $MA0=$MAX[0]/2 ;
            $MA1=$MAX[1]/2 ;
            $MA2=$MAX[2]/2 ;
            $MA3=$MAX[3]/2 ;
            $MA=$MA0+$MA1+$MA2+$MA3;
            $XMove.=$MovePort0;
        } else{$MA=$MA0=$MA1=$MA2=$MA3="";}
    if( $MovePort2!="") 
        { 
            $MBX=MSP($ShipWeight,1);
            $MB0=$MBX[0]/2 ;
            $MB1=$MBX[1]/2 ;
            $MB2=$MBX[2]/2 ;
            $MB3=$MBX[3]/2 ;
            $MB=$MB0+$MB1+$MB2+$MB3;
            $XMove.=' & '.$MovePort1;
        }else{$MB=$MB0=$MB1=$MB2=$MB3='';}
    if( $MovePort3!="") 
        { 
            $MCX=MSP($ShipWeight,1);
            $MC0=$MCX[0]/2 ;
            $MC1=$MCX[1]/2 ;
            $MC2=$MCX[2]/2 ;
            $MC3=$MCX[3]/2 ;
            $MC=$MC0+$MC1+$MC2+$MC3;
            $XMove.=' & '.$MovePort2;
        } else{$MC=$MC0=$MC1=$MC2=$MC3='';}
    $MovePortPrice=$MA+$MB+$MC;
       
//  Marine Service 4  IS FOR USING PORT BATH
//$MService[3] 

if ($MService3==1) 	{ 
    $MSericeBathPrice=MSB($ShipWeight,$MSFraction2,$PeriodDays);
    }else{$MSericeBathPrice='';} 
    $MSNote1                   =$_POST['MSNote1'];
    $MSNote2                   =$_POST['MSNote2'];
    $MSNote3                   =$_POST['MSNote3'];

$MGPrice=$MSericeInPrice+$MSericeOutPrice+$MovePortPrice;

########################  MSTOTAL  ###############################
$MSTOTAL=$MSericeInPrice+$MSericeOutPrice+$MSericeBathPrice+$MovePortPrice+$MSericeAnchoragePrice;

#########################################################################
#########################################################################
########################  Special Service ###############################
#########################################################################
#########################################################################


    $query = "SELECT * FROM `services` WHERE `ServiceType` LIKE 0 and `Service_ID` > 0 ORDER BY `Service_ID` ASC"; 
    $SSVs = $dbop->query($query)->fetchAll();
    $i=1;   
    foreach ($SSVs as $SSV) {  
        $rowSSVCost[$i]         =$SSV['Cost'];
        $rowSSVDescription[$i]  =$SSV['Description'];
        $rowSSVService_ID[$i]   =$SSV['Service_ID'];
        $rowSSUnit[$i]          =$SSV['Unit'];
        $i++;
    } 
    $SService1 = intval($_POST['SService1']);
    $SService2 = intval($_POST['SService2']);
    $SService3 = intval($_POST['SService3']);
    $SService4 = intval($_POST['SService4']);
    $SService5 = intval($_POST['SService5']);

    ########################  SService1  ###############################
    if (($_POST['SService1'])!="")
  		{
  		$SSName1    = $rowSSVDescription[$SService1];
  		$SSQut1     =floatval($_POST['SSQut1']);
  		$SSUPrice1  =floatval($_POST['SSUPrice1']);
  		$SSUnit1    =$rowSSUnit[$SService1]; 
  		$SSNote1    =$_POST['SSNote1'];
  		$SSPrice1   =$SSQut1*$SSUPrice1 ;
		}
    else  {$SSPrice1=$SService1=$SSName1=$SSQut1=$SSUPrice1=$SSUnit1=$SSNote1="";}

    ########################  SService2  ###############################
    if (($_POST['SService2'])!="")
  		{
  		$SSName2    = $rowSSVDescription[$SService2];
  		$SSQut2     =floatval($_POST['SSQut2']);
  		$SSUPrice2  =floatval($_POST['SSUPrice2']);
  		$SSUnit2    =$rowSSUnit[$SService2]; 
  		$SSNote2    =$_POST['SSNote2'];
  		$SSPrice2   =$SSQut2*$SSUPrice2 ;
		}
    else  {$SSPrice2=$SService2=$SSName2=$SSQut2=$SSUPrice2=$SSUnit2=$SSNote2="";}

    ########################  SService3  ###############################
    if (($_POST['SService3'])!="")
  		{
  		$SSName3    = $rowSSVDescription[$SService3];
  		$SSQut3     =floatval($_POST['SSQut3']);
  		$SSUPrice3  =floatval($_POST['SSUPrice3']);
  		$SSUnit3    =$rowSSUnit[$SService3]; 
  		$SSNote3    =$_POST['SSNote3'];
  		$SSPrice3   =$SSQut3*$SSUPrice3 ;
		}
    else  {$SSPrice3=$SService3=$SSName3=$SSQut3=$SSUPrice3=$SSUnit3=$SSNote3="";}    

    ########################  SService4  ###############################
    if (($_POST['SService4'])!="")
  		{
  		$SSName4    = $rowSSVDescription[$SService4];
  		$SSQut4     =floatval($_POST['SSQut4']);
  		$SSUPrice4  =floatval($_POST['SSUPrice4']);
  		$SSUnit4    =$rowSSUnit[$SService4]; 
  		$SSNote4    =$_POST['SSNote4'];
  		$SSPrice4   =$SSQut4*$SSUPrice4 ;
		}
    else  {$SSPrice4=$SService4=$SSName4=$SSQut4=$SSUPrice4=$SSUnit4=$SSNote4="";}    

    ########################  SService5  ###############################
    if (($_POST['SService5'])!="")
  		{
  		$SSName5    = $rowSSVDescription[$SService5];
  		$SSQut5     =floatval($_POST['SSQut5']);
  		$SSUPrice5  =floatval($_POST['SSUPrice5']);
  		$SSUnit5    =$rowSSUnit[$SService5]; 
  		$SSNote5    =$_POST['SSNote5'];
  		$SSPrice5   =$SSQut5*$SSUPrice5 ;
		}
    else  {$SSPrice5=$SService5=$SSName5=$SSQut5=$SSUPrice5=$SSUnit5=$SSNote5="";}    

    ########################  SSTOTAL  ###############################
    $SSTOTAL=$SSPrice1+$SSPrice2+$SSPrice3+$SSPrice4+$SSPrice5 ;


#########################################################################
#########################################################################
########################  Invoice Totals  ###############################
#########################################################################
#########################################################################

$TOTAL=$MSTOTAL+$SSTOTAL ;
$VAT=$TOTAL*$ShipVAT;
$VAT_TOTAL=$VAT+$TOTAL;

#########################################################################
#########################################################################
###########################  SQL INSERT #################################
#########################################################################
#########################################################################



$sql1="INSERT INTO `invoice` 
(
 
  `ShipID`, 
  `ShipName`, 
  `ShipWeight`, 
  `AgentID`, 
  `AgentNameAr`, 
  `AgentNameEn`, 
  `ServiceType`, 
  `ServiceTypeName`, 
  `ServiceTypeFactor`, 
  `InvoiceDate`, 
  `InvoiceDateT`, 
  `InvoiceDateH`, 
  `ArrivalDate`, 
  `ArrivalDateT`, 
  `ArrivalDateH`, 
  `DepartureDate`, 
  `DepartureDateT`, 
  `DepartureDateH`, 
  `PeriodDays`, 
  `AnchorageEntry`, 
  `AnchorageEntryT`, 
  `AnchorageEntryH`, 
  `AnchorageLeave`, 
  `AnchorageLeaveT`, 
  `AnchorageLeaveH`, 
  `AnchorageDays`, 
  `MSericeAnchoragePrice`, 
  `MovePort0`, 
  `MovePort1`, 
  `MovePort2`, 
  `TripNo`, 
  `DockingNo`, 
  `RouteNo`, 
  `ShiftedNo`, 
  `Reason`, 
  `Note`, 
  `MSFraction0`, 
  `MSFraction1`, 
  `MSFraction2`, 
  `MService0`, 
  `MService1`, 
  `MService2`, 
  `CA0`, 
  `CA1`, 
  `CA2`, 
  `CA3`, 
  `MSericeInPrice`, 
  `CB0`, 
  `CB1`, 
  `CB2`, 
  `CB3`, 
  `MSericeOutPrice`, 
  `MA`, 
  `MA0`, 
  `MA1`, 
  `MA2`, 
  `MA3`, 
  `MB`, 
  `MB0`, 
  `MB1`, 
  `MB2`, 
  `MB3`, 
  `MC`, 
  `MC0`, 
  `MC1`, 
  `MC2`, 
  `MC3`, 
  `MovePortPrice`, 
  `MSericeBathPrice`, 
  `MSNote0`, 
  `MSNote1`, 
  `MSNote2`, 
  `MGPrice`, 
  `MSTOTAL`, 
  `SService0`, 
  `SService1`, 
  `SService2`, 
  `SService3`, 
  `SService4`, 
  `SSName0`, 
  `SSName1`, 
  `SSName2`, 
  `SSName3`, 
  `SSName4`, 
  `SSNote0`, 
  `SSNote1`, 
  `SSNote2`, 
  `SSNote3`, 
  `SSNote4`, 
  `SSUnit0`, 
  `SSUnit1`, 
  `SSUnit2`, 
  `SSUnit3`, 
  `SSUnit4`, 
  `SSQut0`, 
  `SSQut1`, 
  `SSQut2`, 
  `SSQut3`, 
  `SSQut4`, 
  `SSUPrice0`, 
  `SSUPrice1`, 
  `SSUPrice2`, 
  `SSUPrice3`, 
  `SSUPrice4`, 
  `SSPrice0`, 
  `SSPrice1`, 
  `SSPrice2`, 
  `SSPrice3`, 
  `SSPrice4`, 
  `SSTOTAL`, 
  `TOTAL`,
  `is_VAT`,
  `VAT`,
  `VAT_TOTAL`,
  `Status`
) 
VALUES (
 
'$ShipID',
'$ShipName',
'$ShipWeight',
'$AgentID',
'$AgentNameAr',
'$AgentNameEn',
'$ServiceType',
'$ServiceTypeName',
'$ServiceTypeFactor',
'$InvoiceDate',
'$InvoiceDateT',
'$InvoiceDateH',
'$ArrivalDate',
'$ArrivalDateT',
'$ArrivalDateH',
'$DepartureDate',
'$DepartureDateT',
'$DepartureDateH',
'$PeriodDays',
'$AnchorageEntry',
'$AnchorageEntryT',
'$AnchorageEntryH',
'$AnchorageLeave',
'$AnchorageLeaveT',
'$AnchorageLeaveH',
'$AnchorageDays',
'$MSericeAnchoragePrice',
'$MovePort0',
'$MovePort1',
'$MovePort2',
'$TripNo',
'$DockingNo',
'$RouteNo',
'$ShiftedNo',
'$Reason',
'$Note',
'$MSFraction0',
'$MSFraction1',
'$MSFraction2',
'$MService0',
'$MService1',
'$MService2',
'$CA0',
'$CA1',
'$CA2',
'$CA3',
'$MSericeInPrice',
'$CB0',
'$CB1',
'$CB2',
'$CB3',
'$MSericeOutPrice',
'$MA',
'$MA0',
'$MA1',
'$MA2',
'$MA3',
'$MB',
'$MB0',
'$MB1',
'$MB2',
'$MB3',
'$MC',
'$MC0',
'$MC1',
'$MC2',
'$MC3',
'$MovePortPrice',
'$MSericeBathPrice',
'$MSNote0',
'$MSNote1',
'$MSNote2',
'$MGPrice',
'$MSTOTAL',
'$SService0',
'$SService1',
'$SService2',
'$SService3',
'$SService4',
'$SSName0',
'$SSName1',
'$SSName2',
'$SSName3',
'$SSName4',
'$SSNote0',
'$SSNote1',
'$SSNote2',
'$SSNote3',
'$SSNote4',
'$SSUnit0',
'$SSUnit1',
'$SSUnit2',
'$SSUnit3',
'$SSUnit4',
'$SSQut0',
'$SSQut1',
'$SSQut2',
'$SSQut3',
'$SSQut4',
'$SSUPrice0',
'$SSUPrice1',
'$SSUPrice2',
'$SSUPrice3',
'$SSUPrice4',
'$SSPrice0',
'$SSPrice1',
'$SSPrice2',
'$SSPrice3',
'$SSPrice4',
'$SSTOTAL',
'$TOTAL',
'$is_VAT',
'$VAT',
'$VAT_TOTAL',
'$Status'
)";

?>