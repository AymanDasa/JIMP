<!DOCTYPE html>
<html lang="en">
 <!--<![endif]-->
 <!-- BEGIN HEAD -->
<?php
    ob_start();
    session_start();
    require_once 'login_dbconnect.php';
    
    // if session is not set this will redirect to login page
    if( !isset($_SESSION['user']) ) {
        header("Location: index.php");
        exit;
    }
    // select loggedin users detail
    $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
?>
<?php
     require_once 'db_it_asset_management.php';
if(isset($_GET['R']))
{
    $R=$_GET['R'];
}
else{
    $R=1;
}
 
switch ($R) {
    case "1":
        $query_rsITasset = "SELECT * FROM assets_hardware WHERE IsActive LIKE '0' ORDER BY model ASC";
        break; 
    case "2":
        $query_rsITasset = "SELECT * FROM assets_hardware  WHERE platform LIKE 'WAITING PO' ORDER BY vendor, user ASC";
        break;
    case "3":
        $query_rsITasset = "SELECT * FROM assets_hardware  WHERE platform LIKE 'RECEIVED' ORDER BY vendor, user ASC";
        break; 
    case "4":
        $query_rsITasset = "SELECT * FROM assets_hardware  WHERE platform LIKE 'PO SENT' ORDER BY vendor, user ASC";
        break;
    case "5":
        $query_rsITasset = "SELECT * FROM assets_hardware  WHERE platform LIKE 'SERVICE' ORDER BY vendor, user ASC";
        break; 
   default:
       $query_rsITasset = "SELECT * FROM assets_hardware WHERE IsActive LIKE '0' ORDER BY model ASC";
      break;
         }   
$rsITasset =  $db_conn->query($query_rsITasset); 
$row_rsITasset = $rsITasset->fetch_assoc();

 
 $COUNT_SQL1="SELECT `asset_hardware_id` FROM `assets_hardware` WHERE `asset_type` LIKE 'Laptop'";
$result1 = $db_conn->query($COUNT_SQL1);

 $COUNT_SQL2 ="SELECT `asset_hardware_id` FROM `assets_hardware` WHERE `platform` LIKE 'WAITING PO'";
 $result2 = $db_conn->query($COUNT_SQL2);

$COUNT_SQL3 ="SELECT `asset_hardware_id` FROM `assets_hardware` WHERE `platform` LIKE 'PR CREATE'";
 $result3 = $db_conn->query($COUNT_SQL3);

$COUNT_SQL4 ="SELECT `asset_hardware_id` FROM `assets_hardware` WHERE `platform` LIKE 'PO SENT'";
 $result4 = $db_conn->query($COUNT_SQL4);

$COUNT_SQL5 ="SELECT `asset_hardware_id` FROM `assets_hardware` WHERE `platform` LIKE 'SERVICE'";
 $result5 = $db_conn->query($COUNT_SQL5);
?>
<?php
$currentPage = $_SERVER["PHP_SELF"];
?>
<head>
        <?php require_once('txt/head.php'); ?>

       
</head>
    <!-- END HEAD -->
    <body class="page-container-bg-solid page-header-menu-fixed page-boxed">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
                 <?php require_once('txt/header-top.php'); ?>
        <!-- END HEADER TOP -->
        <!-- BEGIN HEADER MENU -->
            <?php require_once('txt/asset-menu.php'); ?>
        <!-- END HEADER MENU -->
        </div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->

