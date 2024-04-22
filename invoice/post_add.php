<?php    
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php");   
$today = date("Y-m-d H:i:s"); 
$maxID=1;
if(isset($_POST['save'])) {
#########################################################################
#########################################################################
#######################  Functions & Class  #############################
#########################################################################
#########################################################################

include_once("../include/js/Hijri_GregorianConvert.class");
function TGH($BDate){
	// TGH() function used to seprate the Date and Time to convert  Gregorian to Hijri
	//  (T)ime(G)regorian(H)ijri = TGH()
	$GDate= date("d/m/Y", strtotime($BDate)); 				// Format the Date to Day/Month/Year
	$DateConv=new Hijri_GregorianConvert;					// New Opject for the class
	$format="DD/MM/YYYY";									// Using Format
	$HDate= $DateConv->GregorianToHijri($GDate,$format);	// Convert Gregorian Date to Hijri Date
	$TDate= date("H:i", strtotime($BDate));					// Format the Date to Houer:Minits
	$Date0 = intval(date('Y', strtotime($HDate)));
	if($Date0<1444){
		$HDate='';
		$GDate='';
	}   
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
	$Periods =  (ceil ($numberDays /(60*60*24))) ;	//Round numberDays up 
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
		$MAPrice=intval($Days*250);}
	if ($SWeight>3000 ){
		// if Ship Weight > 3000
		$MAPrice=intval($Days*500);}
	return ($MAPrice);	
	/*
	How to use MSA Function:
	echo MSA($ShipWeight,$AnchorageDays);
	*/
}


 
 if($AfterMarch==1)
		{ 
//  $AfterMarch= 1
			// $MSericeBathPrice=MSB($ShipWeight,$MSFraction2,$PeriodDays); 

			function MSB($SWeight,$STFactor,$Days){
			// MSP() function used to Callculate MService2 Only
			// $STFactor for Service Type Factor 
			// $Days for Period Days
			if ($SWeight<=500)						// if Ship Weight < 500 
				{$MBPrice=($Days*500)*$STFactor; }
			if ($SWeight>500 && $SWeight<=3000 )		// if Ship Weight > 500 and Weight < 3000 
				{$MBPrice=($Days*1000)*$STFactor;}
			if ($SWeight>3000 && $SWeight<=15000 ) 		// if Ship Weight > 3000 and Weight < 15000 
				{$MBPrice=($Days*1500)*$STFactor;} 
			if ($SWeight>15000 )					//if Ship Weight > 15000
				{$MBPrice=($Days*2000)*$STFactor;}
			return floatval($MBPrice);	
			/*
			How to use MSB Function:
			echo MSB($ShipWeight,$ServiceTypeFactor,$PeriodDays);
			*/
			}
			function MSP($SWeight,$STFactor){
				// MSP() function used to Callculate MService0 and MService1 Only
				// $STFactor for Service Type Factor  
			  $STFactor = floatval($STFactor);
				if ($SWeight<=500){
					// if Ship Weight < 500 
					$cell1=(2500)*$STFactor;
					$cell2="";
					$cell3="";
					$cell4=""; 
					$MPrice=$cell1;}
				if ($SWeight>500 && $SWeight<=3000 ){
					// if Ship Weight > 500 and Weight < 3000 
					$cell1=2500*$STFactor;
					$cell2=(($SWeight-500)*1.15)*$STFactor;
					$cell3="";
					$cell4="";
					$MPrice=$cell1+$cell2;}
				if ($SWeight>3000 && $SWeight<=15000 ){
					// if Ship Weight > 3000 and Weight < 15000 
					$cell1=2500*$STFactor;
					$cell2=2875*$STFactor;
					$cell3=(($SWeight-3000)*0.17)*$STFactor;
					$cell4="";
					$MPrice=$cell1+$cell2+$cell3;}
				if ($SWeight>15000 ){
					// if Ship Weight > 15000  
					$cell1=2500*$STFactor;
					$cell2=2875*$STFactor;
					$cell3=2040*$STFactor;
					$cell4=(($SWeight-15000)*0.1)*$STFactor;
					$MPrice=$cell1+$cell2+$cell3+$cell4;}
					
				return array(floatval($cell1),floatval($cell2),floatval($cell3),floatval($cell4),floatval($MPrice));	
			}
		}
		else
		{ 	
			// $MSericeBathPrice=MSB($ShipWeight,$MSFraction2,$PeriodDays); 
//  $AfterMarch= 0
			function MSB($SWeight,$STFactor,$Days){
				// MSP() function used to Callculate MService2 Only
				// $STFactor for Service Type Factor 
				// $Days for Period Days
				if ($SWeight<=500)						// if Ship Weight < 500 
					{$MBPrice=($Days*500)*$STFactor; }
				if ($SWeight>500 && $SWeight<=3000 )		// if Ship Weight > 500 and Weight < 3000 
					{$MBPrice=($Days*1100)*$STFactor;}
				if ($SWeight>3000 && $SWeight<=15000 ) 		// if Ship Weight > 3000 and Weight < 15000 
					{$MBPrice=($Days*1500)*$STFactor;} 
				if ($SWeight>15000 )					//if Ship Weight > 15000
					{$MBPrice=($Days*2200)*$STFactor;}
				return floatval($MBPrice);	
				/*
				How to use MSB Function:
				echo MSB($ShipWeight,$ServiceTypeFactor,$PeriodDays);
				*/
			}

				function MSP($SWeight,$STFactor){
					// MSP() function used to Callculate MService0 and MService1 Only
					// $STFactor for Service Type Factor  
				  $STFactor = floatval($STFactor);
					if ($SWeight<=500){
						// if Ship Weight < 500 
						$cell1=(500)*$STFactor;
						$cell2="";
						$cell3="";
						$cell4=""; 
						$MPrice=$cell1;}
					if ($SWeight>500 && $SWeight<=3000 ){
						// if Ship Weight > 500 and Weight < 3000 
						$cell1=500*$STFactor;
						$cell2=(($SWeight-500)*1.0)*$STFactor;
						$cell3="";
						$cell4="";
						$MPrice=$cell1+$cell2;}
					if ($SWeight>3000 && $SWeight<=15000 ){
						// if Ship Weight > 3000 and Weight < 15000 
						$cell1=500*$STFactor;
						$cell2=2500*$STFactor;
						$cell3=(($SWeight-3000)*0.15)*$STFactor;
						$cell4="";
						$MPrice=$cell1+$cell2+$cell3;}
					if ($SWeight>15000 ){
						// if Ship Weight > 15000  
						$cell1=500*$STFactor;
						$cell2=2500*$STFactor;
						$cell3=1800*$STFactor;
						$cell4=(($SWeight-15000)*0.1)*$STFactor;
						$MPrice=$cell1+$cell2+$cell3+$cell4;}
						
					return array(floatval($cell1),floatval($cell2),floatval($cell3),floatval($cell4),floatval($MPrice));	
					}
		
		}
 
 
 
