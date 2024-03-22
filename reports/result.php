<!DOCTYPE html>
<?php    
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
$SAPPOname =  $table_body= '';
$IsActive = 0 ;	  
$TotalInvoiceTable=0;
if($_POST['DailyInvoiceReport']){ 
	$InvoiceDate= $_POST['InvoiceDate']; 
	$LinkPDF='<a href="../reports/DailyInvoiceReport.php?InvoiceDate='.$InvoiceDate.'">';
			
	$SQL = "SELECT * FROM `invoice` WHERE DATE(`InvoiceDate`) = '".$InvoiceDate."';";  
	$invoices = $dbop->query($SQL)->fetchAll();    
	foreach ($invoices as $invoice) {    
		$InvoiceDate  = $invoice['InvoiceDate']; 
		$InvoiceID    = $invoice['InvoiceID'];
		$ShipName     = $invoice['ShipName']; 
		$AgentNameEn  = $invoice['AgentNameEn']; 
		$AgentNameAr  = $invoice['AgentNameAr']; 
		$VAT_TOTAL    = $invoice['VAT_TOTAL']; 
		$TotalInvoiceTable =  $TotalInvoiceTable +$VAT_TOTAL ;
		$Status       = $invoice['Status'];   
		$date1=date_create($InvoiceDate); 
		switch(intval($Status)){  
		  case 700:
		    $Icons='<a href="edit.php?id='.$invoice["InvoiceID"].'" class="btn btn-warning">
		    <i class="fas fa-pen-to-square"></i></a> 
		    <a href="view.php?id='.$invoice["InvoiceID"].'" class="btn btn-danger">
		    <i class="fas fa-trash"></i></a>';
		    break;
		  case 800:
		    $Icons='<a href="../reports/invoice.php?id='.$invoice["InvoiceID"].'" class="btn btn-danger">
		    <i class="fas fa-print"></i></a>';
		    break;
		  default:
			 echo $Icons="";
		  } 
	  $table_body .= '<tr>
		<td>'.$InvoiceID. ' </td>  
		<td>'.date_format($date1,"Y-m-d"). ' </td>  
		<td>'.$ShipName.'  </td>
		<td>'.$AgentNameEn. ' </td> 
		<td>'.$AgentNameAr. ' </td> 
		<td style="text-align: right;">'.number_format($VAT_TOTAL,2,"."). ' </td>  
		<td>   
		  <div class="btn-group btn-group-sm"> 
		    <a href="view.php?id='.$invoice['InvoiceID'].'" class="btn btn-info">
		    <i class="fas fa-eye"></i></a>
		    '.$Icons.'
		  </div>
		</td>  
	   </tr>' ; }
	
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
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/dropzone/min/dropzone.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/dist/css/adminlte.min.css">
  
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
    <!-- Main content -->
    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12"> 
					<div class="card"> 
						<div class="card-header">
							<h3 class="card-title">Result</h3>
							<div class="card-tools">  
								<?php echo $LinkPDF;?> 
								<button type="button" class="btn btn-success" > PDF </button>  </a>
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
								<i class="fas fa-plus"></i>
								</button> 
							</div>
						</div>  
						<div class="card-body"> 
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>#</th> 
								<th>Date</th> 
								<th>Ship Name</th> 
								<th>Agent Name</th>
								<th>Agent Name</th>
								<th>TOTAL (SAR)</th>
								<th>View</th>
							</tr>
							</thead>
							<tbody>
								<?php echo $table_body;?>
							</tbody>
							<tfoot>
							<tr>
								<th>#</th> 
								<th>Date</th> 
								<th>Ship Name</th> 
								<th>Agent Name</th>
								<th>Agent Name</th>
								<th style="text-align: right;"><?php echo number_format($TotalInvoiceTable,2,".");?></th>
								<th>View</th>
							</tr>
							</tfoot>
							</table>

						</div> 
					</div>
				</div>
			</div>
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
<script src="<?php echo $path;?>adminlte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo $path;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo $path;?>adminlte/plugins/select2/js/select2.full.min.js"></script>
	<!-- Bootstrap4 Duallistbox -->
	<script src="<?php echo $path;?>adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo $path;?>adminlte/plugins/moment/moment.min.js"></script>
	<script src="<?php echo $path;?>adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo $path;?>adminlte/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap color picker -->
	<script src="<?php echo $path;?>adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo $path;?>adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Bootstrap Switch -->
	<script src="<?php echo $path;?>adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- BS-Stepper -->
	<script src="<?php echo $path;?>adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
	<!-- dropzonejs -->
	<script src="<?php echo $path;?>adminlte/plugins/dropzone/min/dropzone.min.js"></script>   
	<!-- AdminLTE App -->
	<script src="<?php echo $path;?>adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>
$(function () { 
    //Date picker Date From todate
    $('#ClickInvoiceDate').datetimepicker({ format: 'YYYY-MM-DD' });
  });
</script> 
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
