<!DOCTYPE html>
<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			  
	    
			$query = "SELECT `value` FROM `config`  WHERE  `name`='SSCount' LIMIT 1;"; 
			$SSCountQuerys = $dbop->query($query)->fetchAll();   
			foreach ($SSCountQuerys as $SSCountQuery) {    
				$SSCount = intval($SSCountQuery['value']) ;
			} 
			$today = date("Y-m-d H:i:s"); 
      $InvoiceID=1;
	 $ERROR=0;
if(isset($_POST['credit_notes'])) {
#########################################################################
#########################################################################
#######################  Functions & Class  #############################
#########################################################################
#########################################################################
    
/*

 
					$InvoiceID  
					$ShipID
					$credit_amount 
					$issue_date 
					$reason 
					$ShipWeight
					name="CN"  


*/
	$reason=stripslashes(htmlentities(strip_tags($_POST['reason'])));
	if(isset($_POST['InvoiceID'])){$InvoiceID = intval($_POST['InvoiceID']);}
	if(isset($_GET['InvoiceID'])) {$InvoiceID = intval($_GET['InvoiceID']);}
	$query = "SELECT *  FROM `invoice` WHERE `InvoiceID`=".$InvoiceID." LIMIT 1;"; 
if($debug){echo "<b>G query:</b>".$query."<br>";}  	
if($debug){echo "<b>G InvoiceID:</b>".$InvoiceID."<br>";}  	
		$InvoiceID = intval($_POST['InvoiceID']); 
		$invoicevs = $dbop->query($query)->fetchAll();   
		foreach ($invoicevs as $invoicev) {   
			$ShipID=$invoicev['ShipID'];
			$ShipName=$invoicev['ShipName'];  
			$AgentID=$invoicev['AgentID'];  
			$AgentNameEn=$invoicev['AgentNameEn']; 
			$issue_date=$invoicev['InvoiceDate'];
			$InvoiceDate=$invoicev['InvoiceDate'];
			$issue_dateT=$invoicev['InvoiceDateT']; 
			$TOTAL=$invoicev['TOTAL'];
			$is_VAT=$invoicev['is_VAT'];
			$VAT=$invoicev['VAT'];
			$credit_amount=$invoicev['VAT_TOTAL']; 
			$VAT_TOTAL=$invoicev['VAT_TOTAL']; 
			$Status=$invoicev['Status'];   
		} 
	$query = "SELECT *  FROM `ship` WHERE `ShipID`=".$ShipID." LIMIT 1;";  
	$ships = $dbop->query($query)->fetchAll();   
if($debug){echo "<b>  query:</b>".$query."<br>";}  	
if($debug){echo "<b>  ShipID:</b>".$ShipID."<br>";}
	foreach ($ships as $ship) {  
		$ShipName                   =$ship['ShipName'];
		$ShipWeight                 =intval($ship['Weight']); 
		$ShipVAT		            =intval($ship['VAT']); 
		if ($ShipVAT==1){$SAVAT=(15/100); }else{$SAVAT=0;} 
	}
#########################################################################
#########################################################################
###########################  SQL INSERT #################################
#########################################################################
#########################################################################
	$SQL1= "SELECT `InvoiceID` FROM `credit` WHERE  `InvoiceID` ='".$InvoiceID."' LIMIT 1;";
	$inv = $dbop->query($SQL1)->fetchAll();
		foreach ($inv as $row) {
			$XID=intval($row['InvoiceID']);
			$ERROR=1;
		}
		if(isset($XID)){
			echo "ERROR"; 
		}else{
			
			$SQL_INSERT="INSERT INTO `credit` 
				( 
				`InvoiceID`, 
				`AgentID`, 
				`ShipID`, 
				`TOTAL`,  
				`VAT`,  
				`credit_amount`,  
				`issue_date`,
				`reason` 
				) 
				VALUES (
				
				'$InvoiceID',
				'$AgentID', 
				'$ShipID',
				'$TOTAL',
				'$VAT',
				'$credit_amount',
				'$issue_date',
				'$reason' 
				)"; 
			$dbop->query($SQL_INSERT); 
			$alog_note = strval("credit_notes".$InvoiceID."AgentID:".$AgentID." + ShipID:".$ShipID."= TOTAL:".$TOTAL."  (VAT)= ".$VAT." credit_amount ".$credit_amount." " );    
			$SQL_activitylog="INSERT INTO `activitylog` ( `alog_section`  ,	`alog_no`  ,	`alog_description`  ,	`alog_user` ,	`alog_note` 	) 
				VALUE ('".$folder_name."' ,'".$InvoiceID."' ,'Credit Notes',	'".$username_now."' ,'".$alog_note."' 	) ;";
			$dbop->query($SQL_activitylog); 
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
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/plugins/dropzone/min/dropzone.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $Homepath;?>adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<style>
    .tab {
        display: inline-block;
        margin-left: 10px;
    }
</style>
<div class="wrapper">
  <!-- Navbar -->
  <?php include("../include/nav.php")?>
  <?php include("../include/aside.php")?>
  <?php include("../include/post.php")?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content --> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   
        <div class="container-fluid">
          <div class="row">
            <div class="col-12"> 
              <div class="card">
                <div class="card-header">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1>CN-<?php echo $InvoiceID;?></h1>
                      </div>
                      <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active"> Credit Notes</li>
                      </ol>
                      </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-sm-6"> 
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <a href="../invoice/add.php">
                          <button type="button" class="btn btn-success" >
                            Add new invoice
                          </button> 
                        </a> 
                      </ol>
                    </div>
                  </div> 
                </div> 
              </div> 
            </div>    
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12"> 
                
			 	<?php if($ERROR){

?>

		<div class="card card-danger">
              <div class="card-header">
		    <h1 class="card-title" style="font-size: x-large;">ERROR</h1> 
              </div>
              <div class="card-body">
         		A credit note has already been generated for this invoice. Creating another credit note for the same invoice is not permitted  
              </div>
              <!-- /.card-body -->
            </div>



		 

		    <?php }else{ ?>
	 
                <div class="col-sm-2">   
			   	  
			   	<a class="btn btn-app bg-danger"  href="../reports/pre_invoice.php?id=<?php echo $InvoiceID;?>">
                  		<i class="fas fa-file-pdf"></i>  
                	</a>  
                </div>

              </div> 
            </div> 
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row --> 
              <!-- info row -->
              <div class="row invoice-info"> 
                <div class="col-sm-4 invoice-col">
                    <b>Credit Note # CN-<?php echo $InvoiceID;?></b><br>  
                    <b>Invoice Date:<span class="tab"></span></b>  <?php echo $InvoiceDate;?> <br>  
                    <b>Vessel Name:<span class="tab"></span></b>  <?php echo $ShipName;?> <br>      
				<b>G.R.T.:<span class="tab"></span></b>       <?php echo $ShipWeight;?> <br> 
                </div>
                <!-- /.col --> 
                <!-- /.col --> 
                <!-- /.col -->
              </div>
              <!-- /.row -->
           

              <div class="row">
                <!-- accepted payments column -->
                
                
                <div class="col-6">
                <hr style="border-top: 2px solid black;">
                  
                <p class="lead">Invoice Summary</p>
                  <div class="table-responsive">
                    <table class="table"> 
                      <tr>
                        <th style="width:50%">Sub Total:</th>
                        <td style="text-align: right;"><?php echo number_format($TOTAL, 2);?></td>
                      </tr>
                      <tr>
                        <th>VAT (15%)</th>
                        <td style="text-align: right;"><?php echo number_format($VAT, 2);?></td>
                      </tr> 
                      <tr>
                        <th>Grand Total:</th>
                        <td style="text-align: right;"><b><?php echo number_format($VAT_TOTAL, 2);?><b></td>
                      </tr>
                    </table>
                  </div>
                  
                </div> 

                <!-- /.col -->
              </div>
              <!-- /.row -->
		    <?php }  ?>
         
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- /.content-wrapper -->
  	<?php include('../include/footer.php');?>

	<aside class="control-sidebar control-sidebar-dark"> </aside>
</div>
<!-- ./wrapper --> 
	<script src="<?php echo $Homepath;?>adminlte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/select2/js/select2.full.min.js"></script>
	<!-- Bootstrap4 Duallistbox -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/moment/moment.min.js"></script>
	<script src="<?php echo $Homepath;?>adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap color picker -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Bootstrap Switch -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- BS-Stepper -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
	<!-- dropzonejs -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/dropzone/min/dropzone.min.js"></script>   
	<!-- AdminLTE App -->
	<script src="<?php echo $Homepath;?>adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
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
    })

   
    //Date picker Date From todate
    $('#ClickInvoiceDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    });
    $('#ClickArrivalDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    }); 
    $('#ClickDepartureDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    });
    $('#ClickAnchorEntryDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
    });
    $('#ClickAnchorLeaveDate').datetimepicker({
    format: 'YYYY-MM-DD HH:mm'
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
 


<script>
$(document).ready(function() {
  var i = 1;
  $('#dodaj-pozyc').click(function() { 
    $('#listap').append(
	'<!-- %%%%%%%%%%%%%%%%%%%% row List   %%%%%%%%%%%%%%%%%%%%%%%%  -->'+
	'<div class="row" id="lista-p-' + i + '">'+ 
		'<div class="col-1" >'+
			'<label>  &nbsp; </label>'+
				'<p>'+
      					'<button type="button"  name="remove' + i + '" id="' + i + '" class="col-0 col-form-label text-sm-center btn btn-outline-danger btn-sm btn_remove font-weight-bold">X</button>' +
				'</p>'+
		'</div> '+
		'<div class="col-3" >' +
			'<div class="form-group">'+
				'<label>Invoice#</label>'+
				'<input type="text" class="form-control" name="invoice'+ i + '"  autocomplete="off">'+ 
			'</div> '+
		'</div>'+ 
		'<div class="col-4">  '+
			'<div class="form-group">'+
				'<label>Invoice Date</label>'+
				'<input type="text" class="form-control" name="invoicedate'+ i + '"  autocomplete="off">'+ 
			'</div> '+
		'</div>'+ 
		'<div class="col-4"> '+
			'<div class="form-group">'+
				'<label>Amount</label>'+
				'<input type="text" class="form-control" name="amount'+ i + '"  > '+
			'</div> '+
		'</div> '+
	'</div> '
		 );
	 
if(i<15){i++;
	const box = document.getElementById('dodaj-pozyc'); 		
	box.style.display = 'block';
}else{ 
	const box = document.getElementById('dodaj-pozyc'); 		
	box.style.display = 'none';
}

    
  });
  $(document).on('click', '.btn_remove', function() {
    var id = $(this).attr("id");
    $('input[name="remove"]' + id).remove();
    $('#atrybut-ile-' + id + '').remove();
    $('#atrybut-nazwa-' + id+  '').remove();
    $('#lista-p-' + id).empty();
    $('#lista-p-' + id).html(""); 
  });
});

function approved() { 
  var txt;
  if (confirm("Approve invoice # <?php echo $InvoiceID;?>")) {
    <?php 
      $Status=800;
      $SQL_APPROVED="UPDATE `invoice` SET 
          `Status`                   ='$Status',  
          WHERE  `InvoiceID`         ='$InvoiceID'; " ;
          $dbop->query($SQL_APPROVED); 
      ?>

  } else {
     <?php header('Location: index.php');?>
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
 
      
<script src="<?php echo $Homepath;?>include/js/menu.js"></script>
 
</body>
</html>
