<!DOCTYPE html>
	<?php    
		$folder_name =  basename(dirname(__FILE__));
		Require_once( "C:\\wow\\password\\config.php"); 
		Require_once("../include/auth.php"); 
		Require_once("../include/config.php");
		$is_active =0; 
		$name=$cr =$vat =$conatct =$create_date=$update_date=" "; 
				$today = date("Y-m-d H:i:s");  
				
		if(isset($_POST['add'])){
			
			
					$code			=  	stripslashes(strip_tags(htmlspecialchars($_POST['code'] 		, ENT_QUOTES )));
					$Description	= 	stripslashes(strip_tags(htmlspecialchars($_POST['Description'] 	, ENT_QUOTES )));
					$ServiceType	=  	stripslashes(strip_tags(htmlspecialchars($_POST['ServiceType'] 	, ENT_QUOTES )));
					$Unit			=  	stripslashes(strip_tags(htmlspecialchars($_POST['Unit'] 		, ENT_QUOTES )));
					$WeightFactor	=  	stripslashes(strip_tags(htmlspecialchars($_POST['WeightFactor']	, ENT_QUOTES )));
					$DoubleFactor	=  	stripslashes(strip_tags(htmlspecialchars($_POST['DoubleFactor']	, ENT_QUOTES )));
					$ProfitPercent	=  	stripslashes(strip_tags(htmlspecialchars($_POST['ProfitPercent'], ENT_QUOTES )));
					$Cost			=  	stripslashes(strip_tags(htmlspecialchars($_POST['Cost'] 		, ENT_QUOTES )));
					$MinCost		=  	stripslashes(strip_tags(htmlspecialchars($_POST['MinCost'] 		, ENT_QUOTES )));  
					$Notes			=  	stripslashes(strip_tags(htmlspecialchars($_POST['Notes'] 		, ENT_QUOTES )));  
		
			$query_INSERT="INSERT INTO `services`  
						(`code` ,`Description` ,`ServiceType` ,`Unit`,`WeightFactor`,`DoubleFactor`,`ProfitPercent`,`Cost`,`MinCost`,`Notes`)
						VALUES ('".$code."', '".$Description."','".$ServiceType."','".$Unit."','".$WeightFactor."','".$DoubleFactor."','".$ProfitPercent."','".$Cost."','".$MinCost."','".$Notes."');"; 
						if($debug){echo "<b>query_INSERT :</b>".$query_INSERT."<br>";}
							
					$dbop->query($query_INSERT);  
					if($debug){echo "<b>IMO :</b>".$AgentCR."<br>";}  else{header("Refresh:20"); }
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
  <!-- Theme style -->
    <!-- Select2 -->
	<link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/select2/css/select2.min.css">
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
			<h1>New Service</h1> 
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
						<h3 class="card-title">Service Information</h3> 
					</div>  
					<div class="card-body"> 
						<div class="row">
							<div class="col-sm-1">
							<!-- text input  -->
								<div class="form-group">
									<label>Service Code</label>
									<input type="text" class="form-control" name="AgentNameAr"  autocomplete="off"> 
								</div>
							</div>
							<div class="col-sm-5">
							<!-- text input  -->
								<div class="form-group">
									<label>Service Name</label>
									<input type="text" class="form-control" name="AgentNameAr"  autocomplete="off"> 
								</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success" style="text-align: center;">
									<input type="checkbox" class="custom-control-input" id="customSwitchServiceType"  name="ServiceType">
									<label class="custom-control-label" for="customSwitchServiceType">Service Type  </label>
								</div>
							</div>


							<div class="form-group">
							
							<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success" style="text-align: center;">
									<input type="checkbox" class="custom-control-input" id="customSwitchWeightFactor"  name="WeightFactor">
									<label class="custom-control-label" for="customSwitchWeightFactor">Weight Factor  </label>
								</div>
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
						<div class="col-sm-1">
							<!-- text input  -->
								<div class="form-group">
									<label>Service Code</label>
									<input type="text" class="form-control" name="AgentNameAr"  autocomplete="off"> 
								</div>
							</div>
							<div class="col-sm-5">
							<!-- text input  -->
								<div class="form-group">
									<label>Service Name</label>
									<input type="text" class="form-control" name="AgentNameAr"  autocomplete="off"> 
								</div>
							</div>
							
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
						</form>
					</div>
					<div class="card-footer">
						<button type="submit" name="add" value="add" class="btn btn-info">Save</button>
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
<script src="<?php echo $Homepath;?>adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Select2 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/select2/js/select2.full.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo $Homepath;?>adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $Homepath;?>adminlte/dist/js/adminlte.min.js"></script> 
<script>
$(function () {
  bsCustomFileInput.init();
});
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })});
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
