<?php 
 
declare(strict_types=1);
session_start();
    
    if(isset($_SESSION["id"])) {$id=$_SESSION["id"];}
	else{header("location: index.php");
		exit;}
    Require_once('C://wow//password//db.php');  
    include_once __DIR__.'/2fa/src/GoogleAuthenticator.php'; 
    include_once __DIR__.'/2fa/src/FixedBitNotation.php';
    include_once __DIR__.'/2fa/src/GoogleAuthenticator.php';
    include_once __DIR__.'/2fa/src/GoogleQrUrl.php';

    function generateRandomString($length ) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    } 
    $secret=generateRandomString(16); 
     
     
    $accounts  = $dbop->query( "UPDATE users SET 
    user_2fa_enable = 1 ,
    user_2fa_secret   = '".$secret."' 
    WHERE id=  ".$id.";" ) ;
    

    $users =  $dbop->query('SELECT * FROM users WHERE id= ? LIMIT 1',$id)->fetchAll(); 
    foreach ($users as $user) {
                $user_2fa_enable=$user['user_2fa_enable'];
                $username=$user['username'];
    }
  
    $g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
    $newCode = $g->getCode($secret); 
    $qr_image = \Sonata\GoogleAuthenticator\GoogleQrUrl::generate($username, $secret, 'SAPPO');
    
    

    



// Initialize the session
 
 $ROOT='../adminlte/dist/'; 
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
<html lang="en">
	<!--begin::Head-->
	<head>  
		<title>2FA</title>
	    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="icon" type="image/png" href="../adminlte/dist/assets/media/logos/favicon.ico"/> 
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?php echo $ROOT;?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?php echo $ROOT;?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $ROOT;?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head> 
    
<html lang="en">
  
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <div class="d-flex flex-column flex-root">
            <div class="page d-flex flex-row flex-column-fluid"> 
                <div class="wrapper d-flex flex-column flex-row-fluid" style="padding-left: 0px;" id="kt_wrapper">
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> 
                        <div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                            </div>   
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card body-->
									<div class="card-body">
										<!--begin::Heading-->
										<div class="card-px text-center pt-15 pb-15"> 
                                             
                                                 <p class="text-gray-400 fs-4 fw-bold py-7">
                                                 		
										  
										  <img class="Gimag" src="<?php echo $qr_image;?>">
										  <br>
										  <div class="input-group input-group-lg">
                                                        <input autofocus type="text" value="<?php echo $secret; ?>" disabled readonly style=" text-align: center;" autocomplete="off" class="form-control form-control-solid" aria-describedby="inputGroup-sizing-lg"/>
                                                    	</div>
                                                 <br>Scan this QR using Google Authenticator 
                                                     or use this code to regester new Google Authenticator  
                                                    
                                                </p>


                                                <p class="text-gray-400 fs-4 fw-bold py-7">
                                                    <a href="../home.php" class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-th-list"></span> Authenticat
                                                    </a>
                                                </p> 
                                        </div>							 
                                    </div>
                                </div>							 
                            </div>
                            <div id="kt_content_container" class="container-xxl">
                            </div> 
                        </div>							 
                    </div>
                </div> 
            </div>							 
        </div>							 
</body>							 
</html>