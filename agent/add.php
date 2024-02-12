
		<?php   
				$folder_name =  basename(dirname(__FILE__));
				Require_once( "C:\\wow\\password\\config.php"); 
				Require_once("../include/auth.php"); 
				Require_once("../include/config.php");  
			$is_active =1;
			$name=$cr =$vat =$hname=$conatct =$create_date=$update_date=" ";
			$CardColor='secondary'; 
	   
			 	// DUBLICAT ITEM
				 	$query = "SELECT * FROM `suppliers` ;"; 
					$suppliers = $dbop->query($query)->fetchAll();   
					foreach ($suppliers as $supplier) {   
						$cr     			=$supplier['cr'];        
						$vat     			=$supplier['vat']; 
						if(  isset($_POST['cr']) &&
							isset($_POST['vat']) &&
							isset($_POST['name'])
							) {  
							if($_POST['cr']==$cr || $_POST['vat']==$vat)
							{
								echo "ERROR DUBLICAT ITEM";
								exit();
							}  
						}   
					}
				// DUBLICAT ITEM 

			$today = date("Y-m-d H:i:s");
			if(	isset($_POST['name']) &&
				isset($_POST['cr']) &&
				isset($_POST['vat'])  
			){
				$name=  	stripslashes(htmlentities( strip_tags($_POST['name'] )));
				$cr=  		stripslashes(htmlentities( strip_tags($_POST['cr'] )));
				$vat=  		stripslashes(htmlentities( strip_tags($_POST['vat'] )));
				$conatct=  stripslashes(htmlentities( strip_tags($_POST['conatct'] )));
	 
				$query=" INSERT INTO `suppliers` (`id`, `name`, `cr`, `vat`, `conatct`, `is_active`, `create_date`, `update_date`) 
						VALUES (NULL, '".$name."', '".$_POST['cr']."', '".$_POST['vat']."', '".$_POST['conatct']."', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP); 
				 ";  
					  $dbop->query($query); 
				 	  
			}  
			
			 
        ?>   
<!DOCTYPE html>
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
						<h3 class="card-title">General Information</h3> 
					</div>  
					<div class="card-body"> 
						<div class="row">
							<div class="col-sm-6">
							<!-- text input -->
							<div class="form-group">
								<label>Company Name</label>
								<input type="text" class="form-control" name="name" autocomplete="off" >
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>CR No#</label>
								<input type="text" class="form-control" name="cr"  autocomplete="off">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>VAT No#</label>
								<input type="text" class="form-control" name="vat"  autocomplete="off">
							</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-6">
							<!-- textarea -->
							<div class="form-group">
								<label>Contact Address</label>
								<textarea class="form-control" rows="3" name="conatct" > </textarea>
							</div>
							</div>
							<div class="col-sm-6">
							<div class="form-group">
								<label>Record Information</label> 
								<input class="form-control"   placeholder="Created : " disabled></textarea>
								<input class="form-control"   placeholder="Last Modified :  " disabled></textarea>
							</div>
							</div>
						</div> 
						<!-- input states --> 
						</form>
					</div>
					<div class="card-footer">
						<button type="submit" name="save" value="save" class="btn btn-info">save</button>
						<?php if($is_active){?><button type="submit" name="delete" value="delete" class="btn btn-danger float-right">Delete</button><?php }?>
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
