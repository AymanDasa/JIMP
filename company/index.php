<!DOCTYPE html>
<?php    
			$dbname = 'data';
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");  
			$today = date("Y-m-d H:i:s"); 
			$Error_MSG='';   
			 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST['Update'])){
		// Loop through POST data to update each field in the database
		foreach ($_POST as $field_name => $new_value) {
			// Sanitize input to prevent SQL injection  
		   	$field_name = stripslashes ( strip_tags(($field_name)));
			$new_value = stripslashes ( strip_tags(($new_value)));

			// Update the database with the new value
			$sql = "UPDATE `info` SET `value`='$new_value' WHERE  `name`='$field_name';";
			
			if($debug){echo "<b>sql : </b>".$sql."<br>";}
			$dbop->query($sql); 
		
			$Error_MSG= '<script>
							$(document).ready(function() { toastr.success("Updated"); });
						</script>'; } 
			}
	if(isset($_POST['add'])){ 
			$new_name = stripslashes 	(($_POST['name']));
			$new_value = stripslashes 	(($_POST['value']));
			$sql ="INSERT INTO `info` ( `name`, `value` ) VALUES ( '".$new_name."', '".$new_value."' );";
			if($debug){echo "<b>INSERT : </b>".$sql."<br>";}
			$dbop->query($sql);  
			$Error_MSG= '<script>
							$(document).ready(function() { toastr.success("Add New"); });
						</script>'; 
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
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/toastr/toastr.min.css"> 
  <link rel="stylesheet" href="../include/css/jimp.css">
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
				<div class="card">
				<div class="card-body">
		<?php 		
$line_count=0; 
$Selected1=$Selected0='';	
$sql = "SELECT * FROM `info` WHERE `active` = 1;  ";  
$result = $dbop->query($sql)->fetchAll();

    // Output data of each row within a form
    echo '<form action="#" method="post" class="form-horizontal">';
    foreach ($result as $row) {
		$id_delete= $row["id"] ;
        // Create label for the field
        $label = ucfirst(str_replace('_', ' ', $row["name"]));
	   
			$type =$row['type']; 
			if($type =='yesno'){$yesno=1; $value =intval($row['value']); }else{$yesno=0;$value =$row['value'];}
			 
			if($debug){echo "<div  style='color:red;'><b> ". $label ."</b> / ".$value." / ".$type ."</div><br>";}
		 
        // Output the label and editable input field 
	   echo "	<div class=form-group'>
					<div class='row'>
					<div class='col-2 col-form-label'> 
						<label >{$label}:</label>
					</div>
					<div class='col-8'>  ";
	   if($yesno){

		if( $value ) {$Selected1='selected';}else{$Selected0='selected';}
		echo " 
			
			<select  name='{$row["name"]}' class='custom-select form-control-border' >
				<option value='1' ".$Selected1.">YES</option>
				<option value='0' ".$Selected0.">NO</option> 
			</select>
				";

	   }else{
        echo "	 
						<input type='text' class='form-control' name='{$row["name"]}' value='{$row["value"]}'>
					  ";
	   }
		echo "		
				</div>
				</div>
			</div>  ";
	   $line_count++;
	   if ($line_count % 10 == 0) {
		echo "<hr>"; } 
	}?> 
<button type="submit" name="Update" value="Update" class="btn btn-app"><i class="fas fa-plus"></i> Update</button> 
</form> 
	 

					<!-- /.card -->
				<!-- general form elements disabled -->
				
				<!-- /.card -->
			</div>
			
			</div>
			</div>
				
			<!--/.col (right) -->
			</div>
		
			<!-- /.row -->
		</div><!-- /.container-fluid -->
		
		<div class="modal fade" id="modal-lg">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New info</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="#" method="POST">
						<div class="modal-body">
							<div class="col-md-12">  
								  
								<div class="row">
									<div class="col-sm-6">
										<!-- text input   -->
										<div class="form-group">
											<label>Info Name</label>
											<input type="text" class="form-control is-invalid" name="name"  autocomplete="off">
										</div>
									</div> 
									<div class="col-sm-6">
										<!-- text input -->
										<div class="form-group">
											<label>Info Value</label>
											<input type="text" class="form-control" name="value"  autocomplete="off">
										</div>
									</div> 
								</div> 
							</div> 
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-default" name="add" data-dismiss="modal">Close</button>
							<button type="submit" name="add" value="add"  class="btn btn-primary">Save changes</button>
						</div>  
					</form> 
				</div>
				<!-- /.modal-content -->
			</div>
		<!-- /.modal-dialog -->
		</div>
	
	
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
<script src="<?php echo $Homepath;?>adminlte/plugins/toastr/toastr.min.js"></script> 

   
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
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<?php echo $Error_MSG;?>
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
