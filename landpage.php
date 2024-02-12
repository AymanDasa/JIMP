<!DOCTYPE html> 
<html lang="en">
	
<?php 
	$page_level=0;
	Require_once( "C:\\wow\\password\\config.php"); 
	include("include/auth.php");
	include("include/head.php");
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("include/nav.php")?> 
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
        <div class="row">
          <div class="col-lg-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">SAP. PO</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>SAP. PO#</th>
                    <th>Name </th>
                    <th>Amount</th>
                    <th>Blance</th>
                    <th>Is Paid</th> 
                    <th>Exp. Date</th> 
                    <th>More</th> 
                  </tr>
                  </thead>
                  <tbody>
			   <?php
			   Require_once("include/config.php"); 
				$SQLstatus='SELECT * FROM sappo WHERE is_active =1;'; 
                      $sappos = $dbop->query($SQLstatus)->fetchAll();
                      foreach ($sappos as $sappo) {  
			 	                echo '<tr>
                              <td>'.$sappo['no']. '  </td> 
                              <td>'.$sappo['name']. ' </td> 
                              <td>'.number_format($sappo['amount'], 2, '.', ',') . ' </td> 
                              <td>'.number_format($sappo['balance'], 2, '.', ',') . ' </td> 
                              <td style="text-align: left;">'.SAPPOStatus($sappo['is_paid']). ' </td> 
                              <td>'.$sappo['sappoExpDate']. ' </td> 							  
                              <td> <a href="sappo/view.php?id='.$sappo['id'].'">
                                      <button Style="padding: .0rem .0rem;" class="btn btn-icon"> 
                                        <i class="fas fa-search"></i>
                                      </button>
                                    </a>

							 
							 
                              </td>  
                            </tr>' ;  }  ?>
                  
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
           
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
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
