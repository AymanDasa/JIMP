<!DOCTYPE html> 
<?php 
				$page=1;
				$ROOT='../demo1/dist/'; 
				Require_once('C://wow//password//db.php'); 
					// ********************************************************************************  
					// Initialize the session 
					// Check if the user is already logged in, if yes then redirect him to welcome page
					if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
						header("location: ../landpage.php");
						exit;
					} 
					// Define variables and initialize with empty values
					$username = $password = "";
					$username_err = $password_err = $login_err = "";
					
					// Processing form data when form is submitted
					if($_SERVER["REQUEST_METHOD"] == "POST"){
						
						// Check if username is empty
						if(empty(trim($_POST["username"]))){
							$username_err = "Please enter username.";
						} else{
							
							$username = trim($_POST["username"]); 
						} 
						// Check if password is empty
						if(empty(trim($_POST["password"]))){
							$password_err = "Please enter your password.";
						} else{
							$password = trim($_POST["password"]); 
						} 
						// Validate credentials
						if(empty($username_err) && empty($password_err)){
							// Prepare a select statement
		
							
							$sql="SELECT * FROM users WHERE username = '".$username."'";
							$accounts  = $dbop->query($sql )->fetchArray();
							 
							$id =$accounts['id'] ;
							$username =$accounts['username'] ;
							$hashed_password =$accounts['password'] ;
							$is_admin =$accounts['is_admin'] ;
							$is_active =$accounts['is_active'] ; 
							$maxList =$accounts['max_list'] ;  
							$f_name = $accounts["f_name"] ; 
							$l_name = $accounts["l_name"] ;  
							
							 
							if( isset($id) ){ 
								// Attempt to execute the prepared statement  
									if(password_verify($password, $hashed_password)){
										// Password is correct, so start a new session
										session_start();
		
										// Store data in COSTOM session variables 
										$_SESSION["username"] = $username; 
										$_SESSION["id"] = $id;                        
										$_SESSION["sessionID"] = $id.time(); 
										$_SESSION["is_admin"] = $is_admin;                           
										$_SESSION["is_active"] = $is_active;  
										$_SESSION["maxList"] = $maxList; 
										$_SESSION["f_name"] = $f_name;   
										$_SESSION["l_name"] = $l_name;         
										$_SESSION["data6"] = '';  
										     
										// Redirect user to 2fa page
										
										// TODO: add log file for timestamp for user access 

										$invoices = $dbop->query('SELECT MAX(`id`) AS MAX_ID FROM users LIMIT 1;')->fetchAll();  
										foreach ($invoices as $invoice) {$_SESSION["MAX_ID"]=  intval($invoice['MAX_ID'])+1; } 
		
										header("location: 2fa.php");
									} else{
										// Password is not valid, display a generic error message
										$login_err = "Invalid username or password.";
									}
									 
									 
								} else{
									echo "Oops! Something went wrong. Please try again later.";
								}
		
								// Close statement 
								$dbop->close(); 
						}
						
						// Close connection 
					}  
					/******************************************************************************** */  
					/******************************************************************************** */ 
		?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>  Sign In </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="width: 710px;">
  <!-- /.login-logo -->
  <style>
.login100-form-title {
	width: 100%;
	position: relative;
	z-index: 1;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	flex-wrap: wrap;
	flex-direction: column;
	align-items: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	padding: 70px 15px 74px 15px;
}
.wrap-login100 {
	width: 670px;
	background: #fff;
	border-radius: 10px;
	overflow: hidden;
	position: relative;
}
.login100-form-title-1 {
	font-family: Poppins-Bold;
	font-size: 30px;
	color: #fff;
	text-transform: uppercase;
	line-height: 1.2;
	text-align: center;
  font-family: Poppins-Regular, sans-serif;
} 

  </style>
  
 

  <div class="card card-outline card-primary">

    <div class="card-header text-center">
	<img src="../include/img/logo_s1.png" style="width:200px" >
	<?php 
	$min = 10;
	$max = 15;
	$randomNumber = rand($min, $max); 
	?> 
        <div  class="wrap-login100 login100-form-title" style="width:100%; background-image: url(images/bg-<?php echo $randomNumber;?>.jpg);"> 
		<span class="login100-form-title-1">
		&nbsp;
            </span>
				</div> 
    </div>	
    <div class="card-body">  

		<div class="row">
		<div class="col-sm-3"> </div>
			<div class="col-sm-6">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="input-group mb-3">
					<input class="form-control" autocomplete="off" type="text" name="username" placeholder="username">
					<div class="input-group-append">
						<div class="input-group-text">
						<span class="fas fa-user"></span>
						</div>
					</div>
					</div> 
					<div class="input-group mb-2">
					<input type="password" class="form-control" type="password" name="password" autocomplete="off" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
						<span class="fas fa-lock"></span>
						</div>
					</div>
					</div>
					<div class="row">
					<div class="col-8">
						<div class="icheck-primary">
					 
						</div>
					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
					<!-- /.col -->
					</div>
				</form> 
			</div>
		</div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
