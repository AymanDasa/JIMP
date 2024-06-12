  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
	<?php
	// $_SESSION["update"]
		// version
		function fetchXMLFromGitHub($url) {
			// Fetch the raw XML content from the provided GitHub URL
			$xmlContent = file_get_contents($url);

			if ($xmlContent === false) {
				die("Failed to fetch XML content from GitHub");
			} 
			// Load the XML content as a SimpleXMLElement
			$xml = simplexml_load_string($xmlContent); 
			if ($xml === false) {
				die("Failed to parse XML content");
			} 
			return $xml;
		}  
		$githubUrl = 'https://raw.githubusercontent.com/AymanDasa/JIMP/main/company/data.xml'; 
		$xml = fetchXMLFromGitHub($githubUrl);  
		$release = $xml->release; 
		$version = $xml->version;  
		$current_version= floatval($version .".".$release);
		$beta = $xml->beta;
		
	// End Of version 
	
	$result = $dbop->query("SELECT * FROM `info` WHERE `name` = 'version' LIMIT 1 ;")->fetchAll();  
	foreach ($result as $row) {$this_version=  floatval($row['value']); } 
	if($current_version > $this_version){
		$text='<span class="float-right text-sm text-danger"><i class="fas fa-square-xmark"></i></span>'; 
	}else{
		$text='';
	}
	?>
      <b>Version <?php echo $this_version .$text;?></b>   
    </div>
    <strong>Copyright &copy; 2024 <a href="https://vexam.net">vExam</a>.</strong> All rights reserved. <?= $_SESSION['expiry_time'];?>
  </footer>

