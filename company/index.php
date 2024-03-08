<!DOCTYPE html>
<?php    
			$dbname = 'data';
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			 
		  
		if(true) { 
				// SELECT  AGENT
				$query = "SELECT * FROM `info` WHERE `type` = 'text';";  
				$result = $dbop->query($query)->fetchAll();    
				$dataArray = array();
				foreach ($result as $row) {
				$dataArray[] = $row;
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
					$company_tel_ar	= $_POST['company_tel_ar'];
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
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
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
							
							<!-- text input -->
							<?php 
							foreach ($dataArray as $data) {
								echo '<div class="col-sm-3"><div class="form-group"> 
									   <label></label> 
									   <input type="text" class="form-control" name="'.$data['name'].'" value="'.$data['name'].'">
									   <input type="text" class="form-control" name="'.$data['value'].'" value="'.$data['value'].'">
									 </div></div> ';}
							?>
							
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
<script src="<?php echo $Homepath;?>adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo $Homepath;?>adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $Homepath;?>adminlte/dist/js/adminlte.min.js"></script> 
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
