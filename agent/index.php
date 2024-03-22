<!DOCTYPE html>
<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			$is_active =0; 
			$NoError = 1;	  
			$name=$cr =$vat =$conatct =$create_date=$update_date=" "; 
					$today = date("Y-m-d H:i:s");  
					$Xcont = 1;
			if(isset($_POST['add'])){ 
						$AgentNameAr		=  	stripslashes(htmlentities( strip_tags($_POST['AgentNameAr'] )));
						$AgentNameEn		= 	stripslashes(htmlentities( strip_tags($_POST['AgentNameEn'] )));
						$AgentCR			=  	stripslashes(htmlentities( strip_tags($_POST['AgentCR'] )));
						$AgentEmail			=  	stripslashes(htmlentities( strip_tags($_POST['AgentEmail'] )));
						$AgentBilling		=  	stripslashes(htmlentities( strip_tags($_POST['AgentBilling'] )));
						$AgentEx2			=  	stripslashes(htmlentities( strip_tags($_POST['AgentEx2'] )));
						$AgentPhone			=  	stripslashes(htmlentities( strip_tags($_POST['AgentPhone'] )));
						$AgentContactName	=  	stripslashes(htmlentities( strip_tags($_POST['AgentContactName'] )));
						$AgentNotes			=  	stripslashes(htmlentities( strip_tags($_POST['AgentNotes'] )));  

						if($AgentNameEn ==''){  
							$Error_MSG= '
						   <script>
							   $(document).ready(function() { 
								   toastr.error("Sorry, Empty Agent Name En."); 
							   });
							   </script>'; 
						    $NoError = $NoError * 0 ;} 
					   if(strlen($AgentCR) ==0){
						   $Error_MSG= '
						   <script>
							   $(document).ready(function() { 
								   toastr.error("Sorry, Empty CR"); 
							   });
							   </script>'; 
						    $NoError = $NoError * 0 ;}

						    $Xcont =0;
						    	$NewCR	=  	stripslashes(htmlentities( strip_tags($_POST['AgentCR'] )));
							$SqlCR = " SELECT `AgentCR`  FROM `agents` WHERE `AgentCR`='".$NewCR."' LIMIT 1; "; 
								if($debug){echo "<b>query :</b>".$SqlCR."<br>";}  
							$result  =  $dbop->query($SqlCR) ;  
							$Xcont  =  $result->numRows() ; 
						if($Xcont > 0 ){
							$Error_MSG= '
								<script>
								$(document).ready(function() { 
									toastr.error("Sorry, Duplicate CR"); 
								});
								</script>'; 
							$NoError = $NoError * 0 ;}  
					if($NoError){ // agent
						$query_INSERT="INSERT INTO `agents`  
						(`AgentNameAr` ,`AgentNameEn` ,`AgentCR` ,`AgentEmail`,`AgentBilling`,`AgentEx2`,`AgentPhone`,`AgentContactName`,`AgentNotes`)
						VALUES ('".$AgentNameAr."', '".$AgentNameEn."','".$AgentCR."','".$AgentEmail."','".$AgentBilling."','".$AgentEx2."','".$AgentPhone."','".$AgentContactName."','".$AgentNotes."');"; 
						if($debug){echo "<b>query_INSERT :</b>".$query_INSERT."<br>";}  
						$dbop->query($query_INSERT);   
						 // LOG File
						$alog_note = strval("AgentNameAr:".$AgentNameAr." + AgentCR:".$AgentCR."= AgentNameEn:".$AgentNameEn."    " );  
						$SQL_activitylog="INSERT INTO `activitylog` 
							( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
							VALUE ('".$folder_name."' ,'".$AgentNameAr."' ,'Add  Agent',	'".$username_now."' ,'".$alog_note."' 	) ;";
						$dbop->query($SQL_activitylog);    
						if($debug){echo "<b>IMO :</b>".$AgentCR."<br>";}  else{header("Refresh:20"); }
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
            <h1>Agents</h1>
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
                <h3 class="card-title">List of all Agents</h3>
			 <div class="card-tools">  
				<a href="add.php" class="btn btn-app-x" data-toggle="modal" data-target="#modal-lg">  <i class="fas fa-plus"></i>     </a>	 
                  </div>
              </div> 
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>Agent Name</th>
                      <th>CR / VAT</th>
                      <th>IBAN</th>
                      <th>Conatct</th>
                      <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 


                  $query = "SELECT * FROM `agents`  ;"; 
                        if($debug){echo "<b>query :</b>".$query."<br>";}
                                $Agents = $dbop->query($query)->fetchAll();   
                                foreach ($Agents as $Agent) {  
                                    $AgentID    	=$Agent['AgentID'];
                                    $AgentNameAr 	=$Agent['AgentNameAr'];
                                    $AgentCR		=$Agent['AgentCR'];        
                                    $AgentEmail 	=$Agent['AgentEmail'];        
                                    $AgentBilling	=$Agent['AgentBilling'];        
                                    $AgentNameEn	=$Agent['AgentNameEn'];        
                                    $AgentEx2	=$Agent['AgentEx2'];        
                                    $AgentPhone 	=$Agent['AgentPhone'];        
                                    $AgentContactName 	=$Agent['AgentContactName'];        
                                    $AgentNotes		=$Agent['AgentNotes'];      
			 	                echo '<tr>
                              <td> '.$AgentNameEn. '  </td> 
                              <td>'.$AgentCR. ' </td> 
                              <td>'.$AgentBilling. ' </td> 
                              <td>'.$AgentContactName. ' </td> 
                              <td>    
                                <a href="view.php?id='.$AgentID.'" style="color: black;" >
                                <i class="fas fa-pen-to-square fa-lg"></i>  
                            </td>  
					  
                            </tr>' ;  }  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>Agent Name</th>
                      <th>CR / VAT</th>
                      <th>IBAN</th>
                      <th>Conatct</th>
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
					<h4 class="modal-title">Add New Agent</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="#" method="POST">
				<div class="modal-body">
						<div class="col-md-12">  
						<div class="row">
							<div class="col-sm-6">
							<!-- text input  -->
							<div class="form-group">
								
								<label>Company Name En</label>
								 <input type="text"  class="form-control is-invalid" name="AgentNameEn" autocomplete="off">
								<label>Company Name Ar</label>
								 <input type="text" class="form-control" name="AgentNameAr"  autocomplete="off">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>CR / VAT No#</label>
								<input type="text" class="form-control is-invalid" class="form-control" name="AgentCR" autocomplete="off">
								<label>IBAN</label>
								<input type="text" class="form-control" name="AgentBilling" autocomplete="off">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input   -->
							<div class="form-group">
							<label>AgentPhone</label>
								<input type="text" class="form-control" name="AgentPhone" autocomplete="off">
							<label>Contact Name</label>
								<input type="text" class="form-control" name="AgentContactName"  autocomplete="off">
							</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-6">
							<!-- textarea -->
							<div class="form-group">
								<label>Contact Address</label>
								<textarea class="form-control" rows="3" name="AgentNotes" ></textarea>
							</div>
							</div>
							<div class="col-sm-3">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="AgentEmail" autocomplete="off"> 
								<label>Other</label>
								<input type="text" class="form-control" name="AgentEx2" autocomplete="off"> 
							</div>
							</div>
						</div> 
						<!-- input states -->  
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

 
	<!-- /. modal -->
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