function VWS($SWeight)
{
	if($SWeight<500){return 1;}
	if($SWeight>500 && $SWeight<=3000){return 2;}
	if($SWeight>3000 && $SWeight<=15000){return 3;}
	if($SWeight>15000){return 4;}
}

$MovePort1=$MovePort2=$MovePort3=''; 
$VAT=$Actions= 0;
$is_VAT=$ADateX=$ADateY=$AncX=$AncY=1;
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
        $ShipWeight                 =intval($ship['Weight']); 
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

$ServiceType 	=1;
$ServiceTypeFactor 	=intval($ServiceType);
	if($ServiceTypeFactor==1){$ServiceTypeName='عادية';}
	if($ServiceTypeFactor>1){$ServiceTypeName='خاصة';}
	if($ServiceTypeFactor<1){$ServiceTypeName='لم تقدم له قاطرة';}

  $VWeight=VWS($ShipWeight); 
if($_POST['InvoiceDate']==""){$InvoiceDate=date("Y-m-d H:i:s", time());}else{$InvoiceDate=$_POST['InvoiceDate']; }
if($debug){echo "InvoiceDate :".$InvoiceDate."<br>";}
    $InvoiceDateX 	=TGH($InvoiceDate);
    $InvoiceDateT 	=$InvoiceDateX[0];
    $InvoiceDateG 	=$InvoiceDateX[1];
    $InvoiceDateH 	=$InvoiceDateX[2]; 

   
if($_POST['ArrivalDate']==""){$ArrivalDate=NULL;$ADateX=0;}else{$ArrivalDate=$_POST['ArrivalDate']; } 
if($debug){echo "ArrivalDate :".$ArrivalDate."<br>";} 
    $ArrivalDateX 	=TGH($ArrivalDate);
    $ArrivalDateT 	=$ArrivalDateX[0];
    $ArrivalDateG 	=$ArrivalDateX[1];
    $ArrivalDateH 	=$ArrivalDateX[2];

if($_POST['DepartureDate']==""){$DepartureDate=NULL;$ADateY=0;}else{$DepartureDate=$_POST['DepartureDate']; } 
if($debug){echo "DepartureDate :".$DepartureDate."<br>";}
    $DepartureDateX 	=TGH($DepartureDate);
    $DepartureDateT 	=$DepartureDateX[0];
    $DepartureDateG 	=$DepartureDateX[1];
    $DepartureDateH 	=$DepartureDateX[2]; 
    if($ADateX*$ADateY){ $PeriodDays= PeriodDay($ArrivalDate,$DepartureDate);}else{$PeriodDays=1;}

if($debug){echo "<b>ArrivalDate : </b>".$ArrivalDate."<br>";}
if($debug){echo "<b>DepartureDate : </b>".$DepartureDate."<br>";}
if($debug){echo "<b>ArrivalDays : </b>".$PeriodDays."<br>";}

if(isset($_POST['AnchorageEntry'])){$AnchorageEntry=$_POST['AnchorageEntry']; }else{$AnchorageEntry=NULL;$AncX=0;}
if($debug){echo "AnchorageEntry :".$AnchorageEntry."<br>";} 
    $AnchorageEntryX 	=TGH($AnchorageEntry);
    $AnchorageEntryT 	=$AnchorageEntryX[0];
    $AnchorageEntryG 	=$AnchorageEntryX[1];
    $AnchorageEntryH 	=$AnchorageEntryX[2];
    
