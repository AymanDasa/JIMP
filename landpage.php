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
       
        <!-- /.row -->
	   <div class="row">
          <div class="col-lg-12"> 
            <!-- /.card --> 
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Not Approved Invoices</h3> 
              </div>
              <div class="card-body">  

				<div class="row">
					 
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
