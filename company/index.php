<!DOCTYPE html>
<?php   
			$dbname = 'data';
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			 
		  
		if(true) { 
				// SELECT  AGENT
				$query = "SELECT * FROM `config` ;"; 
                	$configs = $dbop->query($query)->fetchAll();   
				$datas = array(); 
				foreach ($configs as $config) {   
					$name    			=$config['name']; 
					$value     			=$config['value'];  
						array_push($datas,$name , $value );
					} 
					 
			}  
			$today = date("Y-m-d H:i:s");   

				if(isset($_POST['UpdateCompnayProfile'])) {
					$company_name		= $_POST['company_name'];
					$company_bldg		= $_POST['company_bldg'];
					$company_pobox		= $_POST['company_pobox'];
					$company_tel		= $_POST['company_tel'];
					$company_cr		= $_POST['company_cr'];
					$company_vat		= $_POST['company_vat'];
					$company_name_ar	= $_POST['company_name_ar'];
					$company_bldg_ar	= $_POST['company_bldg_ar'];
					$company_pobox_ar	= $_POST['company_pobox_ar'];
					$company_tel_ar		= $_POST['company_tel_ar'];
					$cc1				= $_POST['cc1'];
					$cc2				= $_POST['cc2'];
					$vat				= $_POST['vat'];
					$company_logo		= $_POST['company_logo'];
					$company_contract	= $_POST['company_contract'];
					$CompanyVendor		= $_POST['company_vendor'];
				 
					// Use prepared statements to prevent SQL injection
					$valuesToUpdate = [
						'company_name',
						'company_bldg',
						'company_pobox',
						'company_tel',
						'company_cr',
						'company_vat',
						'company_name_ar',
						'company_bldg_ar',
						'company_pobox_ar',
						'company_tel_ar',
						'cc1',
						'cc2',
						'vat',
						'company_logo',
						'company_contract',
						'CompanyVendor',  // Adjust the case based on your actual value
					 ];
					 foreach ($valuesToUpdate as $value) {
						$query = "UPDATE `config` SET `value` = ? WHERE `name` = ?";
						$statement = $dbop->prepare($query);
						$result = $statement->execute([$$value, $value]);
						
						// Check for success or handle errors
						if (!$result) {
						    echo "Update failed for $value";
						    break;  // Stop the loop on the first failure, you may adjust this based on your needs
						}
					 } 
					header("refresh:0");
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
  <!-- Font Awesome -->
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
			<h1>  <?=$datas[1];?></h1> 
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
				<form action="index.php" method="POST">  
					<div class="card-header">
						<h3 class="card-title">General Information</h3> 
					</div>   
					<div class="card-body"> 
						<div class="row">
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label> <?=$datas[0];?></label>
								<input type="text" class="form-control" name="company_name" value="<?=$datas[1];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label><?=$datas[2];?></label>
								<input type="text" class="form-control" name="company_bldg" value="<?=$datas[3];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>company_pobox</label>
									<input type="text" class="form-control" name="company_pobox" value="<?=$datas[5];?>">
								</div>
							</div> 
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>company_tel</label>
									<input type="text" class="form-control" name="company_tel" value="<?=$datas[7];?>">
								</div>
							</div> 
						</div>
						<div class="row">
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label> company_cr</label>
								<input type="text" class="form-control" name="company_cr" value="<?=$datas[9];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>company_vat</label>
								<input type="text" class="form-control" name="company_vat" value="<?=$datas[11];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>company_name_ar</label>
									<input type="text" class="form-control" name="company_name_ar" value="<?=$datas[13];?>">
								</div>
							</div> 
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>company_bldg_ar</label>
									<input type="text" class="form-control" name="company_bldg_ar" value="<?=$datas[15];?>">
								</div>
							</div> 
						</div>
						<div class="row">
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label> company_pobox_ar</label>
								<input type="text" class="form-control" name="company_pobox_ar" value="<?=$datas[17];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>company_tel_ar</label>
								<input type="text" class="form-control" name="company_tel_ar" value="<?=$datas[19];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>cc1</label>
									<input type="text" class="form-control" name="cc1" value="<?=$datas[21];?>">
								</div>
							</div> 
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>cc2</label>
									<input type="text" class="form-control" name="cc2" value="<?=$datas[23];?>">
								</div>
							</div> 
						</div>
						<div class="row">
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>vat</label>
								<input type="text" class="form-control" name="vat" value="<?=$datas[25];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>company_logo</label>
								<input type="text" class="form-control" name="company_logo" value="<?=$datas[27];?>">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>company_contract</label>
									<input type="text" class="form-control" name="company_contract" value="<?=$datas[29];?>">
								</div>
							</div> 
							<div class="col-sm-3">
							<!-- text input -->
								<div class="form-group">
									<label>company_vendor</label>
									<input type="text" class="form-control" name="company_vendor" value="<?=$datas[31];?>">
								</div>
							</div> 
						</div> 
						<div class="row">
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>Ref</label>
								<input type="text" class="form-control" name="vat" value="<?php echo $datas[31];?>">
							</div> 
						</div> 
						<!-- input states --> 
					 
					</div>
					<div class="card-footer">
						<button type="submit" name="UpdateCompnayProfile"  class="btn btn-info">save</button>
					</div>  
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
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
