<!DOCTYPE html>
<?php   

	 
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
$SAPPOname = '';
$IsActive = 0 ;	   
     
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
  <!-- /.navbar --> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reports</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active"><?php echo ucwords(basename(dirname(__FILE__)));?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content  	-->
    <section class="content">
     <div class="container-fluid">
		<div class="row">
			<div class="col-12"> 
				<div class="card">  
					<div class="card-body">
            				<h4>Custom Report</h4>
						<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"> Daily Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Monthly Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Invoice List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Export</a>
						</li>
						</ul>
						<div class="tab-content" id="custom-content-below-tabContent">
						<div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
							<form action="DailyInvoiceReport.php" method="post">
								<div class="col-4"> 
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
									<input type="hidden" name="DailyInvoiceReport" value="1">
									<button type="submit" class="btn btn-info float-right">Genrate</button>
								</div>
							</form> 
						</div>
						<div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">

							<form action="MonthlyInvoiceReport.php" method="post">
								<div class="col-4"> 
									<div class="form-group">
										<label>Invoice Date</label>
										<div class="input-group date" id="ClickInvoiceMonth" data-target-input="nearest">
											<input  name="InvoiceMonth" type="text" class="form-control datetimepicker-input" data-target="#ClickInvoiceMonth"/>
											<div class="input-group-append" data-target="#ClickInvoiceMonth" data-toggle="datetimepicker">
												<div class="input-group-text">
												<i class="fa fa-calendar"></i>
												</div>
											</div>
										</div>  
									</div>
									<input type="hidden" name="MonthlyInvoiceReport" value="1">
									<button type="submit" class="btn btn-info float-right">Genrate</button>
								</div>
							</form> 

						</div>
						<div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
							<form action="FromToInvoice.php" method="POST">
								<div class="col-4"> 
									<div class="form-group">
										<label>From invoice#</label> 
											<input  name="FromInvoice" type="text" class="form-control" >    
										<label>To invoice#</label> 
											<input  name="ToInvoice" type="text" class="form-control" >   
									</div>
									<input type="hidden" name="FromToInvoice" value="1">
									<button type="submit" class="btn btn-info float-right">Genrate</button>
								</div>
							</form> 


						</div>
						<div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">

							<form action="ExportToInvoice.php" method="POST">
								<div class="col-4"> 
									<div class="form-group">
										<label>From invoice#</label> 
											<input  name="ExportFromInvoice" type="text" class="form-control" >    
										<label>To invoice#</label> 
											<input  name="ExportToInvoice" type="text" class="form-control" >   
									</div>
									<input type="hidden" name="FromToInvoice" value="1">
									<button type="submit" class="btn btn-info float-right">Genrate</button>
								</div>
							</form> 
	
						</div>
						</div> 
				</div>
			</div>
		</div>
	</div>

 
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  	<?php include('../include/footer.php');?>
	<aside class="control-sidebar control-sidebar-dark"> </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<!-- Page specific script -->
<script>
$(function () { 
    	//Date picker Date From todate
    	$('#ClickInvoiceDate').datetimepicker({ format: 'YYYY-MM-DD' }); 
  	$('#ClickInvoiceMonth').datetimepicker({ format: 'YYYY-MM' }); 
  });
</script> 
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
