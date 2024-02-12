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

 $password_lingth = 4 ;
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

 if($_SESSION["is_admin"]){
// Processing form data when form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){
 
            // Validate username
                if(empty(trim($_POST["username"]))){
                    $username_err = "Please enter a username.";
                } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
                    $username_err = "Username can only contain letters, numbers, and underscores.";
                } else{
                    
                    $param_username = trim($_POST["username"]); 
				$f_name = trim($_POST["f_name"]);
				$l_name = trim($_POST["l_name"]);
                   
                    // Prepare a select statement 
                    $accounts  = $dbop->query("SELECT  * FROM `users` WHERE `username` = '".$param_username. "'  LIMIT 1;" )->fetchArray();
                    
                    if(isset($accounts['id'])) {
                        $result=  $accounts['id'] ; 
                        if($result > 0){
                            $username_err = "This username is already taken.";
                        } else{
                            $username = trim($_POST["username"]);
                            echo "<br>".$username ."<br>";
                        }
                    }  
                }
 
        
        
            // Validate password
                if(empty(trim($_POST["password"]))){
                    $password_err = "Please enter a password.";     
                } elseif(strlen(trim($_POST["password"])) < $password_lingth ){
                    $password_err = "Password must have atleast ".$password_lingth ." characters.";
                } else{
                    $password = trim($_POST["password"]);
                }
        
                // Validate confirm password
                if(empty(trim($_POST["confirm_password"]))){
                    $confirm_password_err = "Please confirm password.";     
                } else{
                    $confirm_password = trim($_POST["confirm_password"]);
                    if(empty($password_err) && ($password != $confirm_password)){
                        $confirm_password_err = "Password did not match.";
                    }
                }

                // Validate confirm Admin Option
                if(isset($_POST["is_admin"])){ 
                    if($_POST["is_admin"]==0){
                        $is_admin = 0; 
                    }else{
                        $is_admin = 1; 
                    }
                   
                }else
                    {
                    $is_admin = 0;  
                }
    


    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){ 
        $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash  
        echo "<h1>".$param_username ;
        echo "  -  ".$param_password."</h1>" ;
        // Prepare an insert statement
        $sqlINSERT = "INSERT INTO users (`username`, `password`,`is_admin`,`clear_pass`,`f_name`,`l_name`) 
	   		VALUES ('".$param_username."', '".$param_password ."', '".$is_admin ."', '".$password ."' , '".$f_name ."' , '".$l_name ."' )";
        echo $sqlINSERT ;
        $insert = $dbop->query($sqlINSERT ); 
         $last= $dbop->lastInsertID(); 
            // Attempt to execute the prepared statement
            if($last){
                // Redirect to login page
                header("location:  index.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
 
        }
    }
    
    $dbop->close();  
    }
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
        <h2>Regester new account</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">
	   	  <div class="form-group">
                <label>First Name</label>
                <input type="text" name="f_name" class="form-control" value="">
                <span class="invalid-feedback"></span>
            </div> 
		  <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="l_name" class="form-control" value="">
                <span class="invalid-feedback"></span>
            </div>  


            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="is_admin" name="is_admin" value="1">
                    <label class="form-check-label" for="inlineCheckbox1">Admin User</label>
                </div>  
            </div>  
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="../index.php" class="btn btn-secondary">Home Page </a>
            </div> 
        </form>
    </div>    
</body>
</html>