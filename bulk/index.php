<!DOCTYPE html>
<?php    
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			$is_active =0; 
			$NoError = 1;	  
			$name=$cr =$vat =$conatct =$create_date=$update_date=" "; 
					$today = date("Y-m-d H:i:s");  
					$Xcont = 1;  
			if ($_SERVER["REQUEST_METHOD"] == "POST") { 
				// Loop through each checkbox
				foreach ($_POST as $key => $value) {
					// Check if the checkbox corresponds to an invoice ID
					if (strpos($key, 'invoicID_') === 0) {
						// Extract the invoice ID from the checkbox name
						$invoiceID = substr($key, 9); 
						// Update the status of the invoice in the database
						$sql = "UPDATE `invoice` SET Status = 800 WHERE `InvoiceID` = $invoiceID"; 
						if ($dbop->query($sql) === FALSE) {
							echo "Error updating record: " . $conn->error;
						}
					}
				} 
			}

			$Error_MSG='';
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
            <h1>Agents</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active"><?php echo ucwords(basename(dirname(__FILE__)));?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12"> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of all Agents</h3>
			 <div class="card-tools">  
				<a href="add.php" class="btn btn-app-x" data-toggle="modal" data-target="#modal-lg">  <i class="fas fa-plus"></i>     </a>	 
                  </div>
              </div> 
              <!-- /.card-header -->
              <div class="card-body">
			  <form action="#" method="POST">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				
			   	  <th style="width:3px"> <input type="checkbox" id="myCheck" onclick="checkAll()">   </button> </th>
                      <th>Invoice #</th>
                      <th>Date</th>
                      <th>Vessel</th>
                      <th>Agent</th>
                      <th>Total Amount</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
				$i=0;

                  $query = "SELECT * FROM `full_invoice_view` WHERE `Status`=700  ;"; 
                        if($debug){echo "<b>query :</b>".$query."<br>";}
                                $result = $dbop->query($query)->fetchAll();   
                                foreach ($result as $row) {  
							$i++;
							$InvoiceDate  	= $row['InvoiceDate'];
							$InvoiceID    	= $row['InvoiceID'];
							$ShipName     	= $row['ShipName']; 
							$AgentNameEn  	= $row['AgentNameEn'];      
							$VAT_TOTAL  	= $row['VAT_TOTAL'];      
			 	                echo '<tr>

                              <td>  <input type="checkbox" id="invoice" name="invoicID_'.$InvoiceID.'" value="1" class="invoice-checkbox"> </td> 
                              <td> '.$InvoiceID. '  </td> 
                              <td>'.$InvoiceDate. ' </td> 
                              <td>'.$ShipName. ' </td> 
                              <td>'.$AgentNameEn. ' </td> 
                              <td>'.$VAT_TOTAL. ' </td> 
                               
					  
                            </tr>' ;  }  ?>
                  </tbody>
                  <tfoot>
                  <tr>
			   	<th style="width:3px"></th>
                      <th>Invoice #</th>
                      <th>Date</th>
                      <th>Vessel</th>
                      <th>Agent</th>
                      <th>Total Amount</th>
                  </tr>
                  </tfoot>
                </table>
				<input type="submit" value="Approv All">
				</form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->


	 <!-- /. modal --> 
	 <div class="modal fade" id="modal-lg">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add New Agent</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="#" method="POST">
				<div class="modal-body">
						<div class="col-md-12">  
						<div class="row">
							<div class="col-sm-6">
							<!-- text input  -->
							<div class="form-group">
								
								<label>Company Name En</label>
								 <input type="text"  class="form-control is-invalid" name="AgentNameEn" autocomplete="off">
								<label>Company Name Ar</label>
								 <input type="text" class="form-control" name="AgentNameAr"  autocomplete="off">
							</div>
							</div>
							<div class="col-sm-3">
							<!-- text input -->
							<div class="form-group">
								<label>CR / VAT No#</label>
								<input type="text" class="form-control is-invalid" class="form-control" name="AgentCR" autocomplete="off">
								<label>IBAN</label>
								<input type="text" class="form-control" name="AgentBilling" autocomplete="off">
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
				</div> 

					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="add" value="add"  class="btn btn-primary">Save changes</button>
					</div>  
				</form> 
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
		</div>
	<!-- /. modal -->

 
	<!-- /. modal -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	<?php include('../include/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> </aside>
  <!-- /.control-sidebar -->
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
 
<?php echo $Error_MSG;?>
<script>  
function checkAll() {
  var masterCheckbox = document.querySelector('input[type="checkbox"][onclick="checkAll()"]');
  var checkboxes = document.querySelectorAll('.invoice-checkbox'); 
  checkboxes.forEach(function(checkbox) {
    checkbox.checked = masterCheckbox.checked;
  });
}; 

  var $sidebar = $('.control-sidebar')
  var $container = $('<div />', {
    class: 'p-3 control-sidebar-content'
  });
 
</script>
<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
