<!DOCTYPE html>
<?php  
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
$SAPPOname = '';
$IsActive = 0 ;	   
if($debug){echo "<b>IsActive :</b>".$IsActive."<br>";} 
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1>Ships</h1>
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
                <h3 class="card-title">List of all Ships</h3>
                  <div class="card-tools"> 
                    <a href="add.php">
                      <button type="button" class="btn btn-success" >
                        Add new Ship
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
                      <th>#</th> 
                      <th>IMO</th>  
                      <th>Ship Name</th> 
                      <th>Weight</th>
                      <th>Agent Name</th>
                      <th>VAT</th>
                      <th>View</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $invoices = $dbop->query('SELECT * FROM `Ship`  ')->fetchAll();
                      foreach ($invoices as $invoice) { 
                          
                          $ShipID   = $invoice['ShipID'];
                          $IMO      = $invoice['IMO'];
                          $ShipName = $invoice['ShipName']; 
                          $Weight   = $invoice['Weight']; 
                          $AgentID  = $invoice['AgentID'];  
                          $VAT      = $invoice['VAT'];    
                          if($VAT){$isVAT="15%";} else{$isVAT="";} 

                          $query = "SELECT *  FROM `agents` WHERE `AgentID`=".$AgentID." LIMIT 1;"; 
                            $agents = $dbop->query($query)->fetchAll();   
                            foreach ($agents as $agent) {  
                              if(isset($agent['AgentNameAr'])){$AgentNameAr = $agent['AgentNameAr'];}else{$AgentNameAr ="";}
                            }  

                       echo '<tr>
                          <td>'.$ShipID. ' </td>  
                          <td style="text-align: right;">'.$IMO. ' </td>  
                          <td>'.$ShipName.'  </td>
                          <td style="text-align: right;">'.$Weight. ' </td> 
                          <td>'.$AgentNameAr. ' </td> 
                          <td style="text-align: right;">'.$isVAT. ' </td> 

                          <td>   
                            <div class="btn-group btn-group-sm"> 
                              <a href="view.php?id='.$ShipID.'" class="btn btn-info">
                              <i class="fas fa-eye"></i></a> 
                            </div>
                          </td>  
                             
                        </tr>' ; }
					       ?>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>#</th> 
                      <th>IMO</th>  
                      <th>Ship Name</th> 
                      <th>Weight</th>
                      <th>Agent Name</th>
                      <th>VAT</th> 
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
<script src="<?php echo $Homepath;?>adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $Homepath;?>adminlte/dist/js/adminlte.min.js"></script> 
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
