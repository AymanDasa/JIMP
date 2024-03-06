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

if(isset($_GET['id'])) {
#########################################################################
#########################################################################
#######################  Functions & Class  #############################
#########################################################################
#########################################################################
    $InvoiceID = intval($_GET['id']);  
    $query = "SELECT *  FROM `invoice` WHERE `InvoiceID`=".$InvoiceID." LIMIT 1;"; 

    $invoicevs = $dbop->query($query)->fetchAll();   
    foreach ($invoicevs as $invoicev) {   
      $ShipID=$invoicev['ShipID'];
      $ShipName=$invoicev['ShipName'];
      $ShipWeight=$invoicev['ShipWeight'];
      $AgentID=$invoicev['AgentID'];
      $AgentNameAr=$invoicev['AgentNameAr'];
      $AgentNameEn=$invoicev['AgentNameEn'];
      $ServiceType=$invoicev['ServiceType'];
      $ServiceTypeName=$invoicev['ServiceTypeName'];
      $ServiceTypeFactor=$invoicev['ServiceTypeFactor'];
      $InvoiceDate=$invoicev['InvoiceDate'];
      $InvoiceDateT=$invoicev['InvoiceDateT'];
      $InvoiceDateH=$invoicev['InvoiceDateH'];
      $ArrivalDate=$invoicev['ArrivalDate'];
      $ArrivalDateT=$invoicev['ArrivalDateT'];
      $ArrivalDateH=$invoicev['ArrivalDateH'];
      $DepartureDate=$invoicev['DepartureDate'];
      $DepartureDateT=$invoicev['DepartureDateT'];
      $DepartureDateH=$invoicev['DepartureDateH'];
      $PeriodDays=$invoicev['PeriodDays'];
      $AnchorageEntry=$invoicev['AnchorageEntry'];
      $AnchorageEntryT=$invoicev['AnchorageEntryT'];
      $AnchorageEntryH=$invoicev['AnchorageEntryH'];
      $AnchorageLeave=$invoicev['AnchorageLeave'];
      $AnchorageLeaveT=$invoicev['AnchorageLeaveT'];
      $AnchorageLeaveH=$invoicev['AnchorageLeaveH'];
      $AnchorageDays=$invoicev['AnchorageDays'];
      $MSericeAnchoragePrice=$invoicev['MSericeAnchoragePrice'];
      $MovePort1=$invoicev['MovePort1'];
      $MovePort2=$invoicev['MovePort2'];
      $MovePort3=$invoicev['MovePort3'];
      $TripNo=$invoicev['TripNo'];
      $DockingNo=$invoicev['DockingNo'];
      $RouteNo=$invoicev['RouteNo'];
      $ShiftedNo=$invoicev['ShiftedNo'];
      $Reason=$invoicev['Reason'];
      $Note=$invoicev['Note'];
      $MSFraction1=$invoicev['MSFraction1'];
      $MSFraction2=$invoicev['MSFraction2'];
      $MSFraction3=$invoicev['MSFraction3'];
      $MService1=$invoicev['MService1'];
      $MService2=$invoicev['MService2'];
      $MService3=$invoicev['MService3'];
      $CA0=$invoicev['CA0'];
      $CA1=$invoicev['CA1'];
      $CA2=$invoicev['CA2'];
      $CA3=$invoicev['CA3'];
      $MSericeInPrice=$invoicev['MSericeInPrice'];
      $CB0=$invoicev['CB0'];
      $CB1=$invoicev['CB1'];
      $CB2=$invoicev['CB2'];
      $CB3=$invoicev['CB3'];
      $MSericeOutPrice=$invoicev['MSericeOutPrice'];
      $MA=$invoicev['MA'];
      $MA0=$invoicev['MA0'];
      $MA1=$invoicev['MA1'];
      $MA2=$invoicev['MA2'];
      $MA3=$invoicev['MA3'];
      $MB=$invoicev['MB'];
      $MB0=$invoicev['MB0'];
      $MB1=$invoicev['MB1'];
      $MB2=$invoicev['MB2'];
      $MB3=$invoicev['MB3'];
      $MC=$invoicev['MC'];
      $MC0=$invoicev['MC0'];
      $MC1=$invoicev['MC1'];
      $MC2=$invoicev['MC2'];
      $MC3=$invoicev['MC3'];
      $MovePortPrice=$invoicev['MovePortPrice'];
      $MSericeBathPrice=$invoicev['MSericeBathPrice'];
      $MSNote1=$invoicev['MSNote1'];
      $MSNote2=$invoicev['MSNote2'];
      $MSNote3=$invoicev['MSNote3'];
      $MGPrice=$invoicev['MGPrice'];
      $MSTOTAL=$invoicev['MSTOTAL'];
      $SService1=$invoicev['SService1'];
      $SService2=$invoicev['SService2'];
      $SService3=$invoicev['SService3'];
      $SService4=$invoicev['SService4'];
      $SService5=$invoicev['SService5'];
      $SSName1=$invoicev['SSName1'];
      $SSName2=$invoicev['SSName2'];
      $SSName3=$invoicev['SSName3'];
      $SSName4=$invoicev['SSName4'];
      $SSName5=$invoicev['SSName5'];
      $SSNote1=$invoicev['SSNote1'];
      $SSNote2=$invoicev['SSNote2'];
      $SSNote3=$invoicev['SSNote3'];
      $SSNote4=$invoicev['SSNote4'];
      $SSNote5=$invoicev['SSNote5'];
      $SSUnit1=$invoicev['SSUnit1'];
      $SSUnit2=$invoicev['SSUnit2'];
      $SSUnit3=$invoicev['SSUnit3'];
      $SSUnit4=$invoicev['SSUnit4'];
      $SSUnit5=$invoicev['SSUnit5'];
      $SSQut1=$invoicev['SSQut1'];
      $SSQut2=$invoicev['SSQut2'];
      $SSQut3=$invoicev['SSQut3'];
      $SSQut4=$invoicev['SSQut4'];
      $SSQut5=$invoicev['SSQut5'];
      $SSUPrice1=$invoicev['SSUPrice1'];
      $SSUPrice2=$invoicev['SSUPrice2'];
      $SSUPrice3=$invoicev['SSUPrice3'];
      $SSUPrice4=$invoicev['SSUPrice4'];
      $SSUPrice5=$invoicev['SSUPrice5'];
      $SSPrice1=$invoicev['SSPrice1'];
      $SSPrice2=$invoicev['SSPrice2'];
      $SSPrice3=$invoicev['SSPrice3'];
      $SSPrice4=$invoicev['SSPrice4'];
      $SSPrice5=$invoicev['SSPrice5'];
      $SSTOTAL=$invoicev['SSTOTAL'];
      $TOTAL=$invoicev['TOTAL'];
      $is_VAT=$invoicev['is_VAT'];
      $VAT=$invoicev['VAT'];
      $VAT_TOTAL=$invoicev['VAT_TOTAL']; 
      $Status=$invoicev['Status'];  
      $OracleCode=$invoicev['OracleCode'];  
    } 

}
else{
	exit();
}
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
    <?php 
      $aqlr='SELECT MAX(InvoiceID) AS `LastID` FROM `invoice` LIMIT 1; ';
      $maxIDrs = $dbop->query($aqlr)->fetchAll();   
          foreach ($maxIDrs as $maxIDr) { $maxID = $maxIDr['LastID'];  }
    ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12"> 
              <div class="card">
                <div class="card-header">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1>Invoice  <?php echo $invoiceStart.$InvoiceID ;?></h1>
                      </div>
                      <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Invoice</li>
                      </ol>
                      </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-sm-6"> 
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
<a href="add.php" class="btn btn-app">  <i class="fas fa-plus"></i>  Add  </a>															
<a href="../reports/pre_invoice.php?id=<?php echo $maxID;?>" class="btn btn-app">  <i class="fas fa-file-pdf"></i>  PDF   </a>	
 	
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
            <?php if(intval($Status==700)){?>
              <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Note:</h5>
                The invoice details below are intended for review. Kindly approve before printing becomes available.
              </div> 
            <?php }?> 
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> <?php echo $AgentNameAr;?> / <?php echo $AgentNameEn;?>
					<a href="../agent/view.php?id=<?php echo $AgentID;?>"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
                    <small class="float-right">Date: <?php echo $InvoiceDate;?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #<?php echo $invoiceStart.$InvoiceID ;?></b><br> 
                    <b>Vessel Name:<span class="tab"></span></b>  <?php echo $ShipName;?> <br> 
                    <b>Araival Date:<span class="tab"></span></b><?php echo $ArrivalDate;?><br>
                    <b>Departure Date:<span class="tab"></span></b> <?php echo $DepartureDate;?><br>
                    <b>Vessel Port Stay:<span class="tab"></span></b> <?php echo $PeriodDays;?> <br> 
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                    <b>G.R.T.:<span class="tab"></span></b>       <?php echo $ShipWeight;?> <br>
                    <b>Trip No:<span class="tab"></span></b>      <?php echo $TripNo;?> <br>  
                    <b>Route No:</b>                              <?php echo $RouteNo;?> <br>
                    <b>Move Port:</b>                               <?php echo $MovePort1."-";$MovePort2."-";$MovePort3."-";   ?> <br> 
                    <b>Docking dock</b>                           <?php echo $DockingNo;?> <br>
                    <span class="tab"></span>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col"> 
                     
                    <b>Anchor in Date:<span class="tab"></span></b>     <?php echo $AnchorageEntry;?><br>
                    <b>Anchor out Date:<span class="tab"></span></b>    <?php echo $AnchorageLeave;?><br>
                    <b>Anchor Period Stay:<span class="tab"></span></b> <?php echo $AnchorageDays;?>  <br>
                   
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <hr style="border-top: 2px solid black;">
              <!-- Table row -->
              <div class="row">
                <div class="col-6 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr> 
                      <th>Service Type</th>
                      <th>Description </th>  
                      <th>Subtotal</th> 
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($MSericeInPrice){?>
                      <tr> 
                          <td>Marine Services</td> 
                          <td style="text-align: right;"> اجرة القدوم </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeInPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MSericeOutPrice){?>
                      <tr> 
                          <td>Marine Services</td> 
                          <td style="text-align: right;"> اجرة المغادرة </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeOutPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MovePortPrice){?>
                      <tr> 
                          <td>Marine Services</td> 
                          <td style="text-align: right;">  اجرة الإنتقال </td> 
                          <td style="text-align: right;"><?php echo number_format($MovePortPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MSericeBathPrice){?>
                      <tr> 
                          <td>Marine Services</td> 
                          <td style="text-align: right;">  اجرة الرصيف </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeBathPrice, 2);?></td>
                      </tr>
                    <?php }
                    if($MSericeAnchoragePrice){?>
                      <tr> 
                          <td>Marine Services</td> 
                          <td style="text-align: right;"> اجرة المخطاف </td> 
                          <td style="text-align: right;"><?php echo number_format($MSericeAnchoragePrice, 2);?></td>
                      </tr>
                    <?php  } 
                      if($SSPrice1){?>
                      <tr> 
                          <td>Special Services</td>
                          <td style="text-align: right;"><?php echo $SSName1;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice1, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice2){?>
                      <tr> 
                          <td>Special Services</td>
                          <td style="text-align: right;"><?php echo $SSName2;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice2, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice3){?>
                      <tr> 
                          <td>Special Services</td>
                          <td style="text-align: right;"><?php echo $SSName3;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice3, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice4){?>
                      <tr> 
                          <td>Special Services</td>
                          <td style="text-align: right;"><?php echo $SSName4;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice4, 2);?></td>
                      </tr>
                      <?php } 
                    if($SSPrice5){?>
                      <tr> 
                          <td>Special Services</td>
                          <td style="text-align: right;"><?php echo $SSName5;?></td> 
                          <td style="text-align: right;"><?php echo number_format($SSPrice5, 2);?></td>
                      </tr><?php }  ?>
                    </tbody>
                  </table>
                </div>
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
                        <th style="width:50%"><b>Service</b></th>
                        <td style="text-align: right;"><b>SAR</b></td>
                      </tr>
                      <tr>
                        <th style="width:50%">Marine Services:</th>
                        <td style="text-align: right;"><?php echo number_format($MSTOTAL, 2);?></td>
                      </tr>
                      <tr>
                        <th style="width:50%">Special Service:</th>
                        <td style="text-align: right;"><?php echo number_format($SSTOTAL, 2);?></td>
                      </tr>
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

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <!-- 
                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  -->
                  <?php if(intval($Status==700)){?>
                    <form action="approve.php" method="POST">
                      <input type="hidden" name="VAT_TOTAL" value="<?php echo $VAT_TOTAL;?>"> 
                      <input type="hidden" name="maxID" value="<?php echo $InvoiceID;?>"> 
                      <button type="submit" name="approved"  class="btn btn-success float-right" >
                        <i class="far fa-credit-card"></i> Approve
                      </button>
                    </form>
                    <?php }
				 else {?>   
					<a href="../reports/invoice.php?id=<?php echo $InvoiceID;?>">
                      <button class="btn btn-success float-right" >
				  <i class="fa-solid fa-print"></i> Print
                      </button> </a>
				<?php }?> 
                  <!-- 
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                -->
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
</script>
 
<script src="<?php echo $path;?>include/js/menu.js"></script>
 
</body>
</html>
