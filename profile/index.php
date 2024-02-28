<!DOCTYPE html>
		<?php   
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
			$is_active =0;
			$name=$cr =$vat =$conatct =$create_date=$update_date=" ";
			$id=1;   
			$AgentID=1; 
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
 
			if(0){
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


 $alog_note = strval("AgentID:".$AgentID." + AgentNameAr:".$AgentNameAr."  +  AgentCR:".$AgentCR."  + AgentNameEn:".$AgentNameEn."    " );  
$SQL_activitylog="INSERT INTO `activitylog` 
	( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
	VALUE ('".$folder_name."' ,'".$AgentID."' ,'Update Agent',	'".$username_now."' ,'".$alog_note."' 	) ;";
$dbop->query($SQL_activitylog);   
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/dist/css/adminlte.min.css">
  <link href="bootstrap5.3.3/css/bootstrap.min.css" rel="stylesheet">
</head>



<style type="text/css">
 
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
    </style>



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
			<h1>Profile</h1> 
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
	<div class="col-xl-4">

	<div class="card mb-4 mb-xl-0">
	<div class="card-header">Profile Picture</div>
	<div class="card-body text-center">

	<img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt>

	<div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

	<button class="btn btn-primary" type="button">Upload new image</button>
	</div>
	</div>
	</div>
	<div class="col-xl-8">

	<div class="card mb-4">
	<div class="card-header">Account Details</div>
	<div class="card-body">
	<form>

	<div class="mb-3">
	<label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
	<input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
	</div>

	<div class="row gx-3 mb-3">

	<div class="col-md-6">
	<label class="small mb-1" for="inputFirstName">First name</label>
	<input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
	</div>

	<div class="col-md-6">
	<label class="small mb-1" for="inputLastName">Last name</label>
	<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
	</div>
	</div>

	<div class="row gx-3 mb-3">

	<div class="col-md-6">
	<label class="small mb-1" for="inputOrgName">Organization name</label>
	<input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
	</div>

	<div class="col-md-6">
	<label class="small mb-1" for="inputLocation">Location</label>
	<input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
	</div>
	</div>

	<div class="mb-3">
	<label class="small mb-1" for="inputEmailAddress">Email address</label>
	<input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
	</div>

	<div class="row gx-3 mb-3">

	<div class="col-md-6">
	<label class="small mb-1" for="inputPhone">Phone number</label>
	<input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
	</div>

	<div class="col-md-6">
	<label class="small mb-1" for="inputBirthday">Birthday</label>
	<input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
	</div>
	</div>

	<button class="btn btn-primary" type="button">Save changes</button>
	</form>
	</div>
	</div>
	</div>
	</div>
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


<script src="../adminlte/plugins/jquery/jquery-1.10.2.min.js"></script>
<script src="bootstrap5.3.3/js/bootstrap.bundle.min.js"></script>

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
<script src="<?php echo $Homepath;?>include/js/menu.js"></script>
</body>
</html>
