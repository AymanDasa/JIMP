<!DOCTYPE html>
		<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
			$is_active =0; 
			$name=$cr =$vat =$conatct =$create_date=$update_date=" ";
			$ShipID=intval($_GET['id']);
			if($debug){echo "<b>ShipID :</b>".$ShipID."<br>";} 
				// SELECT  AGENT
				$ships_sql = "SELECT * FROM `ship` WHERE `ShipID` = ".$ShipID." LIMIT 1 ;"; 
				if($debug){echo "<b>ships_sql :</b>".$ships_sql."<br>";} 
                $ships = $dbop->query($ships_sql)->fetchAll();   
                foreach ($ships as $ship) {  
                    $ShipID   			=$ship['ShipID'];
                    $IMO     			=$ship['IMO'];
                    $ShipName     		=$ship['ShipName'];        
                    $Weight     		=$ship['Weight'];           
                    $VAT				=$ship['VAT'];        
                    $Notes     			=$ship['Notes'];      }
					$del_tag=''; 	  
					$today = date("Y-m-d H:i:s"); 
			if(isset($_POST['Update'])){
				$query1 = " SELECT `IMO`  FROM `ship` WHERE NOT IMO='".$IMO."'; "; 
				if($debug){echo "<b>query :</b>".$query1."<br>";} 
				$IMOs = $dbop->query($query1)->fetchAll();   
				$DuplicateIMO=searchForArray($_POST['IMO'],$IMOs,'IMO'); 
				if(isset($_POST['VAT'])){
					$VAT	=	stripslashes(htmlentities( strip_tags($_POST['VAT'] )));}
					else{$VAT=0;}     
				if($DuplicateIMO){echo "ERROR IMO : ".$IMO; exit();} 
						$IMO		=  	stripslashes(htmlentities( strip_tags($_POST['IMO'] )));
						$ShipName	= 	stripslashes(htmlentities( strip_tags($_POST['ShipName'] )));
						$Notes		=  	stripslashes(htmlentities( strip_tags($_POST['Notes'] )));
						$Weight		=  	stripslashes(htmlentities( strip_tags($_POST['Weight'] )));
						$Weight		=  	floatval($Weight);
						if($debug){echo "<b>VAT :</b>".$VAT."<br>";} 
				if($VAT=='on'){$VAT=1;}else{$VAT=0;}
				$query_UPDATE="UPDATE `ship` SET 
							`IMO` = '".$IMO."', 
							`ShipName` = '".$ShipName."', 
							`Weight` = '".$Weight."',  
							`VAT` = '$VAT', 
							`Notes` ='$Notes', 
							`Weight` = '".$Weight."' 
							WHERE  `ShipID` = ".$ShipID."; "; 
							if($debug){echo "<b>query_UPDATE :</b>".$query_UPDATE."<br>";}
							 
					  $dbop->query($query_UPDATE);  
					  if($debug){echo "<b>IMO :</b>".$IMO."<br>";}
					  else{header('Location: index.php'); }

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
			<h1>  Ships </h1> 
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
				<input type="hidden" name="id"  value="<?=$ShipID;?>">
				<div class="card card-<?=$CardColor;?>">
					<div class="card-header">
						<h3 class="card-title">General Information</h3> 
					</div>  
					<div class="card-body"> 
						<div class="row">
							<div class="col-sm-6">
								<!-- text input   -->
								<div class="form-group">
									<label>Ship Name</label>
									<input type="text" class="form-control" name="ShipName" value="<?=$ShipName;?>">
								</div>
							</div>
						</div> 
						<div class="row">
							<div class="col-sm-3">
								<!-- text input -->
								<div class="form-group">
									<label>IMO#</label>
									<input type="text" class="form-control" name="IMO" value="<?=$IMO;?>">
								</div>
							</div>
							<div class="col-sm-3">
								<!-- text input -->
								<div class="form-group">
									<label>Weight</label>
									<input type="text" class="form-control" name="Weight" value="<?=$Weight;?>">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<div class="custom-control custom-switch">
										<?php if($VAT){$isVAT="checked";}else{$isVAT="";}?>
										<input name="VAT" type="checkbox" <?php echo $isVAT;?> class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1">VAT 15%</label>
									</div>
								</div>
							</div>
						</div> 
						<div class="row">
							<div class="col-sm-6">
							<!-- textarea -->
							<div class="form-group">
								<label>Notes</label>
								<textarea class="form-control" rows="3" name="Notes" ><?=$Notes;?></textarea>
							</div>
							</div> 
						</div> 
						<!-- input states --> 
						</form>
					</div>
					<div class="card-footer">
						<button type="submit" name="Update" value="Update" class="btn btn-info">Update</button>
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
<!-- bs-custom-file-input -->
<script src="<?php echo $Homepath;?>adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $Homepath;?>adminlte/dist/js/adminlte.min.js"></script> 
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
