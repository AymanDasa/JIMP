<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			$name=$cr =$vat =$hname=$conatct =$create_date=$update_date="";  
            $CardColor='secondary'; 
			$query = "SELECT `value` FROM `config`  WHERE  `name`='SSCount' LIMIT 1;"; 
			$SSCountQuerys = $dbop->query($query)->fetchAll();   
			foreach ($SSCountQuerys as $SSCountQuery) {    
				$SSCount = intval($SSCountQuery['value']) ;
			} 
			$today = date("Y-m-d H:i:s"); 

if(isset($_GET['id'])) {
#########################################################################
#########################################################################
#######################  Functions & Class  #############################
#########################################################################
#########################################################################
$invoiceID = intval($_GET['id']); 
    $query = "SELECT *  FROM `invoice` WHERE `invoiceID`=".$invoiceID." LIMIT 1;"; 

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
    } 

}
else{
	exit();
}

// option AgentNameAr 
    $AgentOption='<option value=""></option>';
    $query = "SELECT `AgentID`,`AgentNameEn`,`AgentCR` FROM `agents`;"; 
    $Agents = $dbop->query($query)->fetchAll();   
    foreach ($Agents as $Agents) {   
        $ThisID =intval($Agents['AgentID']);
        $AgentsID=intval($AgentID);
        if($ThisID==$AgentsID){$select="selected";}else{$select="";}
        $AgentOption.='
        <option value="'.$Agents['AgentID'].'" '.$select.'>'.$Agents['AgentNameEn'].' CR:'.$Agents['AgentCR'].'</option>';
    }
// option AgentNameAr

// option ShipName
    $ShipNameOption='<option value=""></option>';
    $query = "SELECT `ShipID`,`ShipName`  FROM `ship`;"; 
    $ships = $dbop->query($query)->fetchAll();  

    foreach ($ships as $ship) {
        $ThisID =intval($ship['ShipID']);
        $shipID=intval($ShipID);
        if($ThisID==$shipID){$select="selected";}else{$select="";}
        $ShipNameOption.='
        <option value="'.$ship['ShipID'].'" '.$select.'>'.$ship['ShipName'].'</option>';
    }
// option ShipName


		

