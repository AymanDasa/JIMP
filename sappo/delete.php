<!DOCTYPE html>
		<?php       
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			$is_active =0;
			$name=$cr =$vat=$amount =$note =$conatct =$create_date=$update_date=NULL;
			$id=$_GET['id'];   
				// SELECT  AGENT
			 $query = "SELECT * FROM `sappo` WHERE   id = ".$id." LIMIT 1 ;";  
                $sappos = $dbop->query($query)->fetchAll();   
                foreach ($sappos as $sappo) {  
                    $id    				=$sappo['id'];
                    $no    				=$sappo['no'];
                    $note     			=$sappo['note'];    
                    $name     			=$sappo['name'];    
                    $amount     			=$sappo['amount'];    
                    $Option     			=$sappo['is_paid'];    
                    $is_active     		=$sappo['is_active'];    
                    $balance     			=$sappo['balance'];   }
					$del_tag=''; 	 
		 
			if($balance <  $amount  ) {
				$hname=$name;
				$CardColor='danger'; 
			} else{
				$hname="<del>".$name."</del>";
				$CardColor='danger'; 
			} 
			$today = date("Y-m-d H:i:s");
			
			$query_invoice = " SELECT * FROM `invoice` WHERE `sappo` =".$id." LIMIT 1  ; ";   
			$numRows = intval($dbop->query($query_invoice)->getRowCount());  

			if(isset($_POST['delete']) && isset($_GET['id']) && ($_POST['confirm']=='delete') ){   
				 
					 	if($numRows==0){  
							$query_delete = "DELETE FROM `sappo` WHERE `id`= ".$id  ;  
							$dbop->query($query_delete);  
							header("Location: index.php");  	
							header( "refresh:5;url=index.php" );
						}else{ 
							echo '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							 <i class="icon fas fa-check"></i> <B>Error</B>  <br>
							 
							 Error: Invoice creation failed. Please check your input and try again. 
							 <br> Remove all Invoices for this SAP. PO
							</div> '; 	
							header( "refresh:5;url=index.php" );
						}
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

		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
				<div class="col-sm-6">
				<h1>  <?=$hname;?>   </h1> 
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
					<li class="breadcrumb-item active"><a href="index.php"><?php echo strtoupper(basename(dirname(__FILE__)));?></a></li>
					</ol>
				</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">  
				<div class="row">
					<!-- left column --> 
					<div class="col-md-12"> 
						<!-- general form elements disabled -->
						<form action="#" method="POST">
							<input type="hidden" name="id"  value="<?=$id;?>">
							<div class="card card-<?=$CardColor;?>">
								<div class="card-header">
									<h3 class="card-title">General Information</h3>
									<div class="card-tools">
										<a href="view.php?id=<?=$id-1;?>">
											<button type="button" class="btn btn-tool" >
													<i class="fa fa-angle-left"></i>
											</button>
										</a>
										<a href="view.php?id=<?=$id+1;?>">
											<button type="button"  class="btn btn-tool" >
												<i class="fa fa-angle-right"></i> 
											</button>
										</a>
									</div>
								</div>  
								<div class="card-body"> 
									<div class="row">
										<div class="col-sm-6">
											<!-- text input -->
											<div class="form-group">
												<label>SAPPO #</label>
												<input type="text" class="form-control" name="no" value="<?=$no;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<!-- text input -->
											<div class="form-group">
												<label>SAPPO Name</label>
												<input type="text" class="form-control" name="name" value="<?=$name;?>">
											</div>
										</div> 
									</div>
									<div class="row">
										<div class="col-sm-3">
											<!-- text input -->
											<div class="form-group">
												<label>SAPPO Amount</label>
												<input type="text" class="form-control" name="amount" value="<?=$amount;?>">
											</div>
										</div> 
										<div class="col-sm-3">
											<!-- text input -->
											<div class="form-group">
												<label>Status</label>
												<select name="is_paid"class="custom-select">
													<?php echo SAPPOSelect($Option);?> 
												</select>
											</div>
										</div> 
									</div>
									<div class="row">
										<div class="col-sm-6">
										<!-- textarea -->
											<div class="form-group">
												<label>Note</label>
												<textarea class="form-control" rows="3" name="note" ><?=$note;?></textarea>
											</div>
										</div>
										
									</div> 

									<div class="row">
										<div class="col-sm-2"> 
											<div class="form-group">
												<input type="text" class="form-control" name="confirm">
											</div> 
										</div>
										<div class="col-sm-1"> 
											<div class="form-group">
												<input type="submit" class="btn btn-danger" value="Delete" name="delete" > 
											</div> 
										</div> 
									</div> 

									<!-- input states --> 
									</form>
								</div>
								<div class="card-footer"> 
								</div> 
								<!-- /.card-body -->
							</div>
						</form>
						<!-- /.card --> 
					</div>
					<!--/.col (right) -->
				</div> 
			</div>  
		</section> 

		<!-- INVOICE  list content -->
		<section class="content">
			<div class="container-fluid">  
				<div class="row">
					<!-- left column --> 
					<div class="col-md-12">  
						<div class="card card-<?=$CardColor;?>">
							<div class="card-header">
								<h3 class="card-title">Invoices List</h3> 
							</div>  
							<div class="card-body"> 
								<div class="row">
									<div class="col-sm-12">
										<!-- text input -->
										<table id="example1" class="table table-bordered table-striped">
											<thead>
													<tr>
														<th>ID</th>
														<th>No</th>
														<th>Date</th>
														<th>Amount</th>
														<th>Supplier</th> 
														<th>View</th> 
													</tr>
											</thead>
											<tbody>
												<?php 
												$query_invoice="SELECT * FROM `invoice` WHERE `sappo` = ".$id."; ";
												$invoices = $dbop->query($query_invoice)->fetchAll();
												 //echo $query_invoice;
												 //print_r( $invoices);
												foreach ($invoices as $invoice) {  
													$invoice_id 		=$invoice['id']; 
													$invoice_no   		=$invoice['no'];
													$invoice_date  	=$invoice['date'];    
													$invoice_amount 	=$invoice['amount'];    
													$invoice_supplier	=$invoice['supplier'];    
													$invoice_sappo		=$invoice['sappo'];    
												 
												?>
												<tr>
													<td> <?php echo $invoice_id;?></td> 
													<td> <?php echo $invoice_no;?></td> 
													<td> <?php echo $invoice_date;?></td> 
													<td> <?php echo $invoice_amount;?></td> 
													<td> <?php echo $invoice_supplier;?></td>  
													<td> <a href="../invoice/view.php?id=<?php echo $invoice_id ;?>">
														<button style="padding: .0rem .0rem;" class="btn btn-icon"> 
															<i class="fas fa-search"></i>
														</button>
													</td>  
												</tr> 
												<?php }?>
											</tbody>
										</table>
									</div>
								</div>   
							</div>
							<div class="card-footer">
							</div> 
							<!-- /.card-body -->
						</div>  
					</div>
					<!--/.col (right) -->
				</div> 
			</div>  
		</section> 

	</div>
<!-- /.content-wrapper -->
  	<?php include('../include/footer.php');?>

	<aside class="control-sidebar control-sidebar-dark"> </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $path;?>adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $path;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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


<!-- bs-custom-file-input -->
<script src="<?php echo $path;?>adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path;?>adminlte/dist/js/adminlte.min.js"></script> 
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script> 
  var $sidebar = $('.control-sidebar')
  var $container = $('<div />', {
    class: 'p-3 control-sidebar-content'
  }) 
</script>

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
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
