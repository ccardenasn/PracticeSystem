<?php
include_once('forceutf/Encoding.php');
$directorio=Yii::getPathOfAlias("webroot")."/graphProcess/graphInfo/";

date_default_timezone_set('America/Santiago');

$fecha = getdate();
$day = $fecha['mday'];
$month = $fecha['mon'];
$year = $fecha['year'];

$date = $day."/".$month."/".$year;

$fichero = "descData.txt";
$filas = file($directorio.$fichero);
$title = $filas[0];
$firstLine = $filas[1];
$secondLine = $filas[2];
$thirdLine = $filas[3]; 

$centroRBD = Yii::app()->request->getQuery('id');

$mainData=Graphdata::model()->findAll('idcentro=?',array($centroRBD));

$centerName=Centropractica::model()->find('RBD=?',array($centroRBD));

$titleTheme = "";

if($centerName != null){
	$titleTheme = $centerName->NombreCentroPractica;
}else{
	$titleTheme = trim($firstLine).'s';
}



//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.mpdf60.mpdf');

$html.="<bookmark content='start'/><div>Pedagogía en Educación Básica</div><br>";

$html.="<style>
body {font-family: sans-serif;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
	
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
</style>";

$html.="<h1 align='center'>".$title."</h1><br>";

$html.="<h2>Descripción:</h2>";

$html.="<p>".$thirdLine."</p><br><br>";

$html.="<h2 align='center'>".$titleTheme."</h2>";

$html.="<img src='graphProcess/graphInfo/myImage.png'>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <th align='left'>".$firstLine."</th>
    <th align='left'>".$secondLine."</th> 
  </tr>";

$totalVal = 0;

foreach($mainData as $item):

$totalVal = $totalVal + ($item->numero);

$html.="<tr>
			<td>".$item->nombrepractica."</td>
			<td>".$item->numero."</td>
  		</tr>";
endforeach;

$html.= "<tr>
			<td>Total</td>
			<td>".$totalVal."</td>
  		</tr>";

$html.="</table>";

//$html= utf8_encode($html); //se codifica para no tener problema con los acentos y las ñ.
$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->SetHeader("".$date."|Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->SetFooter("Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->WriteHTML($html);

$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
