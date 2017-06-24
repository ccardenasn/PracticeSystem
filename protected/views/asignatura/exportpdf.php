<?php
include_once('forceutf/Encoding.php');

$pdf = Yii::createComponent('application.extensions.mpdf60.mpdf');
$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
//creamos las cabeceras

date_default_timezone_set('America/Santiago');

$fecha = getdate();
$day = $fecha['mday'];
$month = $fecha['mon'];
$year = $fecha['year'];

$date = $day."/".$month."/".$year;

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

$html.="<h1 align='center'>Asignaturas</h1><br>";
$html.="<h2>Total Resultados: ".$contador."</h2>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <th align='left'>Asignatura</th>
    <th align='left'>Semestre</th>
  </tr>";

$i=0;
$val=count($dataProvider);
//dentro del ciclo vamos insertando los datos obtenidos
while($i<$val){
	$html.="<tr>
			<td>".$dataProvider[$i]["NombreAsignatura"]."</td>
            <td>".$dataProvider[$i]["semestreCodSemestre"]["NombreSemestre"]."</td>
  		</tr>";
	
	$i++;
}

$html.='</table>';
$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->SetHeader("".$date."|Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->SetFooter("Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->WriteHTML($html);
$mpdf->Output("");
exit; 
?>