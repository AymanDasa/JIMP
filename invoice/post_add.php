		<?php    
			$debug =0;
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
 ?>  
<!DOCTYPE html>
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
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Invoice JD-1000000001</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Invoice</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                    <small class="float-right">Date: 2/22/2024</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #JD-1000000001</b><br>
                    <br>
                    <b>Vessel Name:<span class="tab"></span></b>  HANSA EUROPE <br>
                    <b>Invoice Date:<span class="tab"></span></b> 2/22/2024<br>
                    <b>Agent Name:<span class="tab"></span></b> HAPAG LLOYD SAUDI LIMITED <br>
                    <b>Vessel Name:<span class="tab"></span></b>  HANSA EUROPE <br>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>G.R.T.:<span class="tab"></span></b> 38388 <br>
                    <b>Trip No:<span class="tab"></span></b> 01 <br>
                    <b>Route No:</b> 07 <br>
                    <b>Trip No:</b> 01 <br> 
                    <b>Docking dock</b> 57/85 <br>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col"> 
                    <b>Araival Date:<span class="tab"></span></b>2024-01-30 10:04:00<br>
                    <b>Departure Date:<span class="tab"></span></b> 2024-01-30 10:04:00<br>
                    <b>Vessel Period Stay:<span class="tab"></span></b> 5 <br>
                    <span class="tab"></span><br>
                    <b>Anchor in Date:<span class="tab"></span></b>2024-01-30 10:04:00<br>
                    <b>Anchor out Date:<span class="tab"></span></b> 2024-01-30 10:04:00<br>
                    <b>Anchor Period Stay:<span class="tab"></span></b> 5  <br>
                    <span class="tab"></span>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr> 
                      <th>Service Type</th>
                      <th>Description </th> 
                      <th>Qty</th>
                      <th>Subtotal</th> 
                    </tr>
                    </thead>
                    <tbody>
                    <tr> 
                        <td>Marine Services</td> 
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>4</td>
                        <td>SAR 64.50</td>
                    </tr>
                    <tr> 
                        <td>Marine Services</td> 
                        <td>Wes Anderson umami biodiesel</td>
                        <td>4</td> 
                        <td>SAR 50.00</td>
                    </tr>
                    <tr> 
                        <td>Monsters DVD</td>
                        <td>Terry Richardson helvetica tousled street art master</td>
                        <td>4</td>
                        <td>SAR 10.70</td>
                    </tr>
                    <tr> 
                        <td>Grown Ups Blue Ray</td>
                        <td>Tousled lomo letterpress</td>
                        <td>4</td>
                        <td>SAR 25.99</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
               
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Invoice Summary</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>SAR 250.30</td>
                      </tr>
                      <tr>
                        <th>VAT (15%)</th>
                        <td>SAR 10.34</td>
                      </tr> 
                      <tr>
                        <th>Total:</th>
                        <td>SAR 265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
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
</script>
 
      
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
