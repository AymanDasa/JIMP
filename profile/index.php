<!DOCTYPE html>
		<?php   
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
			$is_active =0;
			$name=$cr =$vat =$conatct =$create_date=$update_date=" ";
			$id=1;    // SELECT  AGENT  
 
	$sql="SELECT * FROM `users` WHERE  `username` ='".$username_now."';";
	$result = $dbop->query($sql)->fetchAll();
	$dataArray = array();
	foreach ($result as $row) {
		$user_id = $row['id'];
		$username = $row['username'];
		$f_name = $row['f_name'];
		$l_name = $row['l_name'];
		$avatar = $row['avatar'];
		$created_at = $row['created_at'];
		$is_admin = $row['is_admin'];
		$is_active = $row['is_active'];
		$clear_pass = $row['clear_pass'];
		$user_2fa_enable = $row['user_2fa_enable'];
		$user_2fa_secret = $row['user_2fa_secret'];
		$user_2fa_code = $row['user_2fa_code']; 
		$signature=$row['signature']; 
	} 
 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["imageUpload"]) && $_FILES["imageUpload"]["error"] == 0) {
        // Check file extension
        $allowedExtensions = array("jpg", "jpeg", "png");
        $fileExtension = pathinfo($_FILES["imageUpload"]["name"], PATHINFO_EXTENSION); 
	   $uploadDirectory = "avatar/";
		// Check if the folder exists
		if (is_dir($uploadDirectory)) {
		// Open the folder
		if ($handle = opendir($uploadDirectory)) {
			$id_file = $user_id."_"; 
			// Loop through each file in the folder
			while (false !== ($file = readdir($handle))) {
				// Check if the file starts with "$id_file"
				if (strpos($file, $id_file) === 0) {
					// Construct the full path to the file
					$filePath = $uploadDirectory . $file;

					// Remove the file
					if (unlink($filePath)) {
						if($debug){echo "File removed successfully: " . $filePath . "<br>";} 
					} else { 
						if($debug){echo "Error removing file: " . $filePath . "<br>";}
					}
				}
			} 
			// Close the folder
			closedir($handle);
		} else { 
			if($debug){echo "Error opening folder.";}
		}
		} else { 
		if($debug){echo "Folder not found.";}
		}



        if (in_array(strtolower($fileExtension), $allowedExtensions)) {
            // Check file size (1 MB limit)
            if ($_FILES["imageUpload"]["size"] <= 101000) {
                // Set upload directory

                // Create directory if it doesn't exist
                if (!is_dir($uploadDirectory)) {
                    mkdir($uploadDirectory, 0777, true);
                }
			 $newFilename = $user_id."_".$username."." . $fileExtension; 
			 $uploadFilePath = $uploadDirectory . $newFilename;
			 if (file_exists($uploadFilePath)) {
                    unlink($uploadFilePath);
                } 
                move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $uploadFilePath);

                
			 if($debug){echo "File uploaded successfully. File path: " . $uploadFilePath;}
			 


			 $SQL_UPDATE ="UPDATE `users` SET 
			 `avatar`                  ='$newFilename' 
			  WHERE  `id`         =".$user_id.";";  
			 $dbop->query($SQL_UPDATE); 
			 header("Refresh:0");

 
            } else {
			if($debug){echo "Error: File size exceeds 1 MB limit.";}
                
            }
        } else {
		if($debug){echo "Error: Only JPG or PNG files are allowed.";}
        }
    } else {
	if($debug){echo "Error: No file uploaded or an error occurred during upload.";}
    }

