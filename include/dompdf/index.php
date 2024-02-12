<?php 
	use Dompdf\Dompdf;
	use Dompdf\Options;
	require 'vendor/autoload.php';
	$options = new Options();
	$options->set('defaultFont', 'Courier');
	$options->set('chroot', realpath(''));
	$dompdf = new Dompdf($options);
	// DINNextLTArabicRegular3.ttf
	require_once 'vendor/src/Arabic.php';
	$Arabic = new ArPHP\I18N\Arabic();
	//$html ='Nexample';
	  $html = '  ستخدام اإاأ';
	  
	$p = $Arabic->arIdentify($html);
	for ($i = count($p)-1; $i >= 0; $i-=2) {
		$utf8ar = $Arabic->utf8Glyphs(substr($html, $p[$i-1], $p[$i] - $p[$i-1]));
		$html   = substr_replace($html, $utf8ar, $p[$i-1], $p[$i] - $p[$i-1]);
	} 
	$dompdf->loadHtml('
<!DOCTYPE html>
<head><style>
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
p{
	font-family:Arabic;
	font-size: 100px;
	text-align:right;
}
td{
	font-family:Dubai; 
	font-size: 100px;
	text-align:right;
} 
</style></head>
<body>
 <p>'.$html.' </p>
	<table>
		<tr>
			<td>'.$html.' </td>
		</tr>
	</table>
</body></html>
	');
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
	$dompdf -> stream("NEXAMPLE", array("Attachment" => false));
?>
