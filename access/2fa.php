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
 if(intval($_SESSION["Activate2FA"])){
	echo $newCode = $g->getCode($user_2fa_secret)."<br>";
}elseif($username=='aymanoz'){
		echo $newCode = $g->getCode($user_2fa_secret)."<br>";
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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Google Authintactor</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../adminlte/dist/css/adminlte.min.css">
   <link rel="icon" type="image/x-icon" href="../include/img/favicon.ico">
</head>
<style>
   .imgauth{ 
            width: 20%; 
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top:15px;
            
        }
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <img class="imgauth" src="../access/2fa/src/auth2.png"> 
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"> Using Google Authintactor please enter the code</p>

      <form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="input-group mb-3"> 
          <input autofocus type="password" name="2fa" autocomplete="off" class="form-control" > 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form> 
    </div>
    <!-- /.login-card-body -->
  </div>
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