if(isset($_POST['AnchorageLeave'])){$AnchorageLeave=$_POST['AnchorageLeave']; }else{$AnchorageLeave=NULL;$AncY=0;}
if($debug){echo "AnchorageLeave :".$AnchorageLeave."<br>";}  
    $AnchorageLeaveX 	=TGH($AnchorageLeave);
    $AnchorageLeaveT 	=$AnchorageLeaveX[0];
    $AnchorageLeaveG 	=$AnchorageLeaveX[1];
    $AnchorageLeaveH 	=$AnchorageLeaveX[2];
    if($AncX*$AncY){$AnchorageDays= PeriodDay($AnchorageEntry,$AnchorageLeave);}else{$AnchorageDays=0;}
    
if(isset($_POST['AnchorageDays'])){$AnchorageDays=intval($_POST['AnchorageDays']); } 
if($debug){echo "<b>AnchorageDays : </b>".$AnchorageDays."<br>";}   

$MSericeAnchoragePrice= MSA($ShipWeight,$AnchorageDays); 
if($debug){echo "<b>ShipWeight : </b>".$ShipWeight."<br>";}  
if($debug){echo "<b>AnchorageDays : </b>".$AnchorageDays."<br>";}  
if($debug){echo "<b>MSericeAnchoragePrice : </b>".$MSericeAnchoragePrice."<br>";}  

 
 
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
  if(isset($_POST['MService1'])){
    if (($_POST['MService1'] == 'on'))
      {$MService1 = 1;}
    else{$MService1=0;}}
  else{$MService1=0;}

if(isset($_POST['MService2'])){if (($_POST['MService2'] == 'on')){$MService2 = 1;}else{$MService2=0;}}else{$MService2=0;}
if(isset($_POST['MService3'])){
  if($debug){echo "<b>_POST['MService3'] </b>:".$_POST['MService3']."<br>";}
  if (($_POST['MService3'] == 'on'))
    {$MService3 = 1;}
    else{$MService3=0;}
  }
  else{$MService3=0;}

 
if($debug){echo "MService1 :".$MService1."<br>";}
if($debug){echo "MService2 :".$MService2."<br>";}
if($debug){echo "MService3 :".$MService3."<br>";}
 
 
if($_POST['MSFraction1']){$MSFraction1 = floatval($_POST['MSFraction1']); }else{$MSFraction1 = 1; }
if($_POST['MSFraction2']){$MSFraction2 = floatval($_POST['MSFraction2']); }else{$MSFraction2 = 1; }
if($_POST['MSFraction3']){$MSFraction3 = floatval($_POST['MSFraction3']); }else{$MSFraction3 = 1; }


// Marine Services 1 
//	$MService[1] 
    if ($MService1==1)
    {	$MServiceIn=MSP($ShipWeight,$MSFraction1);
        $CA0=floatval($MServiceIn[0])*floatval($ServiceTypeFactor);
        $CA1=floatval($MServiceIn[1])*floatval($ServiceTypeFactor);
        $CA2=floatval($MServiceIn[2])*floatval($ServiceTypeFactor);
        $CA3=floatval($MServiceIn[3])*floatval($ServiceTypeFactor);
        $MSericeInPrice =floatval($MServiceIn[4])*($ServiceTypeFactor);
        if($debug){echo "<b>CA : </b>".$CA0." - ".$CA1." - ".$CA2." - ".$CA3." <br>";}
        if($debug){echo "<b>MSericeInPrice : </b>".$MSericeInPrice."<br>";}
    }else
    {	$CA0=$CA1=$CA2=$CA3=$MSericeInPrice="";}
    
// Marine Services 2 
//	$MService[2]
    if ($MService2==1)
    {	$MServiceOut=MSP($ShipWeight,$MSFraction2);
        $CB0=floatval($MServiceOut[0])*floatval($ServiceTypeFactor);
        $CB1=floatval($MServiceOut[1])*floatval($ServiceTypeFactor);
        $CB2=floatval($MServiceOut[2])*floatval($ServiceTypeFactor);
        $CB3=floatval($MServiceOut[3])*floatval($ServiceTypeFactor);
        $MSericeOutPrice =floatval($MServiceOut[4])*floatval($ServiceTypeFactor);
        if($debug){echo "<b>CB : </b>".$CB0." - ".$CB1." - ".$CB2." - ".$CB3." <br>";}
        if($debug){echo "<b>MSericeOutPrice : </b>".$MSericeOutPrice."<br>";}
    }else
    {	$CB0=$CB1=$CB2=$CB3=$MSericeOutPrice="";}
    
    

//  Marine Service 3  IS FOR MovePort1 AND MovePort2 MovePort3
//	$MovePort 
$MovePort1 =$_POST['MovePort1'];  
$countMovePort1 = count(explode(',',$MovePort1)) ; 
if($debug){echo "<b>countMovePort1 : </b>".$countMovePort1."<br>";}
 
    if( $MovePort1!="") 
        { 
            $MAX=MSP($ShipWeight,1);
            $MA0=(floatval($MAX[0])*$countMovePort1)/2 ;
            $MA1=(floatval($MAX[1])*$countMovePort1)/2 ;
            $MA2=(floatval($MAX[2])*$countMovePort1)/2 ;
            $MA3=(floatval($MAX[3])*$countMovePort1)/2 ;
            $MA=$MA0+$MA1+$MA2+$MA3;
            $XMove=$MovePort1;
            if($debug){echo "XMove :".$XMove."<br>";}
        } else{$MA=$MA0=$MA1=$MA2=$MA3="";} 
    $MovePortPrice=floatval($MA) ; 
    if($debug){echo "<b>MA : </b>".$MA."<br>";}  
    if($debug){echo "<b>MovePortPrice : </b>".$MovePortPrice."<br>";}
       
