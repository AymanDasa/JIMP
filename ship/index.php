<!DOCTYPE html>
<?php  
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php"); 
$SAPPOname = $Error_MSG='';
$IsActive = 0 ;
$NoError = 1;	   
if($debug){echo "<b>IsActive :</b>".$IsActive."<br>";} 

if(isset($_POST['add'])){
	if($debug){echo "<b>POST_IMO :</b>".$_POST['IMO']."<br>";}
	$IMO		=  	stripslashes(htmlentities( strip_tags($_POST['IMO'] )));
	$query1 = " SELECT `IMO`  FROM `ship` WHERE IMO='".$IMO."'; "; 
		if($debug){echo "<b>query :</b>".$query1."<br>";} 
	$IMOs = $dbop->query($query1)->fetchAll();    
	$DuplicateIMO=searchIMO($_POST['IMO'],$IMOs,'IMO'); 
	if($debug){print_r($IMOs);} 				
	if($debug){echo "<br><b>DuplicateIMO :</b>".$DuplicateIMO."<br>";} 		 	  
		 
	if(isset($_POST['VAT'])){$VAT	=	stripslashes(htmlentities( strip_tags($_POST['VAT'] ))); }else{$VAT=0;} 
	if($debug){echo "<b>VAT :</b>".$VAT."<br>";} 
	if($VAT=='on'){$VAT=1;}else{$VAT=0;}
			
			$IMO		=  	stripslashes(htmlentities( strip_tags($_POST['IMO'] )));
			$ShipName	= 	stripslashes(htmlentities( strip_tags($_POST['ShipName'] ))); 
			$Notes		=  	stripslashes(htmlentities( strip_tags($_POST['Notes'] )));
			$Weight		=  	stripslashes(htmlentities( strip_tags($_POST['Weight'] )));
			$Weight		=  	floatval($Weight);
	if($Weight < 1){  
	 	 $Error_MSG= '
		<script>
			$(document).ready(function() { 
				toastr.error("Sorry, Wrong G.R.T"); 
			});
			</script>'; 
		 $NoError = $NoError * 0 ;}

	if($DuplicateIMO){
		$Error_MSG= '
		<script>
			$(document).ready(function() { 
				toastr.error("Sorry, Duplicate IMO"); 
			});
			</script>'; 
		 $NoError = $NoError * 0 ;}
		 
	if($NoError)
	 {
		$query_INSERT="INSERT INTO `ship`  (`ShipName` ,`IMO` ,`Weight` ,`VAT`,`Notes`)
				VALUES ('".$ShipName."','".$IMO."',".$Weight.", ".$VAT.",'".$Notes."')"; 
				if($debug){echo "<b>query_INSERT :</b>".$query_INSERT."<br>";}
					
		$dbop->query($query_INSERT);  

		$alog_note = strval("ShipName:".$ShipName." + IMO:".$IMO."  +  Weight:".$Weight."  + VAT:".$VAT."    " );  
		$SQL_activitylog="INSERT INTO `activitylog` 
			( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
			VALUE ('".$folder_name."' ,'".$ShipName."' ,'Add Ship',	'".$username_now."' ,'".$alog_note."' 	) ;";
		$dbop->query($SQL_activitylog);   
		
		if($debug){echo "<b>IMO :</b>".$IMO."<br>";}  
		else{header("Refresh:0"); }
	}

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
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/toastr/toastr.min.css"> 
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
            <h1>Vessels </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Vessels </li>
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
                <h3 class="card-title">List of all Vessels</h3>
                  <div class="card-tools">  
				<a href="add.php" class="btn btn-app" data-toggle="modal" data-target="#modal-lg">  <i class="fas fa-plus"></i>  Add  </a>	 
                  </div>
			  
              </div> 
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>#</th>  
                      <th>Vessel Name</th> 
                      <th>IMO</th>  
                      <th>Weight</th> 
                      <th>VAT</th> 
                      <th></th> 
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
                          $VAT      = $invoice['VAT'];    
                          if($VAT){$isVAT="15%";} else{$isVAT="";}  

                       echo '<tr>
                    		<td>'.$ShipID. '  </td>   
						<td>'.$ShipName.'  </td>
                          	<td style="text-align: right;">'.$IMO. ' </td>  
                          	<td style="text-align: right;">'.$Weight. ' </td>  
                          	<td style="text-align: right;">'.$isVAT. ' </td>  
						<td>	<a href="view.php?id='.$ShipID.'" style="color: black;" >
								<i class="fas fa-pen-to-square fa-lg"></i> 
							</a>
						</td>
                        	</tr>' ; }
					       ?>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>#</th>  
                      <th>Vessels Name</th> 
                      <th>IMO</th>  
                      <th>Weight</th> 
                      <th>VAT</th>  
                      <th></th>  
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


	<!-- /. modal --> 
		<div class="modal fade" id="modal-lg">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add New Vessel</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="#" method="POST">
					<div class="modal-body">
						<div class="col-md-12">  
							<input type="hidden" name="id" >  
							<div class="row">
								<div class="col-sm-12">
									<!-- text input   -->
									<div class="form-group">
										<label>Vessel Name</label>
										<input type="text" class="form-control is-invalid" name="ShipName"  autocomplete="off">
									</div>
								</div>
							</div> 
							<div class="row">
								<div class="col-sm-6">
									<!-- text input -->
									<div class="form-group">
										<label>IMO#</label>
										<input type="text" class="form-control" name="IMO"  autocomplete="off">
									</div>
								</div>
								<div class="col-sm-6">
									<!-- text input -->
									<div class="form-group">
										<label>G.R.T.</label>
										<input type="text" class="form-control  is-invalid" name="Weight"  autocomplete="off">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<div class="custom-control custom-switch"> 
											<input name="VAT" type="checkbox" checked class="custom-control-input" id="customSwitch1">
											<label class="custom-control-label" for="customSwitch1">VAT 15%</label>
										</div>
									</div>
								</div>
							</div> 
							<div class="row">
								<div class="col-sm-12">
								<!-- textarea -->
									<div class="form-group">
										<label>Notes</label>
										<textarea class="form-control" rows="3" name="Notes" ></textarea>
									</div>
								</div> 
							</div>  
						</div> 
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="add" value="add"  class="btn btn-primary">Save changes</button>
					</div>  
				</form> 
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
		</div>
	<!-- /. modal -->

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
<script src="<?php echo $Homepath;?>adminlte/plugins/toastr/toastr.min.js"></script> 

   
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
<?php echo $Error_MSG;?>
<script> 
  var $sidebar = $('.control-sidebar')
  var $container = $('<div />', {
    class: 'p-3 control-sidebar-content'
  })
 
</script>
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
