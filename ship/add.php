<!DOCTYPE html>
		<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
			$is_active =0; 
			$name=$cr =$vat =$conatct =$create_date=$update_date=$Error_MSG='';; 
					$today = date("Y-m-d H:i:s"); 
							// option Agents 
							$AgentOption='<option value=""></option>';
							$query = "SELECT `AgentID`,`AgentNameAr`,`AgentCR` FROM `agents`;"; 
						   $Agents = $dbop->query($query)->fetchAll();   
						   foreach ($Agents as $Agents) {    
				   $AgentOption.='
				   <option value="'.$Agents['AgentID'].'">'.$Agents['AgentNameAr'].' CR:'.$Agents['AgentCR'].'</option>';
						   }
					   // option Agents


			if(isset($_POST['add'])){
				if($debug){echo "<b>POST_IMO :</b>".$_POST['IMO']."<br>";}
				$IMO		=  	stripslashes(htmlentities( strip_tags($_POST['IMO'] )));
				$query1 = " SELECT `IMO`  FROM `ship` WHERE IMO='".$IMO."'; "; 
					if($debug){echo "<b>query :</b>".$query1."<br>";} 
				$IMOs = $dbop->query($query1)->fetchAll();   
				
				$DuplicateIMO=searchIMO($_POST['IMO'],$IMOs,'IMO'); 
				if($debug){print_r($IMOs);} 				
				if($debug){echo "<br><b>DuplicateIMO :</b>".$DuplicateIMO."<br>";} 		 	  
				 
				
				
				if(isset($_POST['VAT'])){$VAT	=	stripslashes(htmlentities( strip_tags($_POST['VAT'] ))); }else{$VAT=0;} 
				if($debug){echo "<b>VAT :</b>".$VAT."<br>";} 
				if($VAT=='on'){$VAT=1;}else{$VAT=0;}
				
						$IMO		=  	stripslashes(htmlentities( strip_tags($_POST['IMO'] )));
						$ShipName	= 	stripslashes(htmlentities( strip_tags($_POST['ShipName'] )));
						$AgentID	=  	stripslashes(htmlentities( strip_tags($_POST['AgentID'] )));
						$Notes		=  	stripslashes(htmlentities( strip_tags($_POST['Notes'] )));
						$Weight		=  	stripslashes(htmlentities( strip_tags($_POST['Weight'] )));
						$Weight		=  	floatval($Weight);

				if($DuplicateIMO){$Error_MSG='
				<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Error: </h5>
                  Duplicate IMO Number.
                </div>
				';}
				else{
					$query_INSERT="INSERT INTO `ship`  (`ShipName` ,`IMO` ,`Weight` ,`AgentID`,`VAT`,`Notes`)
							VALUES ('".$ShipName."','".$IMO."',".$Weight.",".$AgentID.", ".$VAT.",'".$Notes."')"; 
							if($debug){echo "<b>query_INSERT :</b>".$query_INSERT."<br>";}
							 
					$dbop->query($query_INSERT);  

					$alog_note = strval("ShipName:".$ShipName." + IMO:".$IMO."  +  Weight:".$Weight."  + VAT:".$VAT."    " );  
					$SQL_activitylog="INSERT INTO `activitylog` 
						( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
						VALUE ('".$folder_name."' ,'".$ShipName."' ,'Add Ship',	'".$username_now."' ,'".$alog_note."' 	) ;";
					$dbop->query($SQL_activitylog);   
					
					if($debug){echo "<b>IMO :</b>".$IMO."<br>";}  
					else{header("Refresh:0"); }
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
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- Theme style -->
    <!-- Select2 -->
	<link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/select2/css/select2.min.css">
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
				<input type="hidden" name="id" >
				<div class="card card-<?=$CardColor;?>">
					<div class="card-header">
						<h3 class="card-title">General Information</h3> 
						<?php echo $Error_MSG;?>
					</div>  
					<div class="card-body"> 
						<div class="row">
							<div class="col-sm-6">
								<!-- text input   -->
								<div class="form-group">
									<label>Ship Name</label>
									<input type="text" class="form-control" name="ShipName"  autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
								<div class="col-sm-12 col-md-4 col-lg-4 col-xl-6"> 
										<!-- %%%%%%%%%%%%%%%%%%%% Agents %%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
									<div class="form-group">
										<label>Agents</label> 
										<select name="AgentID" class="form-control select2">
											<?=$AgentOption;?>
										</select>
									</div>   
								</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<!-- text input -->
								<div class="form-group">
									<label>IMO#</label>
									<input type="text" class="form-control" name="IMO"  autocomplete="off">
								</div>
							</div>
							<div class="col-sm-3">
								<!-- text input -->
								<div class="form-group">
									<label>Weight</label>
									<input type="text" class="form-control" name="Weight"  autocomplete="off">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<div class="custom-control custom-switch"> 
										<input name="VAT" type="checkbox" checked class="custom-control-input" id="customSwitch1">
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
								<textarea class="form-control" rows="3" name="Notes" ></textarea>
							</div>
							</div> 
						</div> 
						<!-- input states --> 
						</form>
					</div>
					<div class="card-footer">
						<button type="submit" name="add" value="add" class="btn btn-info">Add New</button>
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

	<!-- Select2 -->
	<script src="<?php echo $path;?>adminlte/plugins/select2/js/select2.full.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo $path;?>adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path;?>adminlte/dist/js/adminlte.min.js"></script> 
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