//  Marine Service 4  IS FOR USING PORT BATH
//$MService[3] 


if ($MService3==1) 	{ 
    $MSericeBathPrice=MSB($ShipWeight,$MSFraction3,$PeriodDays); 
	
    if($debug){echo "<b>PeriodDays : </b>".$PeriodDays."<br>";}
    if($debug){echo "<b>MSFraction3 : </b>".$MSFraction3."<br>";}
    if($debug){echo "<b>ShipWeight : </b>".$ShipWeight."<br>";}
    if($debug){echo "<b>MSericeBathPrice : </b>".$MSericeBathPrice."<br>";}
    }else{$MSericeBathPrice=0;} 
    $MSNote1                   =$_POST['MSNote1'];
    $MSNote2                   =$_POST['MSNote2'];
    $MSNote3                   =$_POST['MSNote3'];
    if($debug){echo "<b>MSericeBathPrice : </b>".$MSericeBathPrice."<br>";}
$MGPrice=floatval($MSericeInPrice)+floatval($MSericeOutPrice)+floatval($MovePortPrice);

if($debug){echo "<b>MSericeInPrice : </b>".$MSericeInPrice."<br>";}
if($debug){echo "<b>MSericeOutPrice : </b>".$MSericeOutPrice."<br>";}
if($debug){echo "<b>MSericeBathPrice : </b>".$MSericeBathPrice."<br>";}
if($debug){echo "<b>MovePortPrice : </b>".$MovePortPrice."<br>";}
if($debug){echo "<b>MSericeAnchoragePrice : </b>".$MSericeAnchoragePrice."<br>";}
########################  MSTOTAL  ###############################
$MSTOTAL=floatval($MSericeInPrice)+floatval($MSericeOutPrice)+floatval($MSericeBathPrice)+floatval($MovePortPrice)+floatval($MSericeAnchoragePrice);


