<!DOCTYPE html>
<?php    
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
$SAPPOname =  $table_body= '';
$IsActive = 0 ;	  
$TotalInvoiceTable=0;
 
if(isset($_POST['InvoiceMonth'])){ 
	$InvoiceMonth= date_format(date_create($_POST['InvoiceMonth']),"Y-m-d" );  
	$MM=date_format(date_create($InvoiceMonth),"m" );
	$YY=date_format(date_create($InvoiceMonth),"Y" );
	 
	$TotalInvoice_Table=$TotalInvoice_VAT=$TotalInvoice_TOTAL=$TotalInvoice_MSericeInPrice=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_SSTOTAL=$TotalInvoice_MSTOTAL=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_Anchorage 	= $TotalVAT= 0;
	$SQL = "SELECT * FROM `invoice` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY."  ;"; 
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
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/plugins/dropzone/min/dropzone.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $Homepath ;?>adminlte/dist/css/adminlte.min.css"> 
  <link rel="stylesheet" href="../include/css/jimp.css">
  <link rel="icon" type="image/x-icon" href="../include/img/favicon.ico">
  	<style>
		.table_heade{font-size: 12px;font-weight: bold;}
		.table_tbody{font-size: 14px;}
		.td_r{text-align: right;}
		.td_r_red{text-align: right;color:red;}
		.td_c{text-align: center;}
		.td_c_red{text-align: center;	color:red;}
		.td_l{text-align: left;}
		.td_l_red{text-align: left;color:red;	}
	</style>
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
								<div class="btn-group" >
									<button type="button" class="btn btn-default">Download</button>
									<button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" >
										<span class="sr-only">Download</span>
									</button>
									<div  class="dropdown-menu" role="menu" >
										<a class="dropdown-item" href="MonthlyInvoiceReportXLS.php?YM=<?php echo $MM.$YY;?>"> <i class="fas fa-file-excel"></i>   All Excel File    </a>
										<a class="dropdown-item" href="MonthlyInvoiceReportPDF.php?YM=<?php echo $MM.$YY;?>"> <i class="fas fa-file-pdf"></i>   All Pdf File     </a>
										<a class="dropdown-item" href="MonthlyInvoiceReportTableXLS.php?YM=<?php echo $MM.$YY;?>"> <span style="color:darkred"> <i class="fas fa-file-excel"></i></span>   Table Excel File </a>
									</div>
								</div> 
									<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-plus"></i> </button> 
						 
							</div>
						</div>  
						<div class="card-body">     
							<table class="table table-bordered">
								<tbody  class="table_heade">
									<tr>
										<td style="text-align:center; width:20%  ; height:20px ;">
										<p> 
											<span lang="ar-SA">   
												المملكة العربية السعودية <br>
												شركة الزامل للخدمات البحرية <br>
												<span lang="ar-SA">هـاتف :8696300 013</span>
												<br>
												<span lang="ar-SA">فـاكس :8574202 013</span>      
											</span>
										</p>
										</td>
										<td style="text-align:center; width:20%  ; height:20px ;">
										<p>
											<span lang="ar-SA"><br>
												<img src="../include/img/<?php echo $companySlog;?>_logo_s1.png" height="70px">
											</span>
										</p>
										</td>
										<td style="text-align:center; width:20%  ; height:20px ;">
											<br>
											<span lang="ar-SA"> كشف الفواتير الشهرية<br>
											</span>
											<span dir="ltr" style="font-family:Verdana;  direction:ltr;unicode-bidi:embed" lang="en-US">
												Monthly Invoice Report  
											</span><br> <?php echo $YY." - ".$MM; ?> التاريخ
										</td>
										<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
										<p>
											<span lang="ar-SA">
												<img src="img/mawani.png " height="70px"> 
											</span>
										</p>
										</td>
										<td style="text-align:center; width:20%  ; height:20px ;" valign="middle">
										<p>
											<span lang="ar-SA">
												المملكة العربية السعودية<br>
												المؤسسة العامة للموانئ<br>
												<?php echo $port_name;?>
												<br>
												www.ports.gov.sa
											</span>
										</p>
										</td>
									</tr>
								</tbody>
							</table>  
						</div> 
						<div class="card-body">   
							<table class="table table-bordered">
								<thead class="table_heade">
									<tr>
										 
										<th style="text-align:center;vertical-align:middle;" width="8%"> Invoice#</th>  
										<th style="text-align:center;vertical-align:middle;" width="20%">Vessel</th> 
										<th style="text-align:center;vertical-align:middle;" width="7%">Arrival </th>
										<th style="text-align:center;vertical-align:middle;" width="7%">Departure </th>
										<th style="text-align:center;vertical-align:middle;" width="7%">Shifting </th>
										<th style="text-align:center;vertical-align:middle;" width="7%">Port Fess</th>
										<th style="text-align:center;vertical-align:middle;" width="7%">Anchor </th> 
										<th style="text-align:center;vertical-align:middle;" width="7%">Marine S.</th>
										<th style="text-align:center;vertical-align:middle;" width="7%">Special S.</th>
										<th style="text-align:center;vertical-align:middle;" width="7%">Total</th>
										<th style="text-align:center;vertical-align:middle;" width="7%">VAT</th>
										<th style="text-align:center;vertical-align:middle;" width="7%">Total With VAT</th>

										
									</tr>
								</thead>
								<tbody class="table_tbody">  
									<?php
										$TotalInvoice_Table=$TotalInvoice_VAT=$TotalInvoice_MSericeBathPrice=$TotalInvoice_TOTAL=$TotalInvoice_MSericeInPrice=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_SSTOTAL=$TotalInvoice_MSTOTAL=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_Anchorage 	= $TotalVAT= 0;
									 
										$SQL = "SELECT * FROM `full_invoice_view` WHERE MONTH(`InvoiceDate`) =".$MM." AND YEAR(`InvoiceDate`) = ".$YY."   ;";  
 
										$invoices = $dbop->query($SQL)->fetchAll();   
										foreach ($invoices as $invoice) {     
											$Status    	= intval($invoice['Status']);   
											$InvoiceID    = $invoice['InvoiceID'];
											$ShipName     = $invoice['ShipName']; 
											$AgentNameEn  = $invoice['AgentNameEn']; 
											$AgentNameAr  = $invoice['AgentNameAr']; 
											$VAT_TOTAL    = $invoice['VAT_TOTAL'];  
											$VAT    		= $invoice['VAT']; 
											$TOTAL    	= $invoice['TOTAL'];  
											$SSTOTAL    	= $invoice['SSTOTAL'];  
											$MSTOTAL    	= $invoice['MSTOTAL'];  
											$MSericeAnchoragePrice	= $invoice['MSericeAnchoragePrice'];  
											$MovePortPrice    	= $invoice['MovePortPrice'];  
											$MSericeOutPrice    = $invoice['MSericeOutPrice'];   
											$MSericeInPrice    	= $invoice['MSericeInPrice'];   
											$MSericeBathPrice    	= $invoice['MSericeBathPrice'];    
											
											if($Status==0){
												$invoiceStart='CN-';
												$red='_red';
												$neg='-';
 
											}else{
												$invoiceStart=$orginalinvoiceStart;
												$red='';
												$neg=''; 
											} 
								echo '<tr>  
										<td class="td_c'.$red.'">'.$invoiceStart.$InvoiceID.'</td>   
										<td class="td_l'.$red.'">'.$ShipName.' </td>  
										<td class="td_r'.$red.'">'.$neg.number_format($MSericeInPrice,2,".").'  </td> 
										<td class="td_r'.$red.'">'.$neg.number_format($MSericeOutPrice,2,".").'  </td>
										<td class="td_r'.$red.'">'.$neg.number_format($MovePortPrice,2,".").'  </td>
										<td class="td_r'.$red.'">'.$neg.number_format($MSericeBathPrice,2,".").'  </td> 
										<td class="td_r'.$red.'">'.$neg.number_format($MSericeAnchoragePrice,2,".").'  </td>  
										<td class="td_r'.$red.'">'.$neg.number_format($MSTOTAL,2,".").'  </td> 
										<td class="td_r'.$red.'">'.$neg.number_format($SSTOTAL,2,".").'  </td>
										<td class="td_r'.$red.'">'.$neg.number_format($TOTAL,2,".").'  </td>
										<td class="td_r'.$red.'">'.$neg.number_format($VAT,2,"."). ' </td>
										<td class="td_r'.$red.'">'.$neg.number_format($VAT_TOTAL,2,"."). ' </td>  
									</tr>' ;}
							  ?> 
								</tbody>
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
<script src="<?php echo $Homepath ;?>adminlte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/select2/js/select2.full.min.js"></script>
	<!-- Bootstrap4 Duallistbox -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/moment/moment.min.js"></script>
	<script src="<?php echo $Homepath ;?>adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap color picker -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Bootstrap Switch -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- BS-Stepper -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
	<!-- dropzonejs -->
	<script src="<?php echo $Homepath ;?>adminlte/plugins/dropzone/min/dropzone.min.js"></script>   
	<!-- AdminLTE App -->
	<script src="<?php echo $Homepath ;?>adminlte/dist/js/adminlte.min.js"></script>
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