<!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
<!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a target='_blank' href="status.php?R=3"> 
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                <div class="number">
                                                    <h3 class="font-purple-soft">
                                                        <span data-counter="counterup" data-value="<?php echo $result3->num_rows; ?>">0</span>
                                                    </h3>
                                                    <small>Waiting for PR Approval</small>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                    <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                                                        <span class="sr-only">50% progress</span>
                                                    </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> progress </div>
                                                    <div class="status-number"> 50% </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>    
                                </div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a target='_blank' href="status.php?R=2"> 
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                    <div class="number">
                                                        <h3 class="font-green-sharp">
                                                            <span data-counter="counterup" data-value="<?php echo $result2->num_rows; ?>">0</span>
                                                        </h3>
                                                        <small>Waiting for PO</small>
                                                    </div>
                                                <div class="icon">
                                                    <i class="icon-basket"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                    <span style="width: 25%;" class="progress-bar progress-bar-success green-sharp">
                                                        <span class="sr-only">25% progress</span>
                                                    </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> progress </div>
                                                    <div class="status-number"> 25% </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a target='_blank' href="status.php?R=4">
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                <div class="number">
                                                    <h3 class="font-blue-sharp">
                                                        <span data-counter="counterup" data-value="<?php echo $result4->num_rows; ?>"></span>
                                                    </h3>
                                                    <small>Waiting for delivery</small>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-truck"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                    <span style="width: 75%;" class="progress-bar progress-bar-success blue-sharp">
                                                        <span class="sr-only">75% grow</span>
                                                    </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> progress </div>
                                                    <div class="status-number"> 75% </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a target='_blank' href="status.php?R=5">    
                                        <div class="dashboard-stat2 ">
                                            <div class="display">
                                                <div class="number">
                                                    <h3 class="font-red-haze">
                                                        <span data-counter="counterup" data-value="<?php echo $result5->num_rows; ?>"></span>
                                                    </h3>
                                                    <small>SERVICE</small>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-wrench"></i>
                                                </div>
                                            </div>
                                            <div class="progress-info">
                                                <div class="progress">
                                                    <span style="width: 95%;" class="progress-bar progress-bar-success red-haze">
                                                        <span class="sr-only">95% change</span>
                                                    </span>
                                                </div>
                                                <div class="status">
                                                    <div class="status-title"> progress </div>
                                                    <div class="status-number"> 95% </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Begin: life time stats -->
                                    <div class="portlet light portlet-fit portlet-datatable ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                              
                                                <span class="caption-subject font-offshore sbold uppercase">Zamil Offshore IT Asset Management</span>
                                            </div>
                                          
                                        </div>
                                        <div class="portlet-body">
                                                    
                                                       <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                                            <thead>
                                                                <tr>
                                                                    <th class="all"> <font color="#0A1686">PURCHASE ON</font></th>
																	
																	<th class="none"> <font color="#0A1686">Department </font></th>
                                                                    <th class="all"> <font color="#0A1686">USER </font></th>
                                                                    <th class="none"> <font color="#0A1686">Emp. No </font></th>
                                                                    <th class="none"> <font color="#0A1686">Asset Tag :</font></th>
                                                                    <th class="none"> <font color="#0A1686">Serial # :</font></th>
                                                                    <th class="none"> <font color="#0A1686">IP :</font></th>
                                                                    <th class="none"> <font color="#0A1686">PR Number :</font></th>
                                                                    <th class="all"> <font color="#0A1686">ASSET</font></th>
                                                                    <th class="all"><font color="#0A1686">ASSET DESCRPTION </font></th>
															        <th class="none"> <font color="#0A1686">CC : </font></th>
                                                                    <th class="none"> <font color="#0A1686">PO Number :</font></th>
																	<th class="all"> <font color="#0A1686">Status</font></th>
																	<th class="none"> <font color="#0A1686">Note :</font></th>
                                                                    <th class="all"> <font color="#0A1686"><i class="fa fa-mouse-pointer"></i></font></th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                <?php do { ?>
                                                                    <tr>
                                                                        <td> <?php echo $row_rsITasset['model']; ?> </td>
																		
																		<td> <?php echo $row_rsITasset['vendor']; ?> </td>
                                                                        <td> <?php echo $row_rsITasset['user']; ?> </td>
                                                                        <td><?php echo $row_rsITasset['user_account']; ?></td>
                                                                        <td><?php echo $row_rsITasset['asset_tag']; ?></td>
                                                                        <th><?php echo $row_rsITasset['serialnumber']; ?></td>
                                                                        <td><?php echo $row_rsITasset['pc_ip']; ?></td>
                                                                        <td> <?php echo $row_rsITasset['purchase_order']; ?> </td>
                                                                        <td> <?php echo $row_rsITasset['asset_type']; ?> </td>
                                                                        <td> <?php echo $row_rsITasset['asset_model']; ?> </td>
						                                                <td> <?php echo $row_rsITasset['dep_no']; ?> </td>
                                                                        <td> <?php echo $row_rsITasset['office']; ?> </td>
																		<td> <?php echo $row_rsITasset['platform']; ?> </td>
																		<td> <font color="#FF0000"><?php echo $row_rsITasset['comments']; ?> </font></td>
                                                                        <td><a target="blank" href="user_details.php?recordID=<?php echo $row_rsITasset['asset_hardware_id']; ?>">  <i class="fa fa-external-link"></i></a></td>
                                                                                               
                                                                    </tr>
                                                     
                                                                <?php } while ($row_rsITasset = $rsITasset->fetch_assoc() ); ?>
                                                           </tbody>
                                                        
                                                        </table>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>












                            <div class="portlet-body">
                                           
                                            
                                            
                                   








<!--

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-green">
                                                <span class="caption-subject bold uppercase">Revenue</span>
                                                <span class="caption-helper">distance stats...</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                    <i class="icon-cloud-upload"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                    <i class="icon-wrench"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                    <i class="icon-trash"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="dashboard_amchart_1" class="CSSAnimationChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-red">
                                                <span class="caption-subject bold uppercase">Finance</span>
                                                <span class="caption-helper">distance stats...</span>
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                                    <i class="fa fa-pencil"></i> Export </a>
                                                <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div

                                -->    




                                    <!-- End: life time stats -->
                        </div>
                                
                            
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
           
        </div>
        <!-- END CONTAINER -->
        <?php require_once('txt/sidebar.php'); ?>
        <!-- BEGIN FOOTER -->
  <!-- BEGIN PRE-FOOTER -->
        <?php require_once('txt/footer.php'); ?>
  <!-- END INNER FOOTER -->
  <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>


<!--<script src="../assets/global/plugins/bootstrap-sessiontimeout/bootstrap-session-timeout.js" type="text/javascript"></script>
    <script src="../assets/pages/scripts/ui-session-timeout.js" type="text/javascript"></script>
-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>