<?php
include_once('forceutf/Encoding.php');

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.mpdf60.mpdf');

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

$html.="<h1 align='center'>Estudiante: ".$model->NombreEstudiante."</h1><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut</strong></td>
    <td>".$model->RutEstudiante."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$model->NombreEstudiante."</td>
  </tr>
  <tr>
    <td><strong>Año de Incorporación</strong></td>
    <td>".$model->FechaIncorporacion."</td>
  </tr>
  <tr>
    <td><strong>Mención</strong></td>
    <td>".$model->mencionCodMencion->NombreMencion."</td>
  </tr>
  <tr>
    <td><strong>Correo</strong></td>
    <td>".$model->MailEstudiante."</td>
  </tr>
  <tr>
    <td><strong>Teléfono</strong></td>
    <td>".$model->TelefonoEstudiante."</td>
  </tr>
  <tr>
    <td><strong>Celular</strong></td>
    <td>".$model->CelularEstudiante."</td>
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
    <td><strong>Práctica</strong></td>
    <td>".$model->ConfiguracionPractica_NombrePractica."</td>
  </tr>
  <tr>
    <td><strong>Nombre Profesor Guía CP</strong></td>
    <td>".$model->centroPracticaRBD->NombreCentroPractica."</td>
  </tr>
  <tr>
    <td><strong>Situacion Final</strong></td>
    <td>".$model->SituacionFinalEstudiante."</td>
  </tr>
  <tr>
    <td width='50' colspan='2'><strong>Observación</strong></td>
  </tr>
  <tr>
    <td width='50' colspan='2'>".$model->ObservacionEstudiante."</td>
  </tr>
  </table><br>";

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
