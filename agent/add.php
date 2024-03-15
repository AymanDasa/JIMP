<!DOCTYPE html>
		<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
			$is_active =0; 
			$name=$cr =$vat =$conatct =$create_date=$update_date=" "; 
					$today = date("Y-m-d H:i:s");  
					$Xcont = 1;
			if(isset($_POST['add'])){ 
						$AgentNameAr		=  	stripslashes(htmlentities( strip_tags($_POST['AgentNameAr'] )));
						$AgentNameEn		= 	stripslashes(htmlentities( strip_tags($_POST['AgentNameEn'] )));
						$AgentCR			=  	stripslashes(htmlentities( strip_tags($_POST['AgentCR'] )));
						$AgentEmail			=  	stripslashes(htmlentities( strip_tags($_POST['AgentEmail'] )));
						$AgentBilling		=  	stripslashes(htmlentities( strip_tags($_POST['AgentBilling'] )));
						$AgentEx2			=  	stripslashes(htmlentities( strip_tags($_POST['AgentEx2'] )));
						$AgentPhone			=  	stripslashes(htmlentities( strip_tags($_POST['AgentPhone'] )));
						$AgentContactName	=  	stripslashes(htmlentities( strip_tags($_POST['AgentContactName'] )));
						$AgentNotes			=  	stripslashes(htmlentities( strip_tags($_POST['AgentNotes'] )));  
			
						if( $AgentNameEn =='' ){echo "Error Agent Name En";exit();} 
						if( $AgentCR =='' ){echo "Error Agent CR ";exit();} 

						$sql = "SELECT  * FROM `agents`  WHERE `AgentNameEn` ='".$AgentNameEn."' LIMIT 1;";
						$result  =  $dbop->query($sql ) ;  
						$Xcont  =  $result->numRows() ;  
						if($Xcont > 0){echo "Error Agent Name En   ";exit();}  
						$sql = "SELECT  * FROM `agents`  WHERE `AgentCR` ='".$AgentCR."' LIMIT 1;";
						$result  =  $dbop->query($sql ) ;  
						$Xcont  =  $result->numRows() ;    
						if($Xcont >0){echo "Error Agent CR ";exit();}			
						
				$query_INSERT="INSERT INTO `agents`  
							(`AgentNameAr` ,`AgentNameEn` ,`AgentCR` ,`AgentEmail`,`AgentBilling`,`AgentEx2`,`AgentPhone`,`AgentContactName`,`AgentNotes`)
							VALUES ('".$AgentNameAr."', '".$AgentNameEn."','".$AgentCR."','".$AgentEmail."','".$AgentBilling."','".$AgentEx2."','".$AgentPhone."','".$AgentContactName."','".$AgentNotes."');"; 
							if($debug){echo "<b>query_INSERT :</b>".$query_INSERT."<br>";}
							 
					  $dbop->query($query_INSERT);  

											
						$alog_note = strval("AgentNameAr:".$AgentNameAr." + AgentCR:".$AgentCR."= AgentNameEn:".$AgentNameEn."    " );  
						$SQL_activitylog="INSERT INTO `activitylog` 
							( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
							VALUE ('".$folder_name."' ,'".$AgentNameAr."' ,'Add  Agent',	'".$username_now."' ,'".$alog_note."' 	) ;";
						$dbop->query($SQL_activitylog);   


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
