<?php 
 session_start();
// Unset all of the session variables
$_SESSION = array();
if (ini_get("session.use_cookies")) {
	$cookieParam = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000, $cookieParam["path"], $cookieParam["domain"], $cookieParam["secure"], $cookieParam["httponly"]);
 } 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.php");
exit;
?>