// ############  Signature ################

    if (isset($_FILES["Signature"]) && $_FILES["imageUpload"]["error"] == 0) {
	//  Signature
	$allowedExtensions = array( "png");
	$fileExtension = pathinfo($_FILES["imageUpload"]["name"], PATHINFO_EXTENSION); 
	$uploadDirectory = "avatar/";
	  // Check if the folder exists
	  if (is_dir($uploadDirectory)) {
	  // Open the folder
	  if ($handle = opendir($uploadDirectory)) {
		  $id_file = $user_id; 
		  // Loop through each file in the folder
		  while (false !== ($file = readdir($handle))) {
			  // Check if the file starts with "$id_file"
			  if (strpos($file, $id_file) === 0) {
				  // Construct the full path to the file
				  $filePath = $uploadDirectory . $file;

				  // Remove the file
				  if (unlink($filePath)) {
					  if($debug){echo "File removed successfully: " . $filePath . "<br>";} 
				  } else { 
					  if($debug){echo "Error removing file: " . $filePath . "<br>";}
				  }
			  }
		  } 
		  // Close the folder
		  closedir($handle);
	  } else { 
		  if($debug){echo "Error opening folder.";}
	  }
	  } else { 
	  if($debug){echo "Folder not found.";}
	  }



	if (in_array(strtolower($fileExtension), $allowedExtensions)) {
	    // Check file size (1 MB limit)
	    if ($_FILES["imageUpload"]["size"] <= 101000) {
		   // Set upload directory

		   // Create directory if it doesn't exist
		   if (!is_dir($uploadDirectory)) {
			  mkdir($uploadDirectory, 0777, true);
		   }
		   $newFilename = $user_id."_".$username."." . $fileExtension; 
		   $uploadFilePath = $uploadDirectory . $newFilename;
		   if (file_exists($uploadFilePath)) {
			  unlink($uploadFilePath);
		   } 
		   move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $uploadFilePath);

		   
		   if($debug){echo "File uploaded successfully. File path: " . $uploadFilePath;}
		   


		   $SQL_UPDATE ="UPDATE `users` SET 
		   `avatar`                  ='$newFilename' 
		    WHERE  `id`         =".$user_id.";";  
		   $dbop->query($SQL_UPDATE); 
		   header("Refresh:0");


	    } else {
		  if($debug){echo "Error: File size exceeds 1 MB limit.";}
		   
	    }
	} else {
	  if($debug){echo "Error: Only JPG or PNG files are allowed.";}
	}
 } else {
  if($debug){echo "Error: No file uploaded or an error occurred during upload.";}
 }


    if (isset($_POST["f_name"])){
		$f_name=$_POST["f_name"];
		$l_name=$_POST["l_name"];
		$SQL_UPDATE ="UPDATE `users` SET 
		`f_name`                  ='$f_name' ,
		`l_name`                  ='$l_name' 
		WHERE  `id`         =".$user_id.";";  
		$dbop->query($SQL_UPDATE); 
		header("Refresh:0");  
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
	<link rel="icon" type="image/x-icon" href="../include/img/favicon.ico"> 
</head> 
<style> 
.img-account-profile {
    height: 250px;
    width: 250px;
}   </style>



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
						<h1>Profile</h1> 
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
					<div class="col-xl-4"> 
						<div class="card mb-4 mb-xl-0">
							<div class="card-header">
								Profile Picture
							</div>
							<div class="card-body text-center"> 
								<img class="rounded-circle img-account-profile mb-2" src="avatar/<?php echo $avatar;?>" alt>
								<div class="small font-italic text-muted mb-4">
									JPG or PNG no larger than 1 MB 
								</div> 
								<form method="post" enctype="multipart/form-data">
									<input type="file"  name="imageUpload" accept=".jpg, .jpeg, .png" required>
									 
									<button class="btn btn-primary" type="submit">New image</button>
								</form>
							</div>
						</div>
<br>
						<div class="card mb-4 mb-xl-0">
							<div class="card-header">
								User Signature
							</div>
							<div class="card-body text-center"> 
								<img class="rounded-circle img-account-profile mb-2" style="height: 66px;border-radius: 0% !important;" src="avatar/<?php echo $avatar;?>" alt>
								<div class="small  mb-4" style="color:red;">
									  PNG ONLY no larger than 1 MB , height 70 px, transparent  
								</div> 
								<form method="post" enctype="multipart/form-data">
									<input type="file"  name="Signature" accept=".png" required> 
									<button class="btn btn-primary" type="submit">New Signature</button>
								</form>
							</div>
						</div> 
					</div>
					<div class="col-xl-8"> 
						<div class="card mb-4">
							<div class="card-header">
								Account Details
							</div>
							<div class="card-body">
								<form method="post" method="post">  
									<div class="row gx-3 mb-3"> 
										<div class="col-md-6">
											<label class="small mb-1" for="inputFirstName">First name</label>
											<input class="form-control" id="f_name" type="text"  name="f_name" value="<?php echo $f_name?>">
										</div> 
										<div class="col-md-6">
											<label class="small mb-1" for="inputLastName">Last name</label>
											<input class="form-control" id="l_name" type="text"   name="l_name" value="<?php echo $l_name?>">
										</div>
									</div> 
									<div class="row gx-3 mb-3"> 
										<div class="col-md-6">
											<label class="small mb-1" for="inputOrgName">Created </label>
											<input class="form-control" id="created_at" type="text" disabled  name="created_at" value="<?php echo $created_at?>">
										</div> 
										<div class="col-md-6">
											<label class="small mb-1" for="inputLocation">Is Active</label>
											<input class="form-control" id="is_active" type="text" disabled  name="is_active" value="<?php echo $is_active?>">
										</div>
									</div> 
									<button class="btn btn-primary" type="submit">Save changes</button>
								</form>
							</div> 
						</div> 
					</div>
				</div>
			</div> <!-- /.row --> 
		</section> 	
		<br>
		<!-- /.content -->
	</div>
				<!-- /.content-wrapper -->
	<?php include('../include/footer.php');?>

	<aside class="control-sidebar control-sidebar-dark"> </aside>
			 

	<!-- jQuery -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo $Homepath;?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables  & Plugins -->
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
	<script src="../adminlte/plugins/jquery/jquery-1.10.2.min.js"></script>
	<script src="bootstrap5.3.3/js/bootstrap.bundle.min.js"></script> 
	<script src="<?php echo $path;?>include/js/menu.js"></script>
</body>
</html>
