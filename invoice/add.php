		<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			$is_active =1;
			$SSCount=5;
			$name=$cr =$vat =$hname=$conatct =$create_date=$update_date="";
			$CardColor='secondary'; 
	   
		// option Agents 
        	$AgentOption='<option value=""></option>';
				 	$query = "SELECT `AgentID`,`AgentNameAr`,`AgentCR` FROM `agents`;"; 
					$Agents = $dbop->query($query)->fetchAll();   
					foreach ($Agents as $Agents) {    
            $AgentOption.='
			<option value="'.$Agents['AgentID'].'">'.$Agents['AgentNameAr'].' CR:'.$Agents['AgentCR'].'</option>';
					}
				// option Agents

        // option Ships
        	$ShipNameOption='<option value=""></option>';
				 	$query = "SELECT `ShipID`,`ShipName`  FROM `ship`;"; 
					$ships = $dbop->query($query)->fetchAll();   
					foreach ($ships as $ship) {    
            $ShipNameOption.='
			<option value="'.$ship['ShipID'].'">'.$ship['ShipName'].'</option>';
					}
				// option Ships
        // option services
        	$servicesOption='<option></option>';
				 	$query = "SELECT `Service_ID`,`Description`,`code`  FROM `services`;"; 
					$services = $dbop->query($query)->fetchAll();   
					foreach ($services as $service) {    
            $servicesOption.='
			<option   value="'.$service['Service_ID'].'"> ['.$service['code'].'] '.$service['Description'].'</option>';
					}
				// option services
		// SSCount 
			$query = "SELECT `value` FROM `config`  WHERE  `name`='SSCount' LIMIT 1;"; 
			$SSCountQuerys = $dbop->query($query)->fetchAll();   
			foreach ($SSCountQuerys as $SSCountQuery) {    
				$SSCount = intval($SSCountQuery['value']) ;
			}
		// option services

        // DUBLICAT ITEM
		  
	   


			$today = date("Y-m-d H:i:s");
			$A = $B = $C = $D = $E = $F = $G = $H = $I = $J = 0;
			$TotalInvoiceAmount = $NumberOfAllInvoice = $OverBalance =  0;
			$DataIsOK = $query= '';
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
					<?php if($DataIsOK){?>
						
					<?php }?>
			
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
				<form action="post_add.php" method="POST"> 




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
											<input  name="InvoiceDate" type="text" class="form-control datetimepicker-input" data-target="#ClickInvoiceDate"/>
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
												<input  name="ArrivalDate" type="text" class="form-control datetimepicker-input" data-target="#ClickArrivalDate"/>
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
										<input name="DepartureDate" type="text" class="form-control datetimepicker-input" data-target="#ClickDepartureDate"/>
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
											<input type="text" class="form-control" name="TripNo"  autocomplete="off">
										</div>
									</div>
								<!-- %%  Partial/Final  %%% -->     
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
										<div class="form-group">
											<label>MovePort 1</label> 
											<input name="MovePort1" type="text" class="form-control" >
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
												<input  name="AnchorageEntry" type="text" class="form-control datetimepicker-input" data-target="#ClickAnchorEntryDate"/>
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
										<input name="AnchorageLeave" type="text" class="form-control datetimepicker-input" data-target="#ClickAnchorLeaveDate"/>
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
											<input type="text" class="form-control" name="DockingNo"  >
										</div>
									</div>
								<!-- %%  Partial/Final  %%% -->     
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
										<div class="form-group">
											<label>MovePort 2</label> 
											<input type="text" class="form-control" name="MovePort2"  >
										</div>
									</div>
							</div>  
							<!-- %%%%%%%%%%%%%%%%%%%% row4   %%%%%%%%%%%%%%%%%%%%%%%% -->    
							<div class="row">
								<!-- %%  From Date   %%% -->
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										<div class="form-group">
											<label>Route No</label> 
											<input type="text" class="form-control" name="RouteNo"  >
										</div> 
									</div>
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										<div class="form-group">
											<label>Shifted No</label> 
											<input type="text" class="form-control" name="ShiftedNo"  >
										</div> 
									</div>
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										<div class="form-group">
											<label>Reason</label> 
											<input type="text" class="form-control" name="Reason"  >
										</div> 
									</div>
									<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">   
										<div class="form-group">
											<label>MovePort 3</label> 
											<input type="text" class="form-control" name="MovePort3"  >
										</div> 
									</div>
							</div>  
							<div class="row">
								<!-- %%  Note   %%% -->
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">   
										<div class="form-group">
											<label>Note</label>  
											<textarea class="form-control" rows="1" name="Note" placeholder=""></textarea>
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
											<input name="MService1" type="checkbox" checked class="custom-control-input" id="customSwitch1">
											<label class="custom-control-label" for="customSwitch1"></label>
										</div>
									</div>
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Araval Rate</label> 
										<input type="text" class="form-control" name="MSFraction1"  >
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Note 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
										<div class="form-group">
											<label> Note</label> 
											<input type="text" class="form-control" name="MSNote1"  >
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
											<input name="MService2" type="checkbox" checked class="custom-control-input" id="customSwitch2">
											<label class="custom-control-label" for="customSwitch2"></label>
										</div>
									</div>
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Departure Rate</label> 
										<input type="text" class="form-control" name="MSFraction2"  >
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Note 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
										<div class="form-group">
											<label> Note</label> 
											<input type="text" class="form-control" name="MSNote2"  >
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
											<input name="MService3" type="checkbox" checked class="custom-control-input" id="customSwitch3">
											<label class="custom-control-label" for="customSwitch3"></label>
										</div>
									</div>
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Port Rate</label> 
										<input type="text" class="form-control" name="MSFraction3"  >
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Note 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% --> 
										<div class="form-group">
											<label>Note </label> 
											<input type="text" class="form-control" name="MSNote3"  >
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
							<!-- %%%%%%%%%%%%%%%%%%%% row1   %%%%%%%%%%%%%%%%%%%%%%%% --> 
							<?php for($i=1;$i<=$SSCount ;$i++){?>
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
									<!-- %%%%%%%%%%%%%%%%%%%% Fees 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%%  --> 
									<div class="form-group">
										<label>Services Description <?php echo $i;?></label> 
										<select name="SService<?php echo $i;?>" class="form-control select2">
							  					<?=$servicesOption;?>
										</select>
									</div> 
								</div> 
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Qut.</label> 
										<input type="text" class="form-control" name="SSQut<?php echo $i;?>"  >
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>U. Price</label> 
										<input type="text" class="form-control" name="SSUPrice<?php echo $i;?>"  >
									</div>  
								</div>
								<div class="col-sm-2 col-md-4 col-lg-2 col-xl-2"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Rate 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Note</label> 
										<input type="text" class="form-control" name="SSNote<?php echo $i;?>"  >
									</div>  
								</div> 
							</div> 
							<?php }?>

						</div>
						<div class="card-footer">
							<button type="submit" name="save" value="save" class="btn btn-info">save</button>
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
