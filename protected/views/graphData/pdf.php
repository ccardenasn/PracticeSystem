<?php
include_once('forceutf/Encoding.php');
$directorio=Yii::getPathOfAlias("webroot")."/images/";
//Carga en la variable $texto todo el contenido de archivo.txt
//$texto = file_get_contents($directorio."descData.txt"); 

//Hace que el contenido de la variable $texto, convierta todos los 
//saltos de linea a etiquetas '<br />', para que en tu página se vean 
//efectivamente como saltos de linea
//$texto = nl2br($texto);

$fichero = "descData.txt";
$filas = file($directorio.$fichero);
$firstLine = $filas[count($filas)-3];
$secondLine = $filas[count($filas)-2];
$thirdLine = $filas[count($filas)-1]; 

$centroRBD = Yii::app()->request->getQuery('id');

$mainData=GraphData::model()->findAll('idcentro=?',array($centroRBD));

$centerName=Centropractica::model()->find('RBD=?',array($centroRBD));


//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');

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

$html.="<h1 align='center'>Estudiantes según tipo de práctica</h1><br>";

$html.="<h2>Descripción:</h2>";

$html.="<p>".$thirdLine."</p><br><br>";

$html.="<h2 align='center'>".$centerName->NombreCentroPractica."</h2>";

$html.="<img src='images/myImage.png'>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <th align='left'>".$firstLine."</th>
    <th align='left'>".$secondLine."</th> 
  </tr>";

foreach($mainData as $item):
$html.="<tr>
			<td>".$item->nombrepractica."</td>
			<td>".$item->numero."</td>
  		</tr>";
endforeach;

$html.="</table>";

//$html= utf8_encode($html); //se codifica para no tener problema con los acentos y las ñ.
$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->SetHeader("Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->SetFooter("Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->WriteHTML($html);

$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
