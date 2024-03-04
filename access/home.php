<!DOCTYPE html> 
<?php   
    Require_once('C://wow//password//db.php');  
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            header("location: ../landpage.php"); 
        } else{exit;}
?>