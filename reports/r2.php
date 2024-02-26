<?php
include('../include/mpdf/mpdf.php'); 
//$mpdf=new mPDF('utf-8', array(218,278),'','',left,right,top,down,0,0);
$mpdf=new mPDF('utf-8','A4','','',2,2,2,0,0,0);
$mpdf->SetAuthor('Ayman Dasa'); 
 

 
  
 
			$html='<!DOCTYPE html>
					<head>
						<style>
							@page { margin: 15px; }
							@font-face {
								font-family: "Arabic";
								src:  url("DubaiRegular.ttf") format("truetype");
								font-weight: normal;
								font-style:normal; 
								} 
							body{
								font-family:Arabic;
								font-size:9;
								text-align:right;
							} 



						.myfixed2 { 
									position: absolute;
						overflow: visible;
						left: 9px;
						top: 2px;
						width:98%;  
						font-family:sans;
						margin: 0;
						}
						</style>




					</head> 
					<body>  
				 










					
	<table dir="ltr" width=100% style="border-collapse:collapse;position:absolute;top:0pt;left:11.83pt;z-index:4" cellpadding="0" cellspacing="0" border="1"  >
	<tr>		
			<td align=center width=20%  style="border-right-style:hidden" height="20" valign="middle">
				<p>	
					<span lang="ar-SA" style="font-size:8pt">   
						  المملكة العربية السعودية <br>
						شركة الزامل للخدمات البحرية <br>
						<span lang="ar-SA">هـاتف :  "0138696300" </span>
						<br>
						<span lang="ar-SA"> "8574202 013 " </span>فـاكس  	:
					
					</span>
				</p>
			</td>
			<td align=center width=20% valign="middle" style="border-right-style:hidden">
				  <p>
					  <span lang="ar-SA">
						  <img src="img/logo_s1.png" height="40px">
					  </span>
				  </p>
			  </td>
			  <td align=center width=20% height="20" valign="middle" style="border-right-style:hidden">
					  <span lang="ar-SA"> فــــاتــــورة <br>
					  </span>
				   <br>
					   <span dir="ltr" style="font-size:12pt;font-family:DejaVuSansCondensed;color:red;language:en-US;direction:ltr;
			  unicode-bidi:embed" lang="en-US">52525252 </span> 
			  </td>
			  <td align=center width=20% height="65" valign="middle" style="border-right-style:hidden">
				  <p>
					  <span lang="ar-SA">
						  <img src="img/mawani.png " height="55px"> 
					  </span>
				</p>
			  </td>
			  <td align=center width=20% height="20" valign="middle" >
				  <p>
					  <span style="font-size:8pt" lang="ar-SA">
										  المملكة العربية السعودية <br>
										المؤسسة العامة للموانئ<br>
										ميناء الملك عبد العزيز / الدمام<br>
										www.ports.gov.sa
					  </span>
				  </p>
			  </td></tr>
</table>










					</body></html>';

			 
				
	 
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
