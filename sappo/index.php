<!DOCTYPE html>
<?php    
	   $folder_name =  basename(dirname(__FILE__));
	   Require_once( "C:\\wow\\password\\config.php"); 
	   Require_once("../include/auth.php"); 
	   Require_once("../include/config.php"); 
        if(isset($_GET['status'])){
          $status=$_GET['status'];
          switch($status){
            case 'All':
              $SQLstatus='SELECT * FROM sappo WHERE   is_active =1 ;';
              break;
            case 'Yes':
              $SQLstatus='SELECT * FROM sappo WHERE is_paid="Yes" AND is_active =1 ;';
              break;
            case 'Partial':
              $SQLstatus='SELECT * FROM sappo WHERE is_paid="Partial" AND is_active =1 ;';
              break;
            case 'No':
              $SQLstatus='SELECT * FROM sappo WHERE is_paid="No" AND is_active =1 ;';
            break;
            default:
              $SQLstatus='SELECT * FROM sappo WHERE is_active =1;';
            break;
          }; 
        }else{
          $status='All';
          $SQLstatus='SELECT * FROM sappo WHERE is_active =1;';
        }
        
     
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title><?php echo strtoupper(basename(dirname(__FILE__)));?></title>  
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
            <h1>SAP P.O.</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active"><?php echo strtoupper(basename(dirname(__FILE__)));?>.</li>
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
                <h3 class="card-title">List of all SAP P.O.  
                  <a href="?status=No">    <span class="float-right badge bg-danger">No</span></a> &nbsp; &nbsp; 
                  <a href="?status=Partial">   <span class="float-right badge bg-warning">Partial</span></a>  &nbsp; &nbsp;
                  <a href="?status=Yes">   <span class="float-right badge bg-success">Yes</span></a>   &nbsp; &nbsp;
                  <a href="?status=All">    <span class="float-right badge bg-secondary">All</span></a> &nbsp; &nbsp; 
                 
                </h3>
                
                  <div class="card-tools"> 
                    <a href="add.php">
                      <button type="button" class="btn btn-success" >
                        Add new SAP P.O.
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
                      <th>SAP PO#</th>
                      <th>Name</th>  
                      <th>Amount</th> 
                      <th>Balance</th> 
                      <th style="width:10%">Status</th> 
					   <th>Expire</th>
                      <th>Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $sappos = $dbop->query($SQLstatus)->fetchAll();
                      foreach ($sappos as $sappo) {  
			 	                echo '<tr>
                              <td>'.$sappo['no']. '  </td> 
                              <td>'.$sappo['name']. ' </td> 
                              <td>'.number_format($sappo['amount'], 2, '.', ',') . ' </td> 
                              <td>'.number_format($sappo['balance'], 2, '.', ',') . ' </td> 
                              <td>'.SAPPOStatus($sappo['is_paid']). ' </td> 
                              <td>'.$sappo['sappoExpDate']. ' </td> 							  
                              <td>  
							<div class="btn-group btn-group-sm">
								<a href="view.php?id='.$sappo['id'].'" class="btn btn-info"><i class="fas fa-eye"></i></a>
								<a href="delete.php?id='.$sappo['id'].'" class="btn btn-danger"><i class="fas fa-trash"></i></a>
							</div> 
                              </td>  
                            </tr>' ;  }  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>SAP PO#</th>
                      <th>Name</th>  
                      <th>Amount</th>
					  <th>Balance</th>
                      <th>Status</th>
                      <th>Expire</th>
                      <th>Action</th> 
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

  <!-- Control Sidebar -->
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
<script src="../include/js/menu.js"></script>
</body>
</html>