// option SSCount 
$query = "SELECT `value` FROM `config`  WHERE  `name`='SSCount' LIMIT 1;"; 
$SSCountQuerys = $dbop->query($query)->fetchAll();   
foreach ($SSCountQuerys as $SSCountQuery) {    
    $SSCount = intval($SSCountQuery['value']) ;
}
// option SSCount


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
  <link rel="icon" type="image/x-icon" href="../include/img/favicon.ico">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("../include/nav.php")?>
  <?php include("../include/aside.php")?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
				<div class="col-sm-6">
				<h1>  <?=$hname;?> </h1>  
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
					<li class="breadcrumb-item active"><a href="index.php"><?php echo ucwords(basename(dirname(__FILE__)));?></a></li>
					</ol>
				</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
		<div class="container-fluid">
			<div class="row">
			<!-- left column --> 
			<div class="col-md-12"> 
				<!-- general form elements disabled  action="test.php"  --> 
				<form action="post_update.php" method="POST"> 
					<?php $InvoiceID=intval($_GET['id']);?>
                <input type="hidden" name="maxID" value="<?php echo intval($InvoiceID);?>">  



			<!--    #########################################################################   -->
			<!--    #########################################################################   -->
			<!--    ########################   Information    ###############################   -->
			<!--    #########################################################################   -->
			<!--    #########################################################################   -->
					<div class="card card-<?=$CardColor;?>">
						<div class="card-header">
							<h3 class="card-title">General Information</h3> 
						</div>  
						<div class="card-body"> 
							<!-- %%%%%%%%%%%%%%%%%%%% row1   %%%%%%%%%%%%%%%%%%%%%%%% --> 
							<div class="row">
								<div class="col-sm-12 col-md-4 col-lg-4 col-xl-3"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Ship. %%%%%%%%%%%%%%%%%%%%%%%%%%%%  $ -->
									<div class="form-group">
										<label>Ship Name</label> 
										<select name="ShipID" class="form-control select2">
											<?=$ShipNameOption;?>
										</select>
									</div> 
								</div> 
								<div class="col-sm-12 col-md-4 col-lg-4 col-xl-6"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Agents %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Agents</label> 
										<select name="AgentID" class="form-control select2">
											<?=$AgentOption;?>
										</select>
									</div>   
								</div>
								<div class="col-sm-12 col-md-4 col-lg-4 col-xl-3"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Invoice Date %%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
									<div class="form-group">
										<label>Invoice Date</label>
										<div class="input-group date" id="ClickInvoiceDate" data-target-input="nearest">
											<input  name="InvoiceDate" type="text" value="<?php echo $InvoiceDate;?>" class="form-control datetimepicker-input" data-target="#ClickInvoiceDate"/>
											<div class="input-group-append" data-target="#ClickInvoiceDate" data-toggle="datetimepicker">
											<div class="input-group-text">
												<i class="fa fa-calendar"></i>
											</div>
											</div>
										</div>
									</div>
								</div> 
							</div> 
							<!-- %%%%%%%%%%%%%%%%%%%% row2   %%%%%%%%%%%%%%%%%%%%%%%% -->    
							<div class="row">
								<!-- %%  From Date   %%% -->
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">  
										<div class="form-group">
											<label>Arrival Date</label>
											<div class="input-group date" id="ClickArrivalDate" data-target-input="nearest">
												<input  name="ArrivalDate" type="text" value="<?php echo $ArrivalDate;?>" class="form-control datetimepicker-input" data-target="#ClickArrivalDate"/>
												<div class="input-group-append" data-target="#ClickArrivalDate" data-toggle="datetimepicker">
												<div class="input-group-text">
													<i class="fa fa-calendar"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
								<!-- %%  To Date  %%% --> 
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">  
									<div class="form-group">
									<label>Departure Date:</label>
									<div class="input-group date" id="ClickDepartureDate" data-target-input="nearest">
										<input name="DepartureDate" type="text"  value="<?php echo $DepartureDate;?>" class="form-control datetimepicker-input" data-target="#ClickDepartureDate"/>
										<div class="input-group-append" data-target="#ClickDepartureDate" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
									</div>
									</div>
									</div>  
								<!-- %% Trip No  %%% -->   
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
										<div class="form-group">
											<label>Trip No</label> 
											<input type="text" class="form-control" name="TripNo"  value="<?php echo $TripNo;?>" autocomplete="off">
										</div>
									</div>
								<!-- %%  Partial/Final  %%% -->     
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
										<div class="form-group">
											<label>MovePort 1</label> 
											<input name="MovePort1"  value="<?php echo $MovePort1;?>" type="text" class="form-control" >
										</div>
									</div>
							</div>  
							<!-- %%%%%%%%%%%%%%%%%%%% row3   %%%%%%%%%%%%%%%%%%%%%%%% -->    
							<div class="row">
								<!-- %%  From Date   %%% -->
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">  
										<div class="form-group">
											<label>Anchor Entry</label>
											<div class="input-group date" id="ClickAnchorEntryDate" data-target-input="nearest">
												<input   name="AnchorageEntry"  value="<?php echo $AnchorageEntry;?>" type="text" class="form-control datetimepicker-input" data-target="#ClickAnchorEntryDate"/>
												<div class="input-group-append" data-target="#ClickAnchorEntryDate" data-toggle="datetimepicker">
												<div class="input-group-text">
													<i class="fa fa-calendar"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
								<!-- %%  To Date  %%% --> 
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">  
									<div class="form-group">
									<label>Anchor Leave:</label>
									<div class="input-group date" id="ClickAnchorLeaveDate" data-target-input="nearest">
										<input name="AnchorageLeave"   value="<?php echo $AnchorageLeave;?>" type="text" class="form-control datetimepicker-input" data-target="#ClickAnchorLeaveDate"/>
										<div class="input-group-append" data-target="#ClickAnchorLeaveDate" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
									</div>
									</div>
									</div>  
								<!-- %% Trip No  %%% -->   
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
										<div class="form-group">
											<label>Docking No</label> 
											<input type="text" class="form-control" name="DockingNo"  value="<?php echo $DockingNo;?>" >
										</div>
									</div>
								<!-- %%  Partial/Final  %%% -->     
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
								 
									</div>
							</div>  
							<!-- %%%%%%%%%%%%%%%%%%%% row4   %%%%%%%%%%%%%%%%%%%%%%%% -->    
							<div class="row">
								<!-- %%  From Date   %%% -->
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										<div class="form-group">
											<label><?php echo $EmptyLineEn ;?></label> 
											<input type="text" class="form-control" name="RouteNo"  value="<?php echo $RouteNo;?>" >
										</div> 
									</div>
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										<div class="form-group">
											<label>Shifted No</label> 
											<input type="text" class="form-control" name="ShiftedNo"  value="<?php echo $ShiftedNo;?>" >
										</div> 
									</div>
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										<div class="form-group">
											<label>Reason</label> 
											<input type="text" class="form-control" name="Reason"  value="<?php echo $Reason;?>" >
										</div> 
									</div>
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										 
									</div>
							</div>  
							<div class="row">
								<!-- %%  Note   %%% -->
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">   
										<div class="form-group">
											<label>Note</label>  
											<textarea class="form-control" rows="1" name="Note" ><?php echo $Note;?></textarea>
										</div> 
									</div>
							</div>  
							<!-- %%%%%%%%%%%%%%%%%%%% row3   %%%%%%%%%%%%%%%%%%%%%%%%  -->   
						</div> 
					</div> 
					
					
			<!--    #########################################################################   -->
			<!--    #########################################################################   -->
			<!--    ########################  Marine Service  ###############################   -->
			<!--    #########################################################################   -->
			<!--    #########################################################################   -->
					<div class="card card-<?=$CardColor;?>">
						<div class="card-header">
							<h3 class="card-title">Marine Service</h3> 
						</div>  
						<div class="card-body"> 

							<!-- %%%%%%%%%%%%%%%%%%%% row1  Araval Fees   %%%%%%%%%%%%%%%%%%%%%%%% --> 
                            
							<div class="row">
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<div class="custom-control custom-switch" style="padding-left: 5.25rem;">
											<label>Araval Fees</label> 
											<br>
											<input name="MService1" <?php if($MService1==1){echo 'checked';} ?> type="checkbox" class="custom-control-input" id="customSwitch1">
											<label class="custom-control-label" for="customSwitch1"></label>
										</div>
									</div>
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Araval Rate</label> 
										<input type="text" class="form-control" name="MSFraction1" value="<?php echo $MSFraction1;?>" >
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Note 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
										<div class="form-group">
											<label> Note</label> 
											<input type="text" class="form-control" name="MSNote1" value="<?php echo $MSNote1;?>">
										</div>
								</div> 
							</div> 

							<!-- %%%%%%%%%%%%%%%%%%%% row2  Departure Fees   %%%%%%%%%%%%%%%%%%%%%%%% --> 
							<div class="row">
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<div class="custom-control custom-switch" style="padding-left: 5.25rem;">
											<label>Departure Fees</label> 
											<br>
											<input name="MService2" <?php if($MService2==1){echo 'checked';} ?> type="checkbox" class="custom-control-input" id="customSwitch2">
											<label class="custom-control-label" for="customSwitch2"></label>
										</div>
									</div>
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Departure Rate</label> 
										<input type="text" class="form-control" name="MSFraction2" value="<?php echo $MSFraction2;?>" >
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Note 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
										<div class="form-group">
											<label> Note</label> 
											<input type="text" class="form-control" name="MSNote2" value="<?php echo $MSNote2;?>" >
										</div>
								</div> 
							</div> 


							<!-- %%%%%%%%%%%%%%%%%%%% row3   Path Fees   %%%%%%%%%%%%%%%%%%%%%%%% --> 
							<div class="row">
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<div class="custom-control custom-switch" style="padding-left: 5.25rem;">
											<label>Port Fees</label> 
											<br>
											<input name="MService3" <?php if($MService3==1){echo 'checked';} ?> type="checkbox" class="custom-control-input" id="customSwitch3">
											<label class="custom-control-label" for="customSwitch3"></label>
										</div>
									</div>
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Port Rate</label> 
										<input type="text" class="form-control" name="MSFraction3"  value="<?php echo $MSFraction3;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Note 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
										<div class="form-group">
											<label>Note </label> 
											<input type="text" class="form-control" name="MSNote3"  value="<?php echo $MSNote3;?>">
										</div>
								</div> 
							</div> 

						</div>
					</div> 
			<!--    #########################################################################   -->
			<!--    #########################################################################   -->
			<!--    ########################  Special Service ###############################   -->
			<!--    #########################################################################   -->
			<!--    #########################################################################   -->

					<div class="card card-<?=$CardColor;?>">
						<div class="card-header">
							<h3 class="card-title">Special Service   </h3> 
						</div>  
						<div class="card-body">  


				<!-- %%%%%%%%%%%%%%%%%%%%  1 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<label>Services Description </label> 
										<select name="SService1" class="form-control select2">
							  					<?php
                                                // option Description
                                                    $query = "SELECT `Service_ID`,`Description` FROM `services`;"; 
                                                    $services = $dbop->query($query)->fetchAll();  
                                                    $servicesOption='<option value=""></option>'; 
                                                    foreach ($services as $service) {    
                                                        $ThisID =intval($service['Service_ID']);
                                                        $SService1=intval($SService1);
                                                        if($ThisID==$SService1){$select="selected";}else{$select="";}
                                                    $servicesOption.='<option value="'.$service['Service_ID'].'" '.$select.'>'.$service['Description'].'
                                                    </option>';
                                                    }
                                                    echo $servicesOption;
                                                // option Description
                                                ?>
										</select>
									</div> 
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Qut.</label> 
										<input type="text" class="form-control" name="SSQut1"  value="<?php echo $SSQut1;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>U. Price</label> 
										<input type="text" class="form-control" name="SSUPrice1"  value="<?php echo $SSUPrice1;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Note</label> 
										<input type="text" class="form-control" name="SSNote1"  value="<?php echo $SSNote1;?>">
									</div>  
								</div> 
							</div> 
                <!-- %%%%%%%%%%%%%%%%%%%%  1 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 





                <!-- %%%%%%%%%%%%%%%%%%%%  2 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 
							<div class="row">
								<div class="col-sm-2 col-md-6 col-lg-6 col-xl-6"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 2 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<label>Services Description </label> 
										<select name="SService2" class="form-control select2">
							  					<?php
                                                // option Description
                                                    $query = "SELECT `Service_ID`,`Description`  FROM `services`;"; 
                                                    $services = $dbop->query($query)->fetchAll();  
                                                    $servicesOption='<option value=""></option>'; 
                                                    foreach ($services as $service) {    
                                                        $ThisID =intval($service['Service_ID']);
                                                        $SService2=intval($SService2);
                                                        if($ThisID==$SService2){$select="selected";}else{$select="";}
                                                    $servicesOption.='<option value="'.$service['Service_ID'].'" '.$select.'>'.$service['Description'].'
                                                    </option>';
                                                    }
                                                    echo $servicesOption;
                                                // option Description
                                                ?>
										</select>
									</div> 
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 2 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Qut.</label> 
										<input type="text" class="form-control" name="SSQut2"  value="<?php echo $SSQut2;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 2 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>U. Price</label> 
										<input type="text" class="form-control" name="SSUPrice2"  value="<?php echo $SSUPrice2;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 2 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Note</label> 
										<input type="text" class="form-control" name="SSNote2"  value="<?php echo $SSNote2;?>">
									</div>  
								</div> 
							</div> 
                <!-- %%%%%%%%%%%%%%%%%%%%  2 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 





                <!-- %%%%%%%%%%%%%%%%%%%%  3 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 
                            <div class="row">
								<div class="col-sm-2 col-md-6 col-lg-6 col-xl-6"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 3 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<label>Services Description </label> 
										<select name="SService3" class="form-control select2">
							  					<?php
                                                // option Description
                                                    $query = "SELECT `Service_ID`,`Description`  FROM `services`;"; 
                                                    $services = $dbop->query($query)->fetchAll();   
                                                    $servicesOption='<option value=""></option>';
                                                    foreach ($services as $service) {    
                                                        $ThisID =intval($service['Service_ID']);
                                                        $SService3=intval($SService3);
                                                        if($ThisID==$SService3){$select="selected";}else{$select="";}
                                                    $servicesOption.='<option value="'.$service['Service_ID'].'" '.$select.'>'.$service['Description'].'</option>';
                                                    }
                                                    echo $servicesOption;
                                                // option Description
                                                ?>
										</select>
									</div> 
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 3 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Qut.</label> 
										<input type="text" class="form-control" name="SSQut3"  value="<?php echo $SSQut3;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 3 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>U. Price</label> 
										<input type="text" class="form-control" name="SSUPrice3"  value="<?php echo $SSUPrice3;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 3 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Note</label> 
										<input type="text" class="form-control" name="SSNote3"  value="<?php echo $SSNote3;?>">
									</div>  
								</div> 
							</div> 
                <!-- %%%%%%%%%%%%%%%%%%%%  3 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 



                <!-- %%%%%%%%%%%%%%%%%%%%  4 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 
                <div class="row">
								<div class="col-sm-2 col-md-6 col-lg-6 col-xl-6"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 4 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<label>Services Description </label> 
										<select name="SService4" class="form-control select2">
							  					<?php
                                                // option Description
                                                    $query = "SELECT `Service_ID`,`Description`  FROM `services`;"; 
                                                    $services = $dbop->query($query)->fetchAll();   
                                                    $servicesOption='<option value=""></option>';
                                                    foreach ($services as $service) {    
                                                        $ThisID =intval($service['Service_ID']);
                                                        $SService4=intval($SService4);
                                                        if($ThisID==$SService4){$select="selected";}else{$select="";}
                                                    $servicesOption.='<option value="'.$service['Service_ID'].'" '.$select.'>'.$service['Description'].'</option>';
                                                    }
                                                    echo $servicesOption;
                                                // option Description
                                                ?>
										</select>
									</div> 
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 4 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Qut.</label> 
										<input type="text" class="form-control" name="SSQut4"  value="<?php echo $SSQut4;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 4 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>U. Price</label> 
										<input type="text" class="form-control" name="SSUPrice4"  value="<?php echo $SSUPrice4;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 4 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Note</label> 
										<input type="text" class="form-control" name="SSNote4"  value="<?php echo $SSNote4;?>">
									</div>  
								</div> 
							</div> 
                <!-- %%%%%%%%%%%%%%%%%%%%  4 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 




                <!-- %%%%%%%%%%%%%%%%%%%%  5 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 
                <div class="row">
								<div class="col-sm-2 col-md-6 col-lg-6 col-xl-6"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 5 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<label>Services Description </label> 
										<select name="SService5" class="form-control select2">
							  					<?php
                                                // option Description
                                                    $query = "SELECT `Service_ID`,`Description`  FROM `services`;"; 
                                                    $services = $dbop->query($query)->fetchAll(); 
                                                    $servicesOption='<option value=""></option>';  
                                                    foreach ($services as $service) {    
                                                        $ThisID =intval($service['Service_ID']);
                                                        $SService5=intval($SService5);
                                                        if($ThisID==$SService5){$select="selected";}else{$select="";}
                                                    $servicesOption.='<option value="'.$service['Service_ID'].'" '.$select.'>'.$service['Description'].'</option>';
                                                    }
                                                    echo $servicesOption;
                                                // option Description
                                                ?>
										</select>
									</div> 
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 5 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Qut.</label> 
										<input type="text" class="form-control" name="SSQut5"  value="<?php echo $SSQut5;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 5 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>U. Price</label> 
										<input type="text" class="form-control" name="SSUPrice5"  value="<?php echo $SSUPrice5;?>">
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 5 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Note</label> 
										<input type="text" class="form-control" name="SSNote5"  value="<?php echo $SSNote5;?>">
									</div>  
								</div> 
							</div> 
                <!-- %%%%%%%%%%%%%%%%%%%%  5 . Special Service   %%%%%%%%%%%%%%%%%%%%%%%% --> 

						</div>
						<div class="card-footer">
							<button type="submit" name="Update" value="Update" class="btn btn-info">Update</button>
						</div>  
					</div> 
						 
				</form> 
	<!-- /.card -->
	</div>
	<!--/.col (right) -->
	</div>
	<!-- /.row -->
		</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
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
</script>
 
      
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