#########################################################################
#########################################################################
########################  Special Service ###############################
#########################################################################
#########################################################################

 
    $vat=floatval($vat/100); 
    $query = "SELECT * FROM `services` ORDER BY `Service_ID` ASC"; 
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
      if (($_POST['SService1'])==""){$SSQut1=0;}
        else{$SSQut1=floatval($_POST['SSQut1']);}
      if (($_POST['SSUPrice1'])==""){$SSUPrice1=floatval($rowSSVCost[$SService1]);}
        else{$SSUPrice1=floatval($_POST['SSUPrice1']);} 
  		$SSUnit1    =$rowSSUnit[$SService1]; 
  		$SSNote1    =$_POST['SSNote1'];
  		$SSPrice1   =$SSQut1*$SSUPrice1 ; 
		}
    else  {$SSPrice1=$SService1=$SSName1=$SSQut1=$SSUPrice1=$SSUnit1=$SSNote1="";}

    ########################  SService2  ###############################
    if (($_POST['SService2'])!="")
  		{
  	  $SSName2    = $rowSSVDescription[$SService2];
      if (($_POST['SService2'])==""){$SSQut2=0;}else{$SSQut2=floatval($_POST['SSQut2']);}
      if (($_POST['SSUPrice2'])==""){$SSUPrice2=floatval($rowSSVCost[$SService2]);}else{$SSUPrice2=floatval($_POST['SSUPrice2']);} 
  		$SSUnit2    =$rowSSUnit[$SService2]; 
  		$SSNote2    =$_POST['SSNote2'];
  		$SSPrice2   =$SSQut2*$SSUPrice2 ;

		}
    else  {$SSPrice2=$SService2=$SSName2=$SSQut2=$SSUPrice2=$SSUnit2=$SSNote2="";}

    ########################  SService3  ###############################
    if (($_POST['SService3'])!="")
  		{
  		$SSName3    = $rowSSVDescription[$SService3];      
      if (($_POST['SService3'])==""){$SSQut3=0;}else{$SSQut3=floatval($_POST['SSQut3']);}
      if (($_POST['SSUPrice3'])==""){$SSUPrice3=floatval($rowSSVCost[$SService3]);}else{$SSUPrice3=floatval($_POST['SSUPrice3']);} 
  		$SSUnit3    =$rowSSUnit[$SService3]; 
  		$SSNote3    =$_POST['SSNote3'];
  		$SSPrice3   =$SSQut3*$SSUPrice3 ; 

		}
    else  {$SSPrice3=$SService3=$SSName3=$SSQut3=$SSUPrice3=$SSUnit3=$SSNote3="";}    

    ########################  SService4  ###############################
    if (($_POST['SService4'])!="")
  		{
  		$SSName4    = $rowSSVDescription[$SService4];
  		if (($_POST['SService4'])==""){$SSQut4=0;}else{$SSQut4=floatval($_POST['SSQut4']);}
      if (($_POST['SSUPrice4'])==""){$SSUPrice4=floatval($rowSSVCost[$SService4]);}else{$SSUPrice4=floatval($_POST['SSUPrice4']);} 
  		$SSUnit4    =$rowSSUnit[$SService4]; 
  		$SSNote4    =$_POST['SSNote4'];
  		$SSPrice4   =$SSQut4*$SSUPrice4 ;

		}
    else  {$SSPrice4=$SService4=$SSName4=$SSQut4=$SSUPrice4=$SSUnit4=$SSNote4="";}    

    ########################  SService5  ###############################
    if (($_POST['SService5'])!="")
  		{
  		$SSName5    = $rowSSVDescription[$SService5];
      if (($_POST['SService5'])==""){$SSQut5=0;}else{$SSQut5=floatval($_POST['SSQut5']);}
      if (($_POST['SSUPrice5'])==""){$SSUPrice5=floatval($rowSSVCost[$SService5]);}else{$SSUPrice5=floatval($_POST['SSUPrice5']);} 
  		$SSUnit5    =$rowSSUnit[$SService5]; 
  		$SSNote5    =$_POST['SSNote5'];
  		$SSPrice5   =$SSQut5*$SSUPrice5 ;

      
		}
    else  {$SSPrice5=$SService5=$SSName5=$SSQut5=$SSUPrice5=$SSUnit5=$SSNote5="";}    

      if($debug){echo "<br><b>SSName1 :</b>".$SSName1.
                      "<br><b>SSQut1 :</b>".$SSQut1.
                      "<br><b>SSUPrice1 :</b>".$SSUPrice1.
                      "<br><b>SSUnit1 :</b>".$SSUnit1.
                      "<br><b><u>SSPrice1 :</u></b>".$SSPrice1.

                      "<br><b>SSName2 :</b>".$SSName2.
                      "<br><b>SSQut2 :</b>".$SSQut2.
                      "<br><b>SSUPrice2 :</b>".$SSUPrice2.
                      "<br><b>SSUnit2 :</b>".$SSUnit2.
                      "<br><b><u>SSPrice2 :</u></b>".$SSPrice2.

                      "<br><b>SSName3 :</b>".$SSName3.
                      "<br><b>SSQut3 :</b>".$SSQut3.
                      "<br><b>SSUPrice3 :</b>".$SSUPrice3.
                      "<br><b>SSUnit3 :</b>".$SSUnit3.
                      "<br><b><u>SSPrice3 :</u></b>".$SSPrice3.

                      "<br><b>SSName4 :</b>".$SSName4.
                      "<br><b>SSQut4 :</b>".$SSQut4.
                      "<br><b>SSUPrice4 :</b>".$SSUPrice4.
                      "<br><b>SSUnit4 :</b>".$SSUnit4.
                      "<br><b><u>SSPrice4 :</u></b>".$SSPrice4.

                      "<br><b>SSName5 :</b>".$SSName5.
                      "<br><b>SSQut5 :</b>".$SSQut5.
                      "<br><b>SSUPrice5 :</b>".$SSUPrice5.
                      "<br><b>SSUnit5 :</b>".$SSUnit5.
                      "<br><b><u>SSPrice5 :</u></b>".$SSPrice5."<br>";}

    ########################  SSTOTAL  ###############################
    $SSTOTAL=floatval($SSPrice1)+floatval($SSPrice2)+floatval($SSPrice3)+floatval($SSPrice4)+floatval($SSPrice5) ;
    
 

#########################################################################
#########################################################################
########################  Invoice Totals  ###############################
#########################################################################
#########################################################################

$TOTAL=$MSTOTAL+$SSTOTAL ;
$VAT=floatval(($TOTAL*$ShipVAT)*($vat));
$VAT_TOTAL=floatval($VAT+$TOTAL);

    if($debug){echo "<b>M. TOTAL :</b>".$MSTOTAL."<br>";}
    if($debug){echo "<b>S. TOTAL :</b>".$SSTOTAL."<br>";}
    if($debug){echo "<b>TOTAL :</b>".$TOTAL."<br>";}
    if($debug){echo "<b>VAT :</b>".$VAT."<br>";}
    if($debug){echo "<b>G TOTAL:</b>".$VAT_TOTAL."<br>";}
	
		
	// only ancorage services 
	if((intval($MSericeInPrice)+intval($MSericeOutPrice)+intval($MSericeBathPrice))==0){
		$PeriodDays='';
	}
#########################################################################
#########################################################################
###########################  SQL INSERT #################################
#########################################################################
#########################################################################


