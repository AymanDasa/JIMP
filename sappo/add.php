
		<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			$is_active =1;
			$name=$cr =$vat =$hname=$conatct =$create_date=$update_date="";
			$CardColor='secondary'; 
	   
			 	// DUBLICAT ITEM
				 	$query = "SELECT * FROM `sappo` ;"; 
					$sappos = $dbop->query($query)->fetchAll();   
					foreach ($sappos as $sappo) {   
						$no     			=$sappo['no'];        
						$name     			=$sappo['name']; 
						if(  isset($_POST['no']) &&
							isset($_POST['name']) 
							) {  
							if($_POST['no']==$no  )
							{
								echo "ERROR DUBLICAT ITEM";
								exit();
							}  
						}   
					}
				// DUBLICAT ITEM 

			$today = date("Y-m-d H:i:s");
			if(	isset($_POST['name']) &&
				isset($_POST['no'])  
			){
				 
				$name=  	stripslashes(htmlentities( strip_tags($_POST['name'] )));
				$no=  		stripslashes(htmlentities( strip_tags($_POST['no'] )));
				$note=  	stripslashes(htmlentities( strip_tags($_POST['note'] ))); 
				$note=  	intval($_POST['amount']); 
				
				$query=" INSERT INTO `sappo` (`id`, `name`, `no`, `note`,`amount`, `balance`, `sappoExpDate`	 , `is_active`, `create_date`, `update_date`) 
						VALUES (NULL, '".$name."', '".$_POST['no']."', '".$_POST['note']."','".$_POST['amount']."','".$_POST['amount']."','".$_POST['sappoExpDate']."', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP); 
				 ";  
					  $dbop->query($query); 
					  echo '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							 <i class="icon fas fa-check"></i>  <br> 
							 SAP. PO creation was completed successfully. 
							</div> '; 	
							header( "refresh:2;url=index.php" );
				 	  
			}  
			
			 
        ?>   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo strtoupper(basename(dirname(__FILE__)));?></title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/fontawesome-free6/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo $path;?>adminlte/plugins/dropzone/min/dropzone.min.css">
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
				<li class="breadcrumb-item active"><a href="index.php"><?php echo strtoupper(basename(dirname(__FILE__)));?></a></li>
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
				<div class="card card-<?=$CardColor;?>">
					<div class="card-header">
						<h3 class="card-title">General Information</h3> 
					</div>  
					<div class="card-body"> 
						<div class="row">
							<div class="col-sm-3">
								<!-- text input -->
								<div class="form-group">
									<label>SAP P.O.</label>
									<input type="text" class="form-control" name="no" autocomplete="off" >
								</div>
							</div>
							<div class="col-sm-3">  
								<div class="form-group">
									<label>Expire Date:</label>
									<div class="input-group date" id="sappoExpDate" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" name="sappoExpDate" data-target="#sappoExpDate"/>
										<div class="input-group-append" data-target="#sappoExpDate" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3"> 
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name"  autocomplete="off">
								</div>
							</div>  
							<div class="col-sm-3"> 
								<div class="form-group">
									<label>Amount</label>
									<input type="text" class="form-control" name="amount"  autocomplete="off">
								</div>
							</div> 
						</div>
						<div class="row">
							<div class="col-sm-6">
								<!-- textarea -->
								<div class="form-group">
									<label>Note</label>
									<textarea class="form-control" rows="3" name="note" > </textarea>
								</div>
							</div> 
						</div> 
						<!-- input states --> 
						</form>
					</div>
					<div class="card-footer">
						<button type="submit" name="save" value="save" class="btn btn-info">save</button>
						 
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
	<!-- Bootstrap4 Duallistbox -->
	<script src="<?php echo $path;?>adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo $path;?>adminlte/plugins/moment/moment.min.js"></script>
	<script src="<?php echo $path;?>adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo $path;?>adminlte/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap color picker -->
	<script src="<?php echo $path;?>adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo $path;?>adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Bootstrap Switch -->
	<script src="<?php echo $path;?>adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- BS-Stepper -->
	<script src="<?php echo $path;?>adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
	<!-- dropzonejs -->
	<script src="<?php echo $path;?>adminlte/plugins/dropzone/min/dropzone.min.js"></script>
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


<script>
  
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask YYYY-MM-DD
    $('#datemask').inputmask('YYYY-MM-DD', { 'placeholder': 'YYYY-MM-DD' })
    //Datemask2 YYYY-MM-DD
    $('#datemask2').inputmask('YYYY-MM-DD', { 'placeholder': 'YYYY-MM-DD' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'YYYY-MM-DD' 
    });

    //Date picker Date From todate
    $('#sappoExpDate').datetimepicker({
    format: 'YYYY-MM-DD'
    }); 

    //Date and time picker 
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'yyyy-mm-dd hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('yyyy-mm-dd') + ' - ' + end.format('yyyy-mm-dd'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
 
<script src="../include/js/menu.js"></script>
</body>
</html>
