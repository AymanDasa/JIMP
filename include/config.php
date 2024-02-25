<?php

function searchForArray($id, $array,$elmint) {
    foreach ($array as $key => $val) {
        if ($val[$elmint] === $id) {
            return $key;
        }
    }
    return null;
 }
 
 function searchIMO($id, $array,$elmint) {
    foreach ($array as $key => $val) {
        if ($val[$elmint] == $id) {
            return 1;
        }
    }
    return 0;
 }
 function SAPPOStatus($Status){
    switch($Status)
        {
        case  "No":
            $is_paid='<span class="float-left badge bg-danger">No</span>';
            break;
        case  "Partial":
            $is_paid='<span class="float-left badge bg-warning">Partial</span>';
            break;
        case  "Yes":
            $is_paid='<span class="float-left badge bg-success">Yes</span>';
            break;
        }
    return $is_paid;
 }
 function SAPPOSelect($Option){
    switch($Option)
        {
        case  "No":
            $Select="<option Value='Yes'>Yes</option>
                <option Value='Partial' >Partial</option>
                <option Value='No' selected>No</option>";
            break;
        case  "Partial":
            $Select="<option Value='Yes'>Yes</option>
                <option Value='Partial' selected>Partial</option>
                <option Value='No' >No</option>";
            break;
        case  "Yes":
            $Select="<option Value='Yes' selected>Yes</option>
            <option Value='Partial' >Partial</option>
            <option Value='No' >No</option>";
            break;
        }
        return $Select;
     } 
if(isset($_SESSION["is_admin"])){$admin_access = $_SESSION["is_admin"];} 
	else{
		header('Location: ../access/logout.php');
		exit; 
	}

$username_now=$_SESSION["username"];
$debug_sql = "SELECT `debug` FROM `users` WHERE `username` = '".$username_now."' LIMIT 1 ;"; 
 
$debug_sqlr = $dbop->query($debug_sql)->fetchAll();   
                foreach ($debug_sqlr as $debug_row) { $debug = $debug_row['debug'] ; }  
if($debug){echo "<b>Debug :</b>".$debug."<br>";}
 ?>
