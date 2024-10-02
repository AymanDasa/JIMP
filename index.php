<?php   
	session_start();  
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ 
		header("location: landpage.php");
		exit;
	} else { 
		header("location: access/index.php");
		exit;
		
	}
?> 