$SQL_INSERT="INSERT INTO `invoice` 
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
  `MovePort1`, 
  `MovePort2`, 
  `MovePort3`, 
  `TripNo`, 
  `DockingNo`, 
  `RouteNo`, 
  `ShiftedNo`, 
  `Reason`, 
  `Note`, 
  `MSFraction1`, 
  `MSFraction2`, 
  `MSFraction3`, 
  `MService1`, 
  `MService2`, 
  `MService3`, 
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
  `MovePortPrice`, 
  `MSericeBathPrice`, 
  `MSNote1`, 
  `MSNote2`, 
  `MSNote3`, 
  `MGPrice`, 
  `MSTOTAL`, 
  `SService1`, 
  `SService2`, 
  `SService3`, 
  `SService4`, 
  `SService5`, 
  `SSName1`, 
  `SSName2`, 
  `SSName3`, 
  `SSName4`, 
  `SSName5`, 
  `SSNote1`, 
  `SSNote2`, 
  `SSNote3`, 
  `SSNote4`, 
  `SSNote5`, 
  `SSUnit1`, 
  `SSUnit2`, 
  `SSUnit3`, 
  `SSUnit4`, 
  `SSUnit5`, 
  `SSQut1`, 
  `SSQut2`, 
  `SSQut3`, 
  `SSQut4`, 
  `SSQut5`, 
  `SSUPrice1`, 
  `SSUPrice2`, 
  `SSUPrice3`, 
  `SSUPrice4`, 
  `SSUPrice5`, 
  `SSPrice1`, 
  `SSPrice2`, 
  `SSPrice3`, 
  `SSPrice4`, 
  `SSPrice5`, 
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
'$MovePort1',
'$MovePort2',
'$MovePort3',
'$TripNo',
'$DockingNo',
'$RouteNo',
'$ShiftedNo',
'$Reason',
'$Note',
'$MSFraction1',
'$MSFraction2',
'$MSFraction3',
'$MService1',
'$MService2',
'$MService3',
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
'$MovePortPrice',
'$MSericeBathPrice',
'$MSNote1',
'$MSNote2',
'$MSNote3',
'$MGPrice',
'$MSTOTAL',
'$SService1',
'$SService2',
'$SService3',
'$SService4',
'$SService5',
'$SSName1',
'$SSName2',
'$SSName3',
'$SSName4',
'$SSName5',
'$SSNote1',
'$SSNote2',
'$SSNote3',
'$SSNote4',
'$SSNote5',
'$SSUnit1',
'$SSUnit2',
'$SSUnit3',
'$SSUnit4',
'$SSUnit5',
'$SSQut1',
'$SSQut2',
'$SSQut3',
'$SSQut4',
'$SSQut5',
'$SSUPrice1',
'$SSUPrice2',
'$SSUPrice3',
'$SSUPrice4',
'$SSUPrice5',
'$SSPrice1',
'$SSPrice2',
'$SSPrice3',
'$SSPrice4',
'$SSPrice5',
'$SSTOTAL',
'$TOTAL',
'$is_VAT',
'$VAT',
'$VAT_TOTAL',
'$Status'
)";



$dbop->query($SQL_INSERT); 
}

 
$aqlr='SELECT MAX(InvoiceID) AS `LastID` FROM `invoice` LIMIT 1; ';
$maxIDrs = $dbop->query($aqlr)->fetchAll();   
    foreach ($maxIDrs as $maxIDr) { $maxID = $maxIDr['LastID'];  }

