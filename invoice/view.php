<!DOCTYPE html>
		<?php    
			$debug =0;
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			$is_active =0;
			$del_tag=''; 
			$name=$cr =$vat =$conatct =$create_date=$update_date=" ";
			$id=intval($_GET['id']);   
				// SELECT  AGENT
			if($id){
				$query_invoice = "SELECT * FROM `invoice` WHERE   id = ".$id." LIMIT 1;";  
				$invoices = $dbop->query($query_invoice)->fetchAll();   
				foreach ($invoices as $invoice) {  
					$invoice_id 		=intval($invoice['id']); 
					$invoice_no   		=$invoice['no'];
					$invoice_date  	=$invoice['date'];    
					$ref_no  			=$invoice['ref_no'];    
					$invoice_amount 	=floatval( $invoice['amount'] );    
					$invoice_supplier	=intval($invoice['supplier']);    
					$invoice_sappo		=intval($invoice['sappo']);   
				}
					
				$query_sappo = "SELECT * FROM `sappo`  WHERE   id = ".$invoice_sappo." LIMIT 1;";  
				$sappos = $dbop->query($query_sappo)->fetchAll();   
				foreach ($sappos as $sappo) {  
						$sappo_id 		=intval($sappo['id']); 
						$sappo_no   		=$sappo['no'];
						$sappo_date  		=$sappo['name'];    
						$sappo_amount 		=floatval( $sappo['amount'] );    
						$sappo_balance		=floatval($sappo['balance']);    
						$sappo_is_paid		=intval($sappo['is_paid']);  
						$sappo_is_active	=intval($sappo['is_active']);  
				}
 
				$query = "SELECT * FROM `suppliers` WHERE `id`=".$invoice_supplier." LIMIT 1;"; 
				$suppliers = $dbop->query($query)->fetchAll();   
				foreach ($suppliers as $supplier) {    
				$SupplierName = $supplier['name'];
				$SupplierCR = $supplier['cr'];
				$SupplierConatct = $supplier['conatct'];
				$create_date = $supplier['create_date'];
				$update_date = $supplier['update_date'];
				$SupplierVAT = $supplier['vat'];}

			}else{
				echo 'Error Invoice';
				exit();
			}
					 
			if($is_active) {
				$hname=$name;
				$CardColor='secondary';
			} else{
				$hname="<del>".$name."</del>";
				$CardColor='danger'; 
			} 
			$today = date("Y-m-d H:i:s"); 

			if(isset($_POST['delete']) && ($_POST['confirm']=='delete') ){   
					$sappo_balance  	= $sappo_balance + $invoice_amount ; 
					$sappo_quiry="UPDATE `sappo` SET 
									`balance` = '".$sappo_balance."' 
									, `is_active` = 1 
								WHERE `sappo`.`id` = ".$sappo_id."; ";
					$dbop->query($sappo_quiry);  
					$query_delete = "DELETE FROM `invoice` WHERE `id`= ".$id  ;  
					$dbop->query($query_delete);  
					header("Location: index.php");  
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
			<h1>  <?=$hname;?>  </h1> 
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
				<input type="hidden" name="id"  value="<?=$id;?>">
				<div class="card card-<?=$CardColor;?>">
					<div class="card-header">
						<h3 class="card-title">Invoice # <?=$invoice_no;?>  Information</h3>
						<div class="card-tools">
							<a href="view.php?id=<?=$id-1;?>">
								<?php if(($id-1)>0){?>
								<button type="button" class="btn btn-tool" >
										<i class="fa fa-angle-left"></i>
								</button>
								<?php }?>
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
							<div class="col-sm-3">
							<!-- text input --> 
							<div class="form-group">
								<label>Amount</label>
								<input type="text" class="form-control" name="name" value="<?=$invoice_amount;?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>Invoice Date</label>
								<input type="text" class="form-control" name="cr" value="<?=$invoice_date;?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label> <a href="../sappo/view.php?id=<?=$invoice_sappo;?>">SAP.PO No#</a></label>
								<input type="text" class="form-control" name="vat" value="<?=$sappo_no;?>">
							</div>
							</div>

							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label> Ref No# </label>
								<input type="text" class="form-control" name="vat" value="<?=$ref_no;?>">
							</div>
							</div>
							
						</div>

						<div class="row">
							<div class="col-sm-6">
							<!-- text input -->
							<div class="form-group">
								<label><a href="../suppliers/view.php?id=<?=$invoice_supplier;?>">Supplier Name</a></label>
								<input type="text" class="form-control" name="name" value="<?=$SupplierName;?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>CR No#</label>
								<input type="text" class="form-control" name="cr" value="<?=$SupplierCR;?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>VAT No#</label>
								<input type="text" class="form-control" name="vat" value="<?=$SupplierVAT;?>">
							</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-6">
							<!-- textarea -->
							<div class="form-group">
								<label>Contact Address</label> 
								<textarea class="form-control" rows="3" name="conatct" > <?=$SupplierConatct;?></textarea>
							</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Record Information</label> 
									<input class="form-control"   placeholder="Created : <?=$create_date;?>" disabled></textarea>
									<input class="form-control"   placeholder="Last Modified : <?=$update_date;?>" disabled></textarea>
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
				<!-- general form elements disabled -->
				
				<!-- /.card -->
			</div>
			<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
		</section>
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
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
