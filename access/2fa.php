<?php 
declare(strict_types=1);
session_start();



Require_once('C://wow//password//db.php'); 

include_once __DIR__.'/2fa/src/GoogleAuthenticator.php'; 
include_once __DIR__.'/2fa/src/FixedBitNotation.php'; 
include_once __DIR__.'/2fa/src/GoogleQrUrl.php';
 

                             
    if(!isset($_SESSION["id"] )){
        header("location: logout.php");
    }
    else{
        
                        $id=$_SESSION["id"]  ;                        
                        $_SESSION["sessionID"]  ;
                        $is_admin =$_SESSION["is_admin"]   ;                           
                        $is_active=$_SESSION["is_active"]   ;  
                        $username = $_SESSION["username"] ; 
    }
        
    $users =  $dbop->query('SELECT * FROM users WHERE id= ? LIMIT 1',$id)->fetchAll();

    foreach ($users as $user) {
                $user_2fa_secret=$user['user_2fa_secret'];
                $user_2fa_enable=$user['user_2fa_enable'];
                $_SESSION["maxList"] =$user["max_list"];
    }
   
  // Initialize the session
    if(!$user_2fa_enable){
        $_SESSION["loggedin"] = true; 
        header("location: 2fa_genrate.php");
        exit;
    }
 
 
 // echo $username; 
 $img_qr= \Sonata\GoogleAuthenticator\GoogleQrUrl::generate($username, $user_2fa_secret, 'PMIS');
 $g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
 //echo $user_2fa_secret."<br>";
 if($username='aymanoz'){
	//echo $newCode = $g->getCode($user_2fa_secret)."<br>";
 }
 //echo  $_SESSION["maxList"];
 //echo $_SESSION["MAX_ID"]; 
 $_SESSION['expiry_time'] = time() + (120 * 60); // 120 minutes 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['2fa'])){
        $code=$_POST['2fa'];
        if ($g->checkCode($user_2fa_secret, $code)) {
            $_SESSION["loggedin"] = true;
            // =====================   Targit  // =====================

            header("location: ../landpage.php");
            
            // =====================   Targit  // =====================  
            exit;
        } else {
            $_SESSION["loggedin"] =false;
            header("location: index.php");
            exit;
        }
    }else{
        $_SESSION["loggedin"] =false;  
        header("location: index.php");
        exit;
    }
 }
 $ROOT='../demo1/dist/'; 
?>
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
--> 
<!DOCTYPE html> 
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
    <style>
        .imgauth{ 
            width: 20%; 
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top:15px;
            
        }
       .xdiv { 
            position: relative; 
            height: 130px;
            }

    </style>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div  class="xdiv"> 
                    <img class="imgauth" src="../access/2fa/src/auth.png"> 
				</div> 
				<form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="wrap-input100  m-b-26"  > 
                        <input autofocus type="password" name="2fa" autocomplete="off" class="input100"> 
						 
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
                        Authentication
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