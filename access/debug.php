<?php
 
// Include config file 
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
  
	// SELECT  AGENT
	$username=$_SESSION["username"];
	$query = "SELECT `debug` FROM `users` WHERE `username` = '".$username."' LIMIT 1 ;";  
	// echo $query ;
	$debugs = $dbop->query($query)->fetchAll();   
	foreach ($debugs as $debug_row) {    
		$debug =intval($debug_row['debug']);
		echo "<h1>".$debug ."</h1>";
			if($debug==1){$query_debug="UPDATE `users` SET `debug` = '0' WHERE `username` = '".$username."';";} 
			if($debug==0){$query_debug="UPDATE `users` SET `debug` = '1' WHERE `username` = '".$username."';";} 
		echo $query_debug;
		$dbop->query($query_debug);  
	  }
	  
	
 // SELECT `users`.`debug` FROM `users` WHERE `users`.`username` = 'aymanoz' ORDER BY `users`.`debug` ASC; 
?>
<!DOCTYPE html>
<html lang="en">
<body>
<p>
	<a href="javascript:history.go(-1)" title="Return to the previous page">« Go back</a>
</p> 
</body>
</html>