<!DOCTYPE html>
		<?php   
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php");
			$is_active =0;
			$name=$cr =$vat =$conatct =$create_date=$update_date=" ";
			if(isset($_POST['Service_ID'])){
				$Service_ID=intval($_POST['Service_ID']);    
				// SELECT  AGENT 
					$Service_ID=  	stripslashes(htmlentities( strip_tags($_POST['Service_ID'] )));
					$code=  		stripslashes(htmlentities( strip_tags($_POST['code'] )));
					$Description=  	stripslashes(htmlentities( strip_tags($_POST['Description'] )));

					if(isset($_POST['ServiceType'])){
						if($_POST['ServiceType']=='on')
							{$ServiceType=  	stripslashes(htmlentities( strip_tags($_POST['ServiceType'] )));} 
					else{$ServiceType=0;}}else{$ServiceType=0;} 
					if($debug){echo "<b>ServiceType :</b>".$ServiceType."<br>";} 
					$Unit=  		stripslashes(htmlentities( strip_tags($_POST['Unit'] ))); 

					if(isset($_POST['WeightFactor'])){
						if($_POST['WeightFactor']=='on')
							{$WeightFactor=  	stripslashes(htmlentities( strip_tags($_POST['WeightFactor'] )));} 
					else{$WeightFactor=0;}}else{$WeightFactor=0;}
					if($debug){echo "<b>WeightFactor :</b>".$WeightFactor."<br>";} 
					$DoubleFactor=  stripslashes(htmlentities( strip_tags($_POST['DoubleFactor'] )));
					$ProfitPercent= stripslashes(htmlentities( strip_tags($_POST['ProfitPercent'] )));
					$Cost=  		stripslashes(htmlentities( strip_tags($_POST['Cost'] )));
					$MinCost=  		stripslashes(htmlentities( strip_tags($_POST['MinCost'] ))); 
   
  
						if($debug){echo "<b>Service_ID :</b>".$Service_ID."<br>";} 

				$query_UPDATE="UPDATE `services` SET 
					`code`='".$code."', 
					`Description`='".$Description."', 
					`ServiceType`='".$ServiceType."', 
					`Unit`='".$Unit."', 
					`WeightFactor`='".$WeightFactor."', 
					`DoubleFactor`='".$DoubleFactor."', 
					`ProfitPercent`='".$ProfitPercent."', 
					`Cost`='".$Cost."',
					`MinCost`='".$MinCost."' 
					  WHERE `Service_ID` = ".$Service_ID.";"; 

					  if($debug){echo "<b>query :</b>".$query_UPDATE."<br>";} 
					  $dbop->query($query_UPDATE);  
					   if($debug){echo "<b>AgentCR :</b>".$DoubleFactor."<br>";}  
					   		else{
								header('Location: index.php');
								exit();  } 
			}
        ?>    