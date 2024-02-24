<!DOCTYPE html>
<?php    
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
$SAPPOname =  $table_body= '';
$IsActive = 0 ;	  
$TotalInvoiceTable=0;
 
if(isset($_POST['InvoiceDate'])){ 
	$InvoiceDate= date_format(date_create($_POST['InvoiceDate']),"Y-m-d" ); 
	$LinkPDF='<a href="DailyInvoiceReportPDF.php?InvoiceDate='.$InvoiceDate.'">'; 
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
    <style>
	.table_heade{
		font-size: 12px;
		font-weight: bold;  
		}

	.table_tbody{
		font-size: 14px;  
		}
    </style>
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
												<img src="img/logo_s1.png" height="40px">
											</span>
										</p>
										</td>
										<td style="text-align:center; width:20%  ; height:20px ;">
											<br>
											<span lang="ar-SA"> كشف الفواتير اليومية<br>
											</span>
											<span dir="ltr" style="font-family:Verdana;language:en-US;direction:ltr;unicode-bidi:embed" lang="en-US">
												Daily Invoice Report  
											</span><br> <?php echo $InvoiceDate; ?> التاريخ
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
															ميناء الملك عبد العزيز / الدمام<br>
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
										<th style="text-align:center;vertical-align:middle" width="10%">الإجمالي </th>
										<th style="text-align:center;vertical-align:middle" width="10%">ضريبة <br>القيمة المضافه </th>
										<th style="text-align:center;vertical-align:middle" width="10%">المجموع</th>
										<th style="text-align:center;vertical-align:middle" width="10%">الخدمات البحرية <br> الخاصة</th>
										<th style="text-align:center;vertical-align:middle" width="10%">أجور الإنتقال من <br> رصيف الى اخر</th>
										<th style="text-align:center;vertical-align:middle" width="10%">أجور استخدام <br> المخطاف</th>
										<th style="text-align:center;vertical-align:middle" width="10%">أجور استخدام <br> الرصيف</th>
										<th style="text-align:center;vertical-align:middle" width="10%">أجور المغادرة</th>
										<th style="text-align:center;vertical-align:middle" width="10%">أجور القدوم</th>
										<th style="text-align:center;vertical-align:middle" width="20%">اسم السفينة</th>
										<th style="text-align:center;vertical-align:middle" width="8%">رقم الفاتورة</th> 
									</tr>
								</thead>
								<tbody class="table_tbody">  
									<?php
										$TotalInvoice_Table=$TotalInvoice_VAT=$TotalInvoice_TOTAL=$TotalInvoice_MSericeInPrice=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_SSTOTAL=$TotalInvoice_MSTOTAL=$TotalInvoice_MSericeOutPrice=$TotalInvoice_MovePortPrice=$TotalInvoice_Anchorage 	= $TotalVAT= 0;
										$SQL = "SELECT * FROM `invoice` WHERE DATE(`InvoiceDate`) = '".$InvoiceDate."';";   
										$invoices = $dbop->query($SQL)->fetchAll();   
										foreach ($invoices as $invoice) {     
											$InvoiceID    = $invoice['InvoiceID'];
											$ShipName     = $invoice['ShipName']; 
											$AgentNameEn  = $invoice['AgentNameEn']; 
											$AgentNameAr  = $invoice['AgentNameAr']; 
											$VAT_TOTAL    = $invoice['VAT_TOTAL'];  
											$TotalInvoice_Table 	=  $TotalInvoice_Table +$VAT_TOTAL ; 
											$VAT    		= $invoice['VAT']; 
											$TotalInvoice_VAT=  $TotalInvoice_VAT +$VAT ; 
											$TOTAL    	= $invoice['TOTAL'];  
											$TotalInvoice_TOTAL=  $TotalInvoice_TOTAL +$TOTAL ; 
											$SSTOTAL    	= $invoice['SSTOTAL'];  
											$TotalInvoice_SSTOTAL=  $TotalInvoice_SSTOTAL +$SSTOTAL ; 
											$MSTOTAL    	= $invoice['MSTOTAL'];  
											$TotalInvoice_MSTOTAL=  $TotalInvoice_MSTOTAL +$MSTOTAL ; 
											$MSericeAnchoragePrice	= $invoice['MSericeAnchoragePrice'];  
											$TotalInvoice_Anchorage=  $TotalInvoice_Anchorage +$MSericeAnchoragePrice ; 
											$MovePortPrice    	= $invoice['MovePortPrice'];  
											$TotalInvoice_MovePortPrice=  $TotalInvoice_MovePortPrice +$MovePortPrice ; 
											$MSericeOutPrice    = $invoice['MSericeOutPrice'];  
											$TotalInvoice_MSericeOutPrice=  $TotalInvoice_MSericeOutPrice +$MSericeOutPrice ; 
											$MSericeInPrice    	= $invoice['MSericeInPrice'];   
											$TotalInvoice_MSericeInPrice=  $TotalInvoice_MSericeInPrice +$MSericeInPrice ; 
											echo '<tr>
												<td style="text-align: right;">'.number_format($VAT_TOTAL,2,"."). ' </td>
												<td style="text-align: right;">'.number_format($VAT,2,"."). ' </td>
												<td style="text-align: right;">'.number_format($TOTAL,2,".").'  </td>
												<td style="text-align: right;">'.number_format($SSTOTAL,2,".").'  </td>
												<td style="text-align: right;">'.number_format($MSTOTAL,2,".").'  </td>
												<td style="text-align: right;">'.number_format($MSericeAnchoragePrice,2,".").'  </td>
												<td style="text-align: right;">'.number_format($MovePortPrice,2,".").'  </td>
												<td style="text-align: right;">'.number_format($MSericeOutPrice,2,".").'  </td>
												<td style="text-align: right;">'.number_format($MSericeInPrice,2,".").'  </td> 
												<td>'.$ShipName.' </td>  
												<td style="text-align: center;">'.$InvoiceID.'</td>  
											</tr>' ;}
											echo '<tr>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_Table,2,".").' </td>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_VAT,2,".").' </td>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_TOTAL,2,".").' </td>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_SSTOTAL,2,".").' </td>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_MSTOTAL,2,".").' </td>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_Anchorage,2,".").' </td>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_MovePortPrice,2,".").' </td>
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_MSericeOutPrice,2,".").' </td> 
												<td style="text-align: right; font-weight: bold;  "> '.number_format($TotalInvoice_MSericeInPrice,2,".").' </td>
												<td>  </td> 
												<td>  </td>  
											</tr>'; ?> 
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