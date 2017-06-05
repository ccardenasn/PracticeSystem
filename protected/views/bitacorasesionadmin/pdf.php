<?php
include_once('centro.php');
include_once('connect.php');
include_once('forceutf/Encoding.php');

$sql = "select * from clasebitacorasesion where BitacoraSesion_CodBitacora = '".$model->CodBitacora."';";

$stmt = mysql_query($sql,$con);

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.mpdf60.mpdf');

date_default_timezone_set('America/Santiago');

$fecha = getdate();
$day = $fecha['mday'];
$month = $fecha['mon'];
$year = $fecha['year'];

$date = $day."/".$month."/".$year;

$classData=Clasebitacorasesion::model()->findAll('BitacoraSesion_CodBitacora=?',array($model->CodBitacora));

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

$html.="<h1 align='center'>Bitácora: Sesión Informada ".$model->planificacionClaseCodPlanificacion->SesionInformada."</h1><br>";

$html.="<h2 align='left'>Estudiante: ".$model->planificacionClaseCodPlanificacion->estudianteRutEstudiante->NombreEstudiante."</h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Fecha</strong></td>
    <td>".$model->planificacionClaseCodPlanificacion->Fecha."</td>
  </tr>
  <tr>
    <td><strong>Sesión Informada</strong></td>
    <td>".$model->planificacionClaseCodPlanificacion->SesionInformada."</td>
  </tr>
  <tr>
    <td><strong>Centro de Práctica</strong></td>
    <td>".$model->planificacionClaseCodPlanificacion->centroPracticaRBD->NombreCentroPractica."</td>
  </tr>
  <tr>
    <td width='50' colspan='2'><strong>¿Que Realicé?</strong></td>
  </tr>
  <tr>
    <td width='50' colspan='2'>".$model->ActividadesBitacora."</td>
  </tr>
  <tr>
    <td width='50' colspan='2'><strong>¿Que Aprendí?</strong></td>
  </tr>
  <tr>
    <td width='50' colspan='2'>".$model->AprendizajeBitacora."</td>
  </tr>
  <tr>
    <td width='50' colspan='2'><strong>¿Que Sentí?</strong></td>
  </tr>
  <tr>
    <td width='50' colspan='2'>".$model->SentirBitacora."</td>
  </tr>
  <tr>
    <td width='50' colspan='2'><strong>Otros Comentarios</strong></td>
  </tr>
  <tr>
    <td width='50' colspan='2'>".$model->OtroBitacora."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Clases</h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <th align='left'>Curso</th>
    <th align='left'>Hora</th>
    <th align='left'>Asignatura</th>
    <th align='left'>Profesor Guía</th>
    <th align='left'>Número de Alumnos</th>
  </tr>";

foreach($classData as $item):

$html.="<tr>
			<td>".$item->CursoClase."</td>
			<td>".$item->HoraClase."</td>
            <td>".$item->AsignaturaClase."</td>
            <td>".$item->ProfesorGuiaClase."</td>
            <td>".$item->NumeroAlumnosClase."</td>
  		</tr>";
endforeach;

$html.="</table>";

$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
//$mpdf->SetHTMLHeader($header);
$mpdf->SetHeader("".$date."|Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->SetFooter("Sistema de Gestión de Prácticas - Universidad Austral de Chile");
$mpdf->WriteHTML($html);
$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
