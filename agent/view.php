<!DOCTYPE html>
		<?php   
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
			$is_active =0;
			$name=$cr =$vat =$conatct =$create_date=$update_date=" ";
			$id=intval($_GET['id']);   
			$AgentID=intval($_GET['id']); 
				// SELECT  AGENT
				$query = "SELECT * FROM `agents` WHERE `AgentID`='".$AgentID."' LIMIT 1 ;"; 
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
                    $AgentNotes		=$Agent['AgentNotes'];      }
					$del_tag=''; 	
					if($debug){echo "<b>AgentID :</b>".$AgentID."<br>";} 
			$today = date("Y-m-d H:i:s");

			if($debug){echo "<b>_POST[save] :</b>".$_POST['save']."<br>";} 
			if(isset($_POST['save'])){
						$AgentNameAr=  	stripslashes(htmlentities( strip_tags($_POST['AgentNameAr'] )));
						$AgentCR=  		stripslashes(htmlentities( strip_tags($_POST['AgentCR'] )));
						$AgentEmail=  		stripslashes(htmlentities( strip_tags($_POST['AgentEmail'] )));
						$AgentBilling=  stripslashes(htmlentities( strip_tags($_POST['AgentBilling'] )));
						$AgentNameEn=  stripslashes(htmlentities( strip_tags($_POST['AgentNameEn'] )));
						$AgentEx2=  stripslashes(htmlentities( strip_tags($_POST['AgentEx2'] )));
						$AgentPhone=  stripslashes(htmlentities( strip_tags($_POST['AgentPhone'] )));
						$AgentContactName=  stripslashes(htmlentities( strip_tags($_POST['AgentContactName'] ))); 
						$AgentNotes=  stripslashes(htmlentities( strip_tags($_POST['AgentNotes'] ))); 
  
						if($debug){echo "<b>AgentID :</b>".$AgentID."<br>";} 

				$query="UPDATE `agents` SET 
					`AgentNameAr`='".$AgentNameAr."', 
					`AgentCR`='".$AgentCR."', 
					`AgentEmail`='".$AgentEmail."', 
					`AgentBilling`='".$AgentBilling."', 
					`AgentNameEn`='".$AgentNameEn."', 
					`AgentEx2`='".$AgentEx2."', 
					`AgentPhone`='".$AgentPhone."', 
					`AgentContactName`='".$AgentContactName."',
					`AgentNotes`='".$AgentNotes."'
					  WHERE `AgentID` = ".$AgentID.";"; 

					  if($debug){echo "<b>query :</b>".$query."<br>";} 
					  $dbop->query($query);  
					   if($debug){echo "<b>AgentCR :</b>".$AgentCR."<br>";}  else{header("Refresh:0");  }
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
			<h1>  Agent</h1> 
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				<li class="breadcrumb-item active"><a href="index.php"><?php echo ucwords(basename(dirname(__FILE__)));?></a></li>
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
					<input type="hidden" name="id"  value="<?=$AgentID;?>">
					<div class="card card-<?=$CardColor;?>">
						<div class="card-header">
							<h3 class="card-title">General Information</h3> 
						</div>  
						<div class="card-body"> 
							<div class="row">
								<div class="col-sm-6">
								<!-- text input  -->
								<div class="form-group">
									<label>Company Name Ar</label>
									<input type="text" class="form-control" name="AgentNameAr" value="<?=$AgentNameAr;?>" autocomplete="off">
									<label>Company Name En</label>
									<input type="text" class="form-control" name="AgentNameEn" value="<?=$AgentNameEn;?>" autocomplete="off">
								</div>
								</div>
								<div class="col-sm-3">
								<!-- text input -->
								<div class="form-group">
									<label>CR No#</label>
									<input type="text" class="form-control" name="AgentCR" value="<?=$AgentCR;?>" autocomplete="off">
									<label>IBAN</label>
									<input type="text" class="form-control" name="AgentBilling" value="<?=$AgentBilling;?>" autocomplete="off">
								</div>
								</div>
								<div class="col-sm-3">
								<!-- text input   -->
								<div class="form-group">
								<label>AgentPhone</label>
									<input type="text" class="form-control" name="AgentPhone" value="<?=$AgentPhone;?>" autocomplete="off">
								<label>Contact Name</label>
									<input type="text" class="form-control" name="AgentContactName" value="<?=$AgentContactName;?>" autocomplete="off">
								</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-sm-6">
								<!-- textarea -->
								<div class="form-group">
									<label>Contact Address</label>
									<textarea class="form-control" rows="3" name="AgentNotes" ><?=$AgentNotes;?></textarea>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" name="AgentEmail" value="<?=$AgentEmail;?>" autocomplete="off"> 
									<label>Other</label>
									<input type="text" class="form-control" name="AgentEx2" value="<?=$AgentEx2;?>" autocomplete="off"> 
								</div>
								</div>
							</div> 
							<!-- input states --> 
							</form>
						</div>
						<div class="card-footer">
							<button type="submit" name="save" value="save" class="btn btn-info">Update</button>
						</div> 
					<!-- /.card-body -->
					</div>
					</form>
					<!-- /.card -->
					<!-- general form elements disabled -->
					
					<!-- /.card -->
				</div>
				<!--/.col (right) -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
<?php 
	$enable=0;
	$invoices = $dbop->query('SELECT * FROM `invoice` WHERE `AgentID`='.$AgentID.' ORDER BY  `InvoiceID` DESC LIMIT 10') ;
	$numRow = $dbop->numRows(); 
	if($numRow > 0){
?>
		<section class="content">
			<div class="container-fluid">
				<div class="row">
				<!-- left column --> 
				<div class="col-md-12">  
					<div class="card card-<?=$CardColor;?>">
						<div class="card-header">
							<h3 class="card-title">Last 100 Invoices</h3> 
						</div>  
						<div class="card-body">  
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>#</th> 
												<th>Date</th> 
												<th>Ship Name</th> 
												<th>Marine Service</th>
												<th>Special Services</th>
												<th>TOTAL+VAT (SAR)</th>
												<th>View</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$invoices = $dbop->query('SELECT * FROM `invoice` WHERE `AgentID`='.$AgentID.' ORDER BY  `InvoiceID` DESC LIMIT 100')->fetchAll();
											foreach ($invoices as $invoice) { 
												
												$InvoiceDate  = $invoice['InvoiceDate'];
												$InvoiceID    = $invoice['InvoiceID'];
												$ShipName     = $invoice['ShipName']; 
												$AgentNameEn  = $invoice['AgentNameEn']; 
												$AgentNameAr  = $invoice['AgentNameAr']; 
												$MSTOTAL  = $invoice['MSTOTAL']; 
												$SSTOTAL  = $invoice['SSTOTAL']; 
												$VAT_TOTAL    = $invoice['VAT_TOTAL'];  
												$Status       = $invoice['Status'];   
												$date1=date_create($InvoiceDate); 
												switch(intval($Status)){  
												case 700:
													$Icons='<a href="../invoice/edit.php?id='.$invoice["InvoiceID"].'" class="btn btn-warning">
													<i class="fas fa-pen-to-square"></i></a> 
													<a href="../invoice/view.php?id='.$invoice["InvoiceID"].'" class="btn btn-danger">
													<i class="fas fa-trash"></i></a>';
													break;
												case 800:
													$Icons='<a href="../reports/invoice.php?id='.$invoice["InvoiceID"].'" class="btn btn-danger">
													<i class="fas fa-print"></i></a>';
													break;
												default:
													echo $Icons="";
												}
												
											echo '<tr>
												<td>'.$InvoiceID. ' </td>  
												<td>'.date_format($date1,"Y-m-d"). ' </td>  
												<td>'.$ShipName.'  </td>
												<td style="text-align: right; width:10%">'.number_format($MSTOTAL,2,","). ' </td> 
												<td style="text-align: right; width:10%"">'.number_format($SSTOTAL,2,","). ' </td> 
												<td style="text-align: right; width:12%"">'.number_format($VAT_TOTAL,2,"."). ' </td> 
												<td style="text-align: right; width:5%"">  
													<div class="btn-group btn-group-sm"> 
														<a href="../invoice/view.php?id='.$invoice['InvoiceID'].'" class="btn btn-info">
														<i class="fas fa-eye"></i></a>
														'.$Icons.'
													</div>
												</td>  
											</tr>' ; }
													?>
										</tbody>
										<tfoot>
											<tr>
												<th>#</th> 
												<th>Date</th> 
												<th>Ship Name</th> 
												<th>Marine Service</th>
												<th>Special Services</th>
												<th>TOTAL+VAT (SAR)</th>
												<th>View</th>
											</tr>
										</tfoot>
									</table>  
						</div>
					</div> 
				</div>
			</div> 
		</section>
<?php }?>
		<!-- /.content -->
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
<script>
$(function () {
  bsCustomFileInput.init();
}); 
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