$alog_note = strval("Inovice ".$maxID."MSTOTAL:".$MSTOTAL." + SSTOTAL:".$SSTOTAL."= TOTAL:".$TOTAL."  (VAT)= ".$VAT." VAT_TOTAL ".$VAT_TOTAL." " );    
$SQL_activitylog="INSERT INTO `activitylog` 
	( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
	VALUE ('".$folder_name."' ,'".$maxID."' ,'Add New Invoice',	'".$username_now."' ,'".$alog_note."' 	) ;";
$dbop->query($SQL_activitylog); 
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo ucwords(basename(dirname(__FILE__)));?></title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/dropzone/min/dropzone.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../include/css/jimp.css">
  <link rel="icon" type="image/x-icon" href="../include/img/favicon.ico">
</head>

<body class="hold-transition sidebar-mini"> 
<div class="wrapper">
  <!-- Navbar -->
  <?php include("../include/nav.php")?>
  <?php include("../include/aside.php")?>
  <?php include("../include/post.php")?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content --> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   
        <div class="container-fluid">
          <div class="row">
            <div class="col-12"> 
              <div class="card">
                <div class="card-header">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1>Invoice JD-<?php echo $maxID;?></h1>
                      </div>
                      <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Invoice</li>
                      </ol>
                      </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-sm-6"> 
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        
                          
						  
<a href="add.php" class="btn btn-app-x">  <i class="fas fa-plus"></i>     </a>								
<a href="edit.php?id=<?php echo $maxID;?>" class="btn btn-app-x">  <i class="fas fa-pen-to-square"></i>     </a>								
<a href="../reports/invoice.php?id=<?php echo $maxID;?>" class="btn btn-app-x">  <i class="fas fa-file-pdf"></i>      </a>	
 		 
                      </ol>
                    </div>
                  </div> 
                </div> 
              </div> 
            </div>    
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <div class="row mb-2">
                <div class="col-sm-10"> 
                <h5> Note:</h5> The invoice details below are intended for review. Kindly approve before printing becomes available.
                </div>
                <div class="col-sm-2">      
					

                </div>

              </div> 
            </div> 
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> <?php echo $AgentNameAr;?> / <?php echo $AgentNameEn;?>
                    <small class="float-right">Date: <?php echo $InvoiceDate;?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info"> 
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #JD-<?php echo $maxID;?></b><br> 
                    <b>Vessel Name:<span class="tab"></span></b>  <?php echo $ShipName;?> <br> 
                    <b>Araival Date:<span class="tab"></span></b><?php echo $ArrivalDate;?><br>
                    <b>Departure Date:<span class="tab"></span></b> <?php echo $DepartureDate;?><br>
                    <b>Vessel Port Stay:<span class="tab"></span></b> <?php echo $PeriodDays;?> <br> 
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                    <b>G.R.T.:<span class="tab"></span></b>       <?php echo $ShipWeight;?> <br>
                    <b>Trip No:<span class="tab"></span></b>      <?php echo $TripNo;?> <br>  
                    <b>Route No:</b>                              <?php echo $RouteNo;?> <br>
                    <b>Trip No:</b>                               <?php echo $TripNo;?> <br> 
                    <b>Docking dock</b>                           <?php echo $DockingNo;?> <br>
                    <span class="tab"></span>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col"> 
                     
                    <b>Anchor in Date:<span class="tab"></span></b>     <?php echo $AnchorageEntry;?><br>
                    <b>Anchor out Date:<span class="tab"></span></b>    <?php echo $AnchorageLeave;?><br>
                    <b>Anchor Period Stay:<span class="tab"></span></b> <?php echo $AnchorageDays;?>  <br>
                   
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <hr style="border-top: 2px solid black;">
               <div class="row">
                <div class="col-6 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr> 
                      <th>Service Type</th>
                      <th>Description </th>  
                      <th>Subtotal</th> 
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($MSericeInPrice){?>
                      <tr> 
                          <td>Araval Fees</td> 
                          <td style="text-align: right;"> اجرة القدوم </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeInPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MSericeOutPrice){?>
                      <tr> 
                          <td>Departure Fees</td> 
                          <td style="text-align: right;"> اجرة المغادرة </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeOutPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MovePortPrice){?>
                      <tr> 
                          <td>Move Port Fees</td> 
                          <td style="text-align: right;">  اجرة الإنتقال </td> 
                          <td style="text-align: right;"><?php echo number_format($MovePortPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MSericeBathPrice){?>
                      <tr> 
                          <td>Port Fees</td> 
                          <td style="text-align: right;">  اجرة الرصيف </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeBathPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MSericeAnchoragePrice){?>
                      <tr> 
                          <td>Anchorage Fees</td> 
                          <td style="text-align: right;"> اجرة المخطاف </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeAnchoragePrice, 2);?></td>
                      </tr>
                    <?php  } 
                      if($SSPrice1){
							$query = "SELECT `DescriptionEn`,`code` FROM `services` WHERE `Service_ID`=".$SService1." LIMIT 1;"; 
									$DescriptionEns = $dbop->query($query)->fetchAll();   
									foreach ($DescriptionEns as $DescriptionEn_row) {    
							$DescriptionEn= $DescriptionEn_row['DescriptionEn'];
							$code= $DescriptionEn_row['code'];
							}?>
                      <tr> 
                          <td><?php echo '['.$code.'] '.$DescriptionEn;?></td>
                          <td style="text-align: right;"><?php echo $SSName1;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice1, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice2){
							$query = "SELECT `DescriptionEn`,`code` FROM `services` WHERE `Service_ID`=".$SService2." LIMIT 1;"; 
									$DescriptionEns = $dbop->query($query)->fetchAll();   
									foreach ($DescriptionEns as $DescriptionEn_row) {    
							$DescriptionEn= $DescriptionEn_row['DescriptionEn'];
							$code= $DescriptionEn_row['code'];
							}?>
                      <tr> 
                          <td><?php echo '['.$code.'] '.$DescriptionEn;?></td>
                          <td style="text-align: right;"><?php echo $SSName2;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice2, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice3){
							$query = "SELECT `DescriptionEn`,`code` FROM `services` WHERE `Service_ID`=".$SService3." LIMIT 1;"; 
									$DescriptionEns = $dbop->query($query)->fetchAll();   
									foreach ($DescriptionEns as $DescriptionEn_row) {    
							$DescriptionEn= $DescriptionEn_row['DescriptionEn'];
							$code= $DescriptionEn_row['code'];
							}?>
                      <tr> 
                          <td><?php echo '['.$code.'] '.$DescriptionEn;?></td>
                          <td style="text-align: right;"><?php echo $SSName3;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice3, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice4){
							$query = "SELECT `DescriptionEn`,`code` FROM `services` WHERE `Service_ID`=".$SService4." LIMIT 1;"; 
									$DescriptionEns = $dbop->query($query)->fetchAll();   
									foreach ($DescriptionEns as $DescriptionEn_row) {    
							$DescriptionEn= $DescriptionEn_row['DescriptionEn'];
							$code= $DescriptionEn_row['code'];
							}?>
                      <tr> 
                          <td><?php echo '['.$code.'] '.$DescriptionEn;?></td>
                          <td style="text-align: right;"><?php echo $SSName4;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice4, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice5){
							$query = "SELECT `DescriptionEn`,`code` FROM `services` WHERE `Service_ID`=".$SService5." LIMIT 1;"; 
									$DescriptionEns = $dbop->query($query)->fetchAll();   
									foreach ($DescriptionEns as $DescriptionEn_row) {    
							$DescriptionEn= $DescriptionEn_row['DescriptionEn'];
							$code= $DescriptionEn_row['code'];
							}?>
                      <tr> 
                          <td><?php echo '['.$code.'] '.$DescriptionEn;?></td>
                          <td style="text-align: right;"><?php echo $SSName5;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice5, 2);?></td>
                      </tr><?php }  ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>

              <div class="row">
                <!-- accepted payments column -->
                
                
                <div class="col-6">
                <hr style="border-top: 2px solid black;">
                  
                <p class="lead">Invoice Summary</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%"><b>Service</b></th>
                        <td style="text-align: right;"><b>SAR</b></td>
                      </tr>
                      <tr>
                        <th style="width:50%">Marine Services:</th>
                        <td style="text-align: right;"><?php echo number_format($MSTOTAL, 2);?></td>
                      </tr>
                      <tr>
                        <th style="width:50%">Special Service:</th>
                        <td style="text-align: right;"><?php echo number_format($SSTOTAL, 2);?></td>
                      </tr>
                      <tr>
                        <th style="width:50%">Sub Total:</th>
                        <td style="text-align: right;"><?php echo number_format($TOTAL, 2);?></td>
                      </tr>
                      <tr>
                        <th>VAT (15%)</th>
                        <td style="text-align: right;"><?php echo number_format($VAT, 2);?></td>
                      </tr> 
                      <tr>
                        <th>Grand Total:</th>
                        <td style="text-align: right;"><b><?php echo number_format($VAT_TOTAL, 2);?><b></td>
                      </tr>
                    </table>
                  </div>
                  
                </div> 

                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <!-- 
                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  -->  
                    <form action="approve.php" method="POST">
                      <input type="hidden" name="VAT_TOTAL" value="<?php echo $VAT_TOTAL;?>"> 
                      <input type="hidden" name="maxID" value="<?php echo $maxID;?>"> 
                      <button type="submit" name="approved"  class="btn btn-success float-right" >
                        <i class="far fa-credit-card"></i> Approve
                      </button>
                    </form>
                  <!-- 
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- /.content-wrapper -->
  	<?php include('../include/footer.php');?>

	<aside class="control-sidebar control-sidebar-dark"> </aside>
