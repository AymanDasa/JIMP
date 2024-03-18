<!DOCTYPE html>
<?php    
$folder_name =  basename(dirname(__FILE__));
Require_once( "C:\\wow\\password\\config.php"); 
Require_once("../include/auth.php"); 
Require_once("../include/config.php");   
$today = date("Y-m-d H:i:s");  
$ERROR=0; 
$InvoiceID = $VAT_TOTAL= 0;
$reason='';
if(isset($_POST['search'])){$search=stripslashes(htmlentities(strip_tags($_POST['search'])));}   
 
if($debug){echo "<b>search :</b>".$search,"<br>";} 
 
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
<style>
    .tab {
        display: inline-block;
        margin-left: 10px;
    }
</style>
<div class="wrapper">
  <!-- Navbar -->
  <?php include("../include/nav.php")?>
  <?php include("../include/aside.php")?>
  <?php include("../include/post.php")?>
  	<!-- /.navbar --> 
  	<!-- Content Wrapper. Contains page content --> 
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header"> 
			<div class="container-fluid">
				<div class="row">
					<div class="col-12"> 
						<div class="card">
							<div class="card-header">
								<div class="row mb-2">
									<div class="col-sm-6">
										<h1>Search Result</h1>
									</div>
									<div class="col-sm-6">
										<ol class="breadcrumb float-sm-right">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active"> Search</li>
										</ol>
									</div>
								</div>
								 
							</div> 
						</div> 
					</div>    
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<section class="content">
			<div class="container-fluid">
				<?php if($ERROR){  ?> 
					<div class="row">
						<div class="col-12">  
							<div class="card card-danger">
								<div class="card-header">
									<h1 class="card-title" style="font-size: x-large;">ERROR</h1> 
								</div>
								<div class="card-body">
									A credit note has already been generated for this invoice. Creating another credit note for the same invoice is not permitted  
								</div>
							<!-- /.card-body -->
							</div>  
						</div> 
					</div> 
				<?php }else{ ?> 
					<div class="row">   
						<div class="col-12"> 
							<div class="card">
						 
								<!-- /.card-header  class="" style="width:100%">-->
								<div class="card-body"> 
									<table id="example1" class="table table-bordered table-striped display nowrap">
										<thead>
											<tr>
												<th>#</th> 
												<th>Date</th> 
												<th style="width:35%;">Agent Name</th> 
												<th>Ship Name</th> 
												<th>Marine Amount</th>
												<th>SServices Amount</th>
												<th>TOTAL (SAR)</th>
												<th>VAT (SAR)</th>
												<th>TOTAL With VAT (SAR)</th>  
												<th>Info</th>
											</tr>
										</thead>
										<tbody>
											<?php  
												 $SQL1 = "SELECT * FROM `full_invoice_view` WHERE `InvoiceID` LIKE '%$search%' OR `ShipName` LIKE '%$search%'  LIMIT ".$LIMIT.";";
                                                  
                                                 if($debug){echo "<b>SQL1 :</b>".$SQL1,"<br>";} 
                                                 $inv = $dbop->query($SQL1)->fetchAll();
                                                     foreach ($inv as $row) { 
                                                         $InvoiceID	        = $row['InvoiceID'];		
                                                         $ShipName		    = $row['ShipName'];	
                                                         $highlightedName = str_ireplace($search, "<span style='background-color: yellow;'>$search</span>", $ShipName);
                                                         $AgentID 		    = $row['AgentID'];		
                                                         $InvoiceDate	= $row['InvoiceDate'];	  
                                                         $AgentNameEn 	= $row['AgentNameEn'];	  
                                                         $MSTOTAL		= $row['MSTOTAL'];	
                                                         $SSTOTAL		= $row['SSTOTAL'];	
                                                         $TOTAL		    = $row['TOTAL'];	
                                                         $VAT			= $row['VAT'];	
                                                         $VAT_TOTAL	    = floatval($row['VAT_TOTAL']);		 
														 $Status       = intval($invoice['Status']);  
													    $date1=date_create($InvoiceDate);  
                                                        if($Status==0){$invoiceStart='CN-';}else{$invoiceStart=$orginalinvoiceStart;}
                                                        if($Status >700){
                                                            $approve_text = '<span style="color:#228b22;"><i class="fas fa-square-check"></i></span>';
                                                            $approve_vx='vv';
                                                        }else{
                                                           $approve_text = '<span style="color:#e52b50;"><i class="fas fa-square-xmark"></i></span>';
                                                           $approve_vx='xx';	
                                                        }

											echo '<tr>
													<td>'.$invoiceStart.$InvoiceID. ' </td>   
													<td>'.date_format($date1,"Y-m-d"). ' </td>  
													<td>'.$AgentNameEn.'  </td>
													<td>'.$highlightedName. ' </td>  
													<td style="text-align: right;">'.number_format($MSTOTAL,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($SSTOTAL,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($TOTAL,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($VAT,2,"."). ' </td> 
													<td style="text-align: right;">'.number_format($VAT_TOTAL,2,"."). ' </td>   
													<td> 
                                                        <div class="btn-group btn-group-sm"> 
                                                            <a href="view.php?id='.$InvoiceID.'" class="btn">
                                                            <i class="fas fa-eye"></i></a>
                                                            <a href="edit.php?id='.$InvoiceID.'" class="btn">
                                                            <i class="fas fa-pen-to-square"></i></a> ';
                                                            if($debug){echo '
                                                                <a href="../reports/invoice2.php?id='.$InvoiceID.'" class="btn">
                                                                <i class="fas fa-cross"></i></a>';}
                                                            echo '
                                                            <a href="../reports/invoice.php?id='.$InvoiceID.'" class="btn">
                                                                    <i class="fas fa-file-pdf"></i></a> 
                                                            <spen href="#" class="btn">'.$approve_text.'	</spen>
                                                            <span hidden>'.$approve_vx.'</spen> 
                                                        </div>
													 </td>  
												</tr>' ; } ?>
										</tbody>
										<tfoot>
											<tr>
												<th>#</th> 
												<th>Date</th> 
												<th>Agent Name</th> 
												<th>Ship Name</th> 
												<th>Marine Amount</th>
												<th>SServices Amount</th>
												<th>TOTAL (SAR)</th>
												<th>VAT (SAR)</th>
												<th>TOTAL With VAT (SAR)</th>   
												<th>Info</th>
											</tr>
										</tfoot>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div> 
					</div>  
				<?php }  ?>
			</div><!-- /.row --> 
		</section>
    		<!-- /.content -->
  	</div> 
	<?php include('../include/footer.php');?>  
</div>

	<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Credit Note</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
		  <form method="POST" id="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="modal-body"> 
				<div class="form-group">
					<label class="col-form-label" for="inputError"> Invoice Number</label>
					<input type="text" name="InvoiceID" class="form-control is-invalid" id="inputError" autocomplete="off"/>
				</div>
				<div class="form-group">
					<label class="col-form-label" for="inputError">Invoice Total Amount</label>
					<input type="text" name="VAT_TOTAL" class="form-control is-invalid" id="inputError" autocomplete="off"/>
				</div> 
				<div class="form-group">
                        <label>Reason</label>
                        <textarea class="form-control" name="reason" rows="3" placeholder=""></textarea>
                      </div>					 
			</div>
			<div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" form="form1" class="btn btn-danger">Add Credit Note</button>
			</div>
		  </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<!-- ./wrapper --> 
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
<!-- AdminLTE for demo purposes -->
<script>
  $(function () {
    $("#example1").DataTable({ 
	 "responsive": true, 
	 "lengthChange": false,  
      "ordering": false,
	 "autoWidth": false, 
      "searching": true, 
      "info": true,
	 "paging": true,
      "buttons": ["copy", "csv",   "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     
  }); 
</script>
      
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
