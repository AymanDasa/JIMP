<?php
// Initialize the session
session_start();
$password_lingth = 4 ;
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
 
// Include config file
Require_once('C://wow//password//db.php'); 
 
 
	$f_name=$l_name =$avatar=$max_list =NULL; 
	// SELECT  AGENT
	$query = "SELECT `debug` FROM `users` WHERE `debug` = '".$username."' LIMIT 1 ;";  
	// echo $query ;
	$profiles = $dbop->query($query)->fetchAll();   
	foreach ($profiles as $profile) {    
		
	  }
	  

// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
	
			// Update profile
			if(empty(trim($_POST["f_name"]))){  
			}  else{
				$f_name = trim($_POST["f_name"]); 
				$sql="UPDATE users SET `f_name` = '".$f_name."' WHERE  `username` = '".$username."'";
				$stmt = $dbop->query($sql);    
			}

			if(empty(trim($_POST["l_name"]))){  
			}  else{
				$l_name = trim($_POST["l_name"]); 
				$sql="UPDATE users SET `l_name` = '".$l_name."' WHERE  `username` = '".$username."'";
				$stmt = $dbop->query($sql);    
			}

			if(empty(trim($_POST["max_list"]))){  
			}  else{
				$max_list = trim($_POST["max_list"]); 
				$sql="UPDATE users SET `max_list` = '".$max_list."' WHERE  `username` = '".$username."'";
				$stmt = $dbop->query($sql);    
			}


			if(empty(trim($_POST["avatar"]))){  
			}  else{
				$avatar = trim($_POST["avatar"]); 
				$sql="UPDATE users SET `avatar` = '".$avatar."' WHERE  `username` = '".$username."'";
				$stmt = $dbop->query($sql);    
			}

			
 
			 
	}
	$dbop->close();  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    
	<link rel="icon" type="image/png" href="../adminlte/dist/assets/media/logos/favicon.ico"/> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>User Profile</h2> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
	   		
	    	  First Name
		  <div class="form-group">
                <input type="text" name="f_name" class="form-control"  > 
            </div> 
		  <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="l_name" class="form-control"  > 
            </div> 
		  Max List  
		  <div class="form-group"> 
                <input type="text" name="max_list" class="form-control" id="max_list"> 
            </div> 

		   
		  Avatar 
		<div class="custom-file">
			
			<input type="file"  name="avatar"  class="custom-file-input" id="avatar">
			<label class="custom-file-label" for="avatar"><?php echo $avatar;?></label>
			
		</div>
		<div class="form-group"> 
          </div> 


            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="../index.php" class="btn btn-secondary">Home Page </a>
            </div>
        </form> 
    </div>    
</body>
</html>