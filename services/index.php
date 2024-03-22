<!DOCTYPE html>
<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
      
     
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
  <link rel="stylesheet" href="../include/css/jimp.css">
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
            <h1>DataTables</h1>
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
              <h3 class="card-title">List of all Services</h3>
                  <div class="card-tools">  
 <a href="add.php" class="btn btn-app-x" data-toggle="modal" data-target="#modal-lg">  <i class="fas fa-plus"></i>     </a>	 
                
                  </div>
              </div> 
              <!-- /.card-header -->
              <div class="card-body p-0"> 
                <div class="row">
                  <div class="col-12"> 

                    <table width="100%">
                      <thead>
                      <tr>
                          <th>Code</th>
                          <th>Description</th>
                          <th>Service Type</th>
                          <th>Unit</th>
                          <th>Weight Factor</th>
                          <th>Double Factor</th>
                          <th>Profit Percent</th>
                          <th>Cost</th>
                          <th>MinCost</th> 
                          <th>Update</th> 
                      </tr>
                      </thead>
                      <tbody>
                      <?php 


                        $query_allservices = "SELECT * FROM `services` ORDER BY  `Service_ID` ASC ;"; 
                            if($debug){echo "<b>query :</b>".$query_allservices."<br>";}
                                    $services = $dbop->query($query_allservices)->fetchAll();   
                                    foreach ($services as $service) {  
                                        $Service_ID    	=intval($service['Service_ID']);
                                        $code 	        =$service['code'];
                                        $Description		=$service['Description'];        
                                        $ServiceType		=intval($service['ServiceType']);
                                        if($ServiceType){$checkedServiceType="checked";}else{$checkedServiceType="";} 
                                        $Unit		=$service['Unit'];        
                                        $WeightFactor		=intval($service['WeightFactor']);   
                                        if($WeightFactor){$checkedWeightFactor="checked";}else{$checkedWeightFactor="";}     
                                        $DoubleFactor		=$service['DoubleFactor'];        
                                        $ProfitPercent		=$service['ProfitPercent'];        
                                        $Cost		=$service['Cost'];        
                                        $MinCost		=$service['MinCost'];        
                                        $Notes		=$service['Notes']; 


                            echo '
                            <form method="POST" action="view.php">
                                <tr>
                                    <td> <input style="width: 50px;" value="'.$code.'" name="code">  </td> 
                                    <td> <input style="width: 500px;"  value="'.$Description. '" name="Description">   </td>  
                                    <td style="width: 80px;"> 
                                      <div class="form-group">
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success" style="text-align: center;">
                                          <input  type="checkbox" class="custom-control-input" id="customSwitchs'.$Service_ID.'" '.$checkedServiceType.'  name="ServiceType">
                                          <label class="custom-control-label" for="customSwitchs'.$Service_ID.'">  </label>
                                        </div>
                                      </div>       
                                    </td>   
                                    <td><input  style="width: 100%;" value="'.$Unit.'" name="Unit">   </td>  
                                    <td> 
                                      <div class="form-group">
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success" style="text-align: center;">
                                          <input type="checkbox" class="custom-control-input" id="customSwitchw'.$Service_ID.'" '.$checkedWeightFactor.'  name="WeightFactor">
                                          <label class="custom-control-label" for="customSwitchw'.$Service_ID.'">  </label>
                                        </div>
                                      </div>       
                                    </td>  
                                    <td><input type="number"  style="width: 100%;" value="'.$DoubleFactor.'" name="DoubleFactor">  </td> 
                                    <td><input type="number" style="width: 100%;" value="'.$ProfitPercent. '" name="ProfitPercent">  </td> 
                                    <td><input type="number" style="width: 100%;" value="'. $Cost.'" name="Cost">  </td> 
                                    <td><input type="number" style="width: 100%;" value="'.$MinCost.'" name="MinCost">   </td>  
                                  <td>   
                                  <div class="btn-group btn-group-sm">  
                                    <input type="hidden" value='.$Service_ID.' name="Service_ID"> 
                                    <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-upload"></i></button>

                                  </div>
                                </td>  
                              </tr>
                              </form>' ;  }  ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Code</th>
                          <th>Description</th>
                          <th>Service Type</th>
                          <th>Unit</th>
                          <th>Weight Factor</th>
                          <th>Double Factor</th>
                          <th>Profit Percent</th>
                          <th>Cost</th>
                          <th>MinCost</th> 
                          <th>Update</th> 
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div> 
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
