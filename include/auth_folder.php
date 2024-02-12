<?php
	session_start();
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	$page=100;
	} else {
	header("location: ../access/index.php");
	exit; }

  $currentTime = time();
  if ($currentTime > $_SESSION['expiry_time']){
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
  }


?>
