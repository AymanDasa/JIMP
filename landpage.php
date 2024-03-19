<!DOCTYPE html> 
<html lang="en">
	
<?php 
	$page_level=0;
	$today = date("Y-m-d H:i:s");
	Require_once( "C:\\wow\\password\\config.php");  
	include("include/auth.php");
	include("include/head.php");  
	$debug =0; 
// ######################################################################
// ########################## 	NEW ICON 		#######################
// ######################################################################
 
 
	
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php 	$page_level=0;
   include("include/nav.php")?> 
  <!-- /.navbar --> 
  <!-- Main Sidebar Container -->
  <?php include("include/aside.php")?>   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="landpage.php">Home</a></li> 
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
	<div class="content">
      <div class="container-fluid">
       
        <!-- /.row -->
	   <div class="row">
          <div class="col-lg-12"> 
            <!-- /.card --> 
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Pending Invoices</h3> 
              </div>
              <div class="card-body">  

				<div class="row">
				<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>#</th> 
                      <th>Date</th> 
                      <th>Ship Name</th> 
                      <th>Agent Name</th>
                      <th>Agent Name</th>
                      <th>TOTAL (SAR)</th>
                      <th>View</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php 
					$SQL='SELECT * FROM `invoice` WHERE `Status`="700" ORDER BY  `InvoiceID` DESC LIMIT 1000;';
                      $invoices = $dbop->query($SQL)->fetchAll();
						foreach ($invoices as $invoice) { 
							  $InvoiceDate  = $invoice['InvoiceDate'];
							  $InvoiceID    = $invoice['InvoiceID'];
							  $ShipName     = $invoice['ShipName']; 
							  $AgentNameEn  = $invoice['AgentNameEn']; 
							  $AgentNameAr  = $invoice['AgentNameAr']; 
							  $VAT_TOTAL    = $invoice['VAT_TOTAL'];  
							  $Status       = $invoice['Status'];   
							  $date1=date_create($InvoiceDate); 
							 if($Status >700){
								$approve_text = '<span style="color:#228b22;"><i class="fas fa-square-check"></i></span>';
								$approve_vx='vv';
							 }else{
								$approve_text = '<span style="color:#e52b50;"><i class="fas fa-square-xmark"></i></span>';
								$approve_vx='xx';	
							 }
							echo '
              <tr>
									<td>'.$InvoiceID. ' </td>  
									<td>'.date_format($date1,"Y-m-d"). ' </td>  
									<td>'.$ShipName.'  </td>
									<td>'.$AgentNameEn. ' </td> 
									<td>'.$AgentNameAr. ' </td> 
									<td style="text-align: right;">'.number_format($VAT_TOTAL,2,"."). ' </td> 
                  <td>  
                    <div class="btn-group btn-group-sm"> 
                      <a href="invoice/view.php?id='.$invoice['InvoiceID'].'" class="btn">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="invoice/edit.php?id='.$invoice["InvoiceID"].'" class="btn">
                        <i class="fas fa-pen-to-square"></i>
                      </a> 
                      <a href="reports/invoice.php?id='.$invoice["InvoiceID"].'" class="btn">
                        <i class="fas fa-file-pdf"></i>
                      </a>
                      <div class="btn">  '.$approve_text.'	</div>
                      <div hidden="hidden">'.$approve_vx.'</div> 
                    </div>
                  </td>  
              </tr>
              ' ; 
						}?>
					</tbody>
                  <tfoot>
                  <tr>
			   	  <th>#</th> 
                      <th>Date</th> 
                      <th>Ship Name</th> 
                      <th>Agent Name</th>
                      <th>Agent Name</th>
                      <th>TOTAL (SAR)</th>
                      <th>View</th>
                  </tr>
                  </tfoot>
                </table> 
				</div> 
              </div>
            </div> 
          </div> 
        </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include("include/footer.php")?>  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
	l
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include("include/scripts.php")?>   
</body>
</html>
