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
            <h1>Invoices</h1>
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
                <h3 class="card-title">List of all Invoices</h3>
                  <div class="card-tools"> 
                    <a href="add.php">
                      <button type="button" class="btn btn-success" >
                        Add new invoice
                      </button> 
                    </a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button> 
                  </div>
              </div> 
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
			   	  <th>Date</th> 
				  <th>Invoice No#</th>
                      <th> Ref - SAP PO</th> 
                      <th>Amount</th>
                      <th>Supplier</th>
                      <th>View</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $invoices = $dbop->query('SELECT * FROM invoice  ;')->fetchAll();
                      foreach ($invoices as $invoice) {  


					$invoice_supplier = $invoice['supplier'];
					$SAPPOid = $invoice['sappo'];
					$querysuppliers = "SELECT * FROM `suppliers` WHERE `id`=".$invoice_supplier." LIMIT 1;"; 
					$suppliers = $dbop->query($querysuppliers)->fetchAll();   
						foreach ($suppliers as $supplier) {    
						$SupplierName = $supplier['name'];
						$SupplierCR = $supplier['cr'];
						$SupplierConatct = $supplier['conatct'];
						$create_date = $supplier['create_date'];
						$update_date = $supplier['update_date'];
						$SupplierVAT = $supplier['vat'];} 
					
					$querySAPPO = "SELECT * FROM `sappo` WHERE `id`=".$SAPPOid." LIMIT 1;"; 
					$SAPPOs = $dbop->query($querySAPPO)->fetchAll();   
							foreach ($SAPPOs as $SAPPO) { 
								$SAPPOname = $SAPPO['name']; 
								$IsActive = intval($SAPPO['is_active']);   
							}  
						$ShortSupplierName = substr($SupplierName,0, 50);
						$ShortSupplierName = substr($ShortSupplierName,0, -1);
						

					if($IsActive){
			 	 	echo '<tr>
					  <td>'.$invoice['date']. ' </td> 
                            <td>'.$invoice['no']. ' </td> 
                              <td>'.$invoice['ref_no']. ' - '.$SAPPOname.'  </td>  
                              
                              <td>'.$invoice['amount']. ' </td> 
                              <td> <a href="../suppliers/view.php?id='.$invoice_supplier.'">
                                      <button Style="padding: .0rem .0rem;" class="btn btn-icon">  ...'. $ShortSupplierName.'.  </button>
                                    </a>
                              </td>
						<td> <a href="view.php?id='.$invoice['id'].'">
							<button style="padding: .0rem .0rem;" class="btn btn-icon"> 
								<i class="fas fa-search"></i>
							</button>
						</td>  
                            </tr>' ; }
					    }  ?>
                  </tbody>
                  <tfoot>
                  <tr>
			   	  <th>Date</th> 
				  <th>Invoice No#</th>
                      <th>SAPPO - Ref No# </th> 
                      <th>Amount</th>
                      <th>Supplier</th>
                      <th>View</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
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
