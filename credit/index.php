<!DOCTYPE html>
<?php    
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php");   
$today = date("Y-m-d H:i:s") ;
$ERROR=0;
#########################################################################
#########################################################################
#######################  Functions & Class  #############################
#########################################################################
#########################################################################
    
/*
 	$CreditID
	$InvoiceID
	$ShipID
	$AgentID 
	$InvoiceDat
	$Reason
	$Note
	$MSTOTAL
	$SSTOTAL
	$TOTAL
	$VAT
	$VAT_TOTAL
	$Status

*/
$InvoiceID = $VAT_TOTAL= 0;
$reason='';
if(isset($_POST['reason'])){$reason=stripslashes(htmlentities(strip_tags($_POST['reason'])));}  
if(isset($_POST['InvoiceID'])){$InvoiceID = intval($_POST['InvoiceID']);} 
 
if($debug){echo "<b>InvoiceID :</b>".$InvoiceID,"<br>";} 
if($debug){echo "<b>reason :</b>".$reason,"<br>";} 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

#########################################################################
#########################################################################
###########################  SQL INSERT #################################
#########################################################################
#########################################################################
if($InvoiceID){  
	if($_POST['CreditDate']==""){$CreditDate=date("Y-m-d H:i:s", time());}else{$CreditDate=$_POST['CreditDate']; }
	if(isset($_POST['VAT_TOTAL'])){$User_Total = floatval($_POST['VAT_TOTAL']);}  
	$SQL1= "SELECT * FROM `invoice` WHERE  `InvoiceID` ='".$InvoiceID."' AND `Status` > '0' LIMIT 1;";
	if($debug){echo "<b>SQL1 :</b>".$SQL1,"<br>";} 
	$inv = $dbop->query($SQL1)->fetchAll();
		foreach ($inv as $row) { 
			$InvoiceID	= $row['InvoiceID'];		
			$ShipID		= $row['ShipID'];	
			$AgentID 		= $row['AgentID'];		
			$InvoiceDate	= $row['InvoiceDate'];	  
			$MSTOTAL		= $row['MSTOTAL'];	
			$SSTOTAL		= $row['SSTOTAL'];	
			$TOTAL		= $row['TOTAL'];	
			$VAT			= $row['VAT'];	
			$VAT_TOTAL	= floatval($row['VAT_TOTAL']);		
			$Status		= $row['Status'];	
		}  
if( $VAT_TOTAL == $User_Total) {
			$SQL_INSERT="INSERT INTO `credit` 
				(    `InvoiceID`,
					`ShipID`,
					`AgentID`,
					`InvoiceDate`,
					`CreditDate`,
					`reason`, 
					`MSTOTAL`,
					`SSTOTAL`,
					`TOTAL`,
					`VAT`,
					`VAT_TOTAL`)  
					VALUES ( 
					".$InvoiceID.",					
					".$ShipID.",				
					".$AgentID .",					
					'".$InvoiceDate."',					
					'".$CreditDate."',					
					'".$reason."', 				
					".$MSTOTAL.",					
					".$SSTOTAL.",					
					".$TOTAL.",				
					".$VAT.",				
					".$VAT_TOTAL.");";  
					if($debug){echo "<b>SQL_INSERT :</b>".$SQL_INSERT,"<br>";} 
				$dbop->query($SQL_INSERT);  
			$SQL_Update="UPDATE `invoice` SET `Status` = '0' WHERE `invoice`.`InvoiceID` = ".$InvoiceID.";";  
			if($debug){echo "<b>SQL_Update :</b>".$SQL_Update,"<br>";} 
				$dbop->query($SQL_Update); 
			$alog_note = strval("credit_notes".$InvoiceID."AgentID:".$AgentID." + TOTAL:".$TOTAL."  (VAT)= ".$VAT." credit_amount ".$VAT_TOTAL." " );    
			$SQL_activitylog="INSERT INTO `activitylog` ( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
				VALUE ('".$folder_name."' ,'".$InvoiceID."' ,'Credit Notes',	'".$username_now."' ,'".$alog_note."' 	) ;";
			$dbop->query($SQL_activitylog); 
			} 
		} 
 
 ?>  

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
										<h1>Credit Notes List</h1>
									</div>
									<div class="col-sm-6">
										<ol class="breadcrumb float-sm-right">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active"> Credit Notes</li>
										</ol>
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-sm-6"></div>
									<div class="col-sm-6">
										<ol class="breadcrumb float-sm-right">
										<button type="button" class="btn btn-app-x" data-toggle="modal" data-target="#modal-lg">
										<i class="fas fa-plus"></i>     	 
											</button> 

 
      
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
				<?php if($ERROR){  ?> 
					<div class="row">
						<div class="col-12">  
							<div class="card card-danger">
								<div class="card-header">
									<h1 class="card-title" style="font-size: x-large;">ERROR</h1> 
								</div>
								<div class="card-body">
									A credit note has already been generated for this invoice. Creating another credit note for the same invoice is not permitted  
								</div>
							<!-- /.card-body -->
							</div>  
						</div> 
					</div> 
				<?php }else{ ?> 
					<div class="row">   
						<div class="col-12"> 
							<div class="card">
						 
								<!-- /.card-header  class="" style="width:100%">-->
								<div class="card-body"> 
									<table id="example1" class="table table-bordered table-striped display nowrap">
										<thead>
											<tr>
												<th>#</th> 
												<th>Date</th> 
												<th style="width:35%;">Agent Name</th> 
												<th>Ship Name</th> 
												<th>Marine Amount</th>
												<th>SServices Amount</th>
												<th>TOTAL (SAR)</th>
												<th>VAT (SAR)</th>
												<th>TOTAL With VAT (SAR)</th>  
												<th>Info</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$SQL='SELECT * FROM `credit` ORDER BY  `InvoiceID` DESC LIMIT '.$LIMIT.' ;';
												$credits = $dbop->query($SQL)->fetchAll();
												foreach ($credits as $row) {  
													$InvoiceID  	= $row['InvoiceID'];
													$InvoiceDate	= $row['InvoiceDate'];
													$CreditDate	= $row['CreditDate'];
													$ShipID     	= $row['ShipID'];   
													$AgentID     	= $row['AgentID'];   
													$MSTOTAL  	= $row['MSTOTAL']; 
													$SSTOTAL  	= $row['SSTOTAL']; 
													$TOTAL  		= $row['TOTAL']; 
													$VAT  		= $row['VAT']; 
													$VAT_TOTAL    = $row['VAT_TOTAL'];  
													$reason       = $row['reason'];   
													$date1=date_create($InvoiceDate);   
														$query = "SELECT `AgentNameEn`  FROM `agents` WHERE `AgentID`=".$AgentID." LIMIT 1;"; 
														$agents = $dbop->query($query)->fetchAll();   
														foreach ($agents as $row) {   
															$AgentNameEn  =	$row['AgentNameEn']; } 
														$query = "SELECT `ShipName`  FROM `ship` WHERE `ShipID`=".$ShipID." LIMIT 1;"; 
														$ships = $dbop->query($query)->fetchAll();   
														foreach ($ships as $row) {  
														    	$ShipName 	= 	$row['ShipName'];   }
											echo '<tr>
													<td>CN-'.$InvoiceID. ' </td>  
													<td>'.date_format($date1,"Y-m-d"). ' </td>  
													<td>'.$AgentNameEn.'  </td>
													<td>'.$ShipName. ' </td>  
													<td style="text-align: right;">'.number_format($MSTOTAL,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($SSTOTAL,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($TOTAL,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($VAT,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($VAT_TOTAL,2,"."). ' </td>   
													<td style="text-align: right;">
														<div class="btn-group btn-group-sm"> 
                                                            <a href="view.php?id='.$InvoiceID.'" class="btn">
                                                           	 	<i class="fas fa-eye"></i>
															</a> 
                                                            <a href="../reports/invoice.php?id='.$InvoiceID.'" class="btn"  target="_blank">
                                                          		<i class="fas fa-file-pdf"></i>
															</a>  
                                                        </div>
													</td>   
												</tr>' ; } ?>
										</tbody>
										<tfoot>
											<tr>
												<th>#</th> 
												<th>Date</th> 
												<th>Agent Name</th> 
												<th>Ship Name</th> 
												<th>Marine Amount</th>
												<th>SServices Amount</th>
												<th>TOTAL (SAR)</th>
												<th>VAT (SAR)</th>
												<th>TOTAL With VAT (SAR)</th>   
												<th>Info</th>
											</tr>
										</tfoot>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div> 
					</div>  
				<?php }  ?>
			</div><!-- /.row --> 
		</section>
    		<!-- /.content -->
  	</div> 
	<?php include('../include/footer.php');?>  
</div>

	<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Credit Note</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
		  <form method="POST" id="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="modal-body"> 
				<div class="form-group">
					<label class="col-form-label" for="inputError"> Invoice Number</label>
					<input type="text" name="InvoiceID" class="form-control is-invalid" id="inputError" autocomplete="off"/>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="col-form-label" for="inputError">Invoice Total Amount</label>
							<input type="text" name="VAT_TOTAL"  class="form-control is-invalid" id="inputError" autocomplete="off"/>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Credit-Note Date</label>
							<div class="input-group date" id="CreditDate" data-target-input="nearest">
								<input  name="CreditDate" type="text" class="form-control datetimepicker-input" data-target="#CreditDate" placeholder="<?php echo $today;?>"/>
								<div class="input-group-append" data-target="#CreditDate" data-toggle="datetimepicker">
									<div class="input-group-text">
										<i class="fa fa-calendar"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
                        <label>Reason</label>
                        <textarea class="form-control" name="reason" rows="3" placeholder=""></textarea>
                      </div>					 
			</div>
			<div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" form="form1" class="btn btn-danger">Add Credit Note</button>
			</div>
		  </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


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
	$('#CreditDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    }); 

    $("#example1").DataTable({ 
	 "responsive": true, 
	 "lengthChange": false,  
      "ordering": false,
	 "autoWidth": false, 
      "searching": true, 
      "info": true,
	 "paging": true,
      "buttons": ["copy", "csv",   "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     
  }); 

 
    



</script>
      
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