</div>
<!-- ./wrapper --> 
	<script src="<?php echo $Homepath;?>adminlte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/select2/js/select2.full.min.js"></script>
	<!-- Bootstrap4 Duallistbox -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/moment/moment.min.js"></script>
	<script src="<?php echo $Homepath;?>adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap color picker -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Bootstrap Switch -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- BS-Stepper -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
	<!-- dropzonejs -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/dropzone/min/dropzone.min.js"></script>   
	<!-- AdminLTE App -->
	<script src="<?php echo $Homepath;?>adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
$(function () {
  bsCustomFileInput.init();
});

$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

   
    //Date picker Date From todate
    $('#ClickInvoiceDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    });
    $('#ClickArrivalDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    }); 
    $('#ClickDepartureDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    });
    $('#ClickAnchorEntryDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    });
    $('#ClickAnchorLeaveDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    });
	

    //Date and time picker 
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'yyyy-mm-dd hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('yyyy-mm-dd') + ' - ' + end.format('yyyy-mm-dd'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
 


<script>
$(document).ready(function() {
  var i = 1;
  $('#dodaj-pozyc').click(function() { 
    $('#listap').append(
	'<!-- %%%%%%%%%%%%%%%%%%%% row List   %%%%%%%%%%%%%%%%%%%%%%%%  -->'+
	'<div class="row" id="lista-p-' + i + '">'+ 
		'<div class="col-1" >'+
			'<label>  &nbsp; </label>'+
				'<p>'+
      					'<button type="button"  name="remove' + i + '" id="' + i + '" class="col-0 col-form-label text-sm-center btn btn-outline-danger btn-sm btn_remove font-weight-bold">X</button>' +
				'</p>'+
		'</div> '+
		'<div class="col-3" >' +
			'<div class="form-group">'+
				'<label>Invoice#</label>'+
				'<input type="text" class="form-control" name="invoice'+ i + '"  autocomplete="off">'+ 
			'</div> '+
		'</div>'+ 
		'<div class="col-4">  '+
			'<div class="form-group">'+
				'<label>Invoice Date</label>'+
				'<input type="text" class="form-control" name="invoicedate'+ i + '"  autocomplete="off">'+ 
			'</div> '+
		'</div>'+ 
		'<div class="col-4"> '+
			'<div class="form-group">'+
				'<label>Amount</label>'+
				'<input type="text" class="form-control" name="amount'+ i + '"  > '+
			'</div> '+
		'</div> '+
	'</div> '
		 );
	 
if(i<15){i++;
	const box = document.getElementById('dodaj-pozyc'); 		
	box.style.display = 'block';
}else{ 
	const box = document.getElementById('dodaj-pozyc'); 		
	box.style.display = 'none';
}

    
  });
  $(document).on('click', '.btn_remove', function() {
    var id = $(this).attr("id");
    $('input[name="remove"]' + id).remove();
    $('#atrybut-ile-' + id + '').remove();
    $('#atrybut-nazwa-' + id+  '').remove();
    $('#lista-p-' + id).empty();
    $('#lista-p-' + id).html(""); 
  });
});

function approved() { 
  var txt;
  if (confirm("Approve invoice # <?php echo $maxID;?>")) {
    <?php 
      $Status=800;
      $SQL_APPROVED="UPDATE `invoice` SET 
          `Status`                   ='$Status',  
          WHERE  `InvoiceID`         ='$maxID'; " ;
          $dbop->query($SQL_APPROVED); 
      ?>

  } else {
     <?php header('Location: index.php');?>
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
 
      
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
