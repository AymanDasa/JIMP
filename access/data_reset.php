<?php
// Include config file
session_start();
if(isset($_SESSION["is_admin"])){
	$title= "Admin Portal";
}
	else{
		$title= "Admin Portal";
		header("location: index.php");
		exit;
	} 
if($_SESSION["is_admin"]){
	Require_once('C://wow//password//db.php');   
			Require_once("../include/config.php"); 
        if($_SERVER["REQUEST_METHOD"] == "POST"){  
				if($debug==0){echo "Bug Error 0";exit;}		
                    $t_name = trim($_POST["t_name"]);   
				if( $t_name == 'all_tables'){
					
					//"TRUNCATE TABLE `data`.`invoice`"
					//"TRUNCATE TABLE `data`.`sappo`"
					$agents  = $dbop->query("TRUNCATE TABLE `data`.`agents`");
					$invoice  = $dbop->query("TRUNCATE TABLE `data`.`invoice`");
					$ship  = $dbop->query("TRUNCATE TABLE `data`.`ship`");
				}else{
					header("location: index.php");
					exit;
				} 
				$dbop->close();
                }  
                }else
                    {
                    $is_admin = 0;  
                } 
       
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title> 
	<link rel="icon" type="image/png" href="../adminlte/dist/assets/media/logos/favicon.ico"/> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Data Reset</h2> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
	   	  <div class="form-group">
                <label>Table To Delete</label>
                <input type="text" name="t_name" class="form-control" value="">
                <span class="invalid-feedback"></span>
            </div>  
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="../index.php" class="btn btn-secondary">Home Page </a>
            </div> 
        </form>
    </div>    
</body>
</html>