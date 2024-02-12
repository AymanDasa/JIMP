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
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="icon" type="image/png" href="../adminlte/dist/assets/media/logos/favicon.ico"/>  
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> 	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> 
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> 
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div> 
				<form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span> 
						<input value="aymanoz" class="input100" autocomplete="off"type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span> 
						<input value="1234512345"  class="input100" type="password" name="password" autocomplete="off" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
				 
 
						<?php 
					if(!empty($login_err)){
						echo '<div class="alert alert-danger">' . $login_err . '</div>';
					}        
					?>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	 
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script> 
	<script src="vendor/animsition/js/animsition.min.js"></script> 
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
	<script src="vendor/select2/select2.min.js"></script> 
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script> 
	<script src="vendor/countdowntime/countdowntime.js"></script> 
	<script src="js/main.js"></script>

</body>
</html>