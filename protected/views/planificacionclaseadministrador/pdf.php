<?php
include_once('planificacion.php');
include_once('forceutf/Encoding.php');

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');

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

$html.="<h1 align='center'>Sesión Informada: ".$model->SesionInformada."</h1><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut Estudiante</strong></td>
    <td>".$model->Estudiante_RutEstudiante."</td>
  </tr>
  <tr>
    <td><strong>Nombre Estudiante</strong></td>
    <td>".$model->estudianteRutEstudiante->NombreEstudiante."</td>
  </tr>
  <tr>
    <td><strong>Centro de Práctica</strong></td>
    <td>".$model->centroPracticaRBD->NombreCentroPractica."</td>
  </tr>
  <tr>
    <td><strong>Rut Profesor Guía CP</strong></td>
    <td>".$model->ProfesorGuiaCP_RutProfGuiaCP."</td>
  </tr>
  <tr>
    <td><strong>Nombre Profesor Guía CP</strong></td>
    <td>".$model->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP."</td>
  </tr>
  <tr>
    <td><strong>Curso</strong></td>
    <td>".$model->Curso."</td>
  </tr>
  <tr>
    <td><strong>Práctica</strong></td>
    <td>".$model->configuracionPracticaNombrePractica->NombrePractica."</td>
  </tr>
  <tr>
    <td><strong>Fecha</strong></td>
    <td>".$model->Fecha."</td>
  </tr>
  <tr>
    <td><strong>Sesion Informada</strong></td>
    <td>".$model->SesionInformada."</td>
  </tr>
  <tr>
    <td><strong>Fecha</strong></td>
    <td>".$model->Fecha."</td>
  </tr>
  <tr>
    <td><strong>Total de Sesiones</strong></td>
    <td>".$model->configuracionPracticaNombrePractica->NumeroSesionesPractica."</td>
  </tr>
  <tr>
    <td><strong>Número de Horas</strong></td>
    <td>".$model->configuracionPracticaNombrePractica->NumeroHorasPractica."</td>
  </tr>
  <tr>
    <td><strong>Total de Sesiones</strong></td>
    <td>".$model->configuracionPracticaNombrePractica->NumeroSesionesPractica."</td>
  </tr>
  <tr>
    <td><strong>Ejecutado</strong></td>
    <td>".$model->Ejecutado."</td>
  </tr>
  <tr>
    <td><strong>Supervisado</strong></td>
    <td>".$model->Supervisado."</td>
  </tr>
  <tr>
    <td width='50' colspan='2'><strong>Comentario</strong></td>
  </tr>
  <tr>
    <td width='50' colspan='2'> ".$model->ComentarioPlanificacion."</td>
  </tr>
  </table>";

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
