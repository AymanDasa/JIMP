<?php 
	use Dompdf\Dompdf;
	use Dompdf\Options;
	require '../include/dompdf/vendor/autoload.php';
	$options = new Options();
	$options->set('defaultFont', 'Courier');
	$options->set('chroot', realpath(''));
	$dompdf = new Dompdf($options); 
	require_once '../include/dompdf/vendor/src/Arabic.php';
	$Arabic = new ArPHP\I18N\Arabic(); 
	  
	
			
			$id=$_GET['id'];   
			$folder_name =  basename(dirname(__FILE__));
			Require_once( "C:\\wow\\password\\config.php"); 
			Require_once("../include/auth.php"); 
			Require_once("../include/config.php"); 
			
			// Company Information
			
		// --  Company Information 
			$query = "SELECT * FROM `config` ;"; 
			$configs = $dbop->query($query)->fetchAll();   
			$datas = array(); 
			foreach ($configs as $config) {   
				$name	=$config['name']; 
				$value	=$config['value'];  
					array_push($datas,$name , $value ); 
				}
			$CompanyInformation='<table style="width: 100%;" class="dubai">
					<tr>
						<td style="text-align: left;" width="40%"> <span style="font-size: 16px;">'.$datas[1].'</span> <br>'.$datas[3].'<br>'.$datas[5].'<br>'.$datas[7].'<br>C.R. : '.$datas[9].'- VAT. : '.$datas[11].'</td>
						<td style="text-align: center;vertical-align: top;" width="20%"><img width="100" src="img/logo_s1.png"><br><br> <span style="font-size: 16px;">INVOICE</span> - <span style="font-size: 19px;">فاتورة </span> </td>
						<td style="text-align: right;" width="40%"> <span style="font-size: 19px;">'.$datas[13].'</span><br>'.$datas[15].'<br>'.$datas[17].'<br>'.$datas[19].'<br>'.$datas[11].' سجل تجاري: '.$datas[9].'  - الرقم الضريبي:</td>
					</tr>
				</table>
				<hr>';
				 
		// --  Company Information 

		// --  SAP PO Information
			$query = "SELECT `amount` FROM `sappo` WHERE `id` = 1 LIMIT 1 ;";  
			$sappos = $dbop->query($query)->fetchAll(); 
				foreach($sappos as $sappo){
					$amount = $sappo['amount'];
				}
			$data = strval($amount);
				$data='<table class="table1"> 
						<tr>
							<td class="td_v">77777999944477777</td> 
						</tr>  
			   		</table> 
					<table class="table1"> 
						<tr>
							<td class="td_v">77777999944477777</td> 
						</tr>  
					 </table>';
		// --  SAP PO Information  

			
 
				   
			$html='<!DOCTYPE html>
			<head> 
			<style>  
				@page { margin: 20px; }
				@font-face {
						font-family: "Arabic";
						src:  url("DINNextLTArabicRegular3.ttf") format("truetype");
								font-weight: normal;
								font-style:normal; 
						}
				@font-face {
					font-family: "Dubai";
					src:  url("DubaiRegular.ttf") format("truetype");
							font-weight: normal;
							font-style:normal; 
				}
			.table1{
				font-family:Dubai; 
				font-size: 12px;
				text-align:right; 
				border: 1px solid;
				border-collapse: collapse;
			}
			.td_v{  
				-webkit-transform: rotate(270deg) translate(0px,0px);  
				}
			.arabic{
				font-family:Arabic;
				font-size: 12px;
				text-align:right;
			}
			.dubai{
				font-family:Dubai; 
				font-size: 12px;
				text-align:right;
			} 
			</style></head>
			<body> '.$CompanyInformation.''.$data.' </body></html>';

	$p = $Arabic->arIdentify($html);
	for ($i = count($p)-1; $i >= 0; $i-=2) {
		$utf8ar = $Arabic->utf8Glyphs(substr($html, $p[$i-1], $p[$i] - $p[$i-1]));
		$html   = substr_replace($html, $utf8ar, $p[$i-1], $p[$i] - $p[$i-1]);
	} 
	 
	$dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
	$dompdf -> stream("NEXAMPLE", array("Attachment" => false));
	
?>
