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
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"> 
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/select2/css/select2.min.css"> 
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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

    <!-- Main content





				



 		
		
		
		-->
    <section class="content">
     <div class="container-fluid">
		<div class="row">
			<div class="col-12"> 
				<div class="card">  
					<div class="card-body">
            				<h4>Custom Content Below</h4>
						<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"> Daily Invoice Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Monthly Invoice Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Messages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Settings</a>
						</li>
						</ul>
						<div class="tab-content" id="custom-content-below-tabContent">
						<div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
						<p>
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
						</p>
						<button type="submit" class="btn btn-info float-right">Genrate</button>

						</div>
						<div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">

							<p>
							<div class="form-group"> 
							 	<label>Invoice Date</label>
								<select name="Month" class="form-control">
									<option value="1">محرم		</option>
									<option value="2">صفر		</option>
									<option value="3">ربيع أول	</option>
									<option value="4">ربيع ثاني	</option>
									<option value="5">جمادى أول	</option>
									<option value="6">جمادى أخر	</option>
									<option value="7">رجب		</option>
									<option value="8">شعبان		</option>
									<option value="9">رمضان		</option>
									<option value="10">شوال		</option>
									<option value="11">ذوالقعدة	</option>
									<option value="12">ذو الحجه	</option> 
								</select>
							</div>
							<div class="form-group"> 
								<label>Year Hijri</label>
								<input type="text" class="form-control" name="ds" value="14" >
							</div>
							<div class="form-group"> 
								<label>Start Invoice</label>
								<input type="text" class="form-control" name="ds" value="14" >
							</div>
							<div class="form-group"> 
								<label>Last Invoice</label>
								<input type="text" class="form-control" name="ds" value="14" >
							</div>
							<button type="submit" class="btn btn-info float-right">Genrate</button>
						</p>

						</div>
						<div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">



						</div>
						<div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">

	
	
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

<!-- jQuery -->
<script src="<?php echo $path;?>adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $path;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Select2 -->
<script src="<?php echo $path;?>adminlte/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $path;?>adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $path;?>adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path;?>adminlte/dist/js/adminlte.min.js"></script> 
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $('.select2').select2() 
    //Date picker Date From todate
    $('#ClickInvoiceDate').datetimepicker({
    format: 'YYYY-MM-DD'
    });


  }); 
</script>
<script> 
  var $sidebar = $('.control-sidebar')
  var $container = $('<div />', {
    class: 'p-3 control-sidebar-content'
  })
 
</script>
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
