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

$carreraData=Carrera::model()->find('Universidad_NombreInstitucion=?',array($model->NombreInstitucion));

$query = "select RutDirector from directorcarrera;";
$rutDirector=Yii::app()->db->createCommand($query)->queryScalar();
$directorData=Directorcarrera::model()->find('RutDirector=?',array($rutDirector));
$secretariaData=Secretariacarrera::model()->find('Carrera_codCarrera=?',array($carreraData->codCarrera));

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

$html.="<h1 align='center'>Institución: ".$model->NombreInstitucion."</h1><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Nombre Institución</strong></td>
    <td>".$model->NombreInstitucion."</td>
  </tr>
  <tr>
    <td><strong>Sede</strong></td>
    <td>".$model->Sede."</td>
  </tr>
  <tr>
    <td><strong>Campus</strong></td>
    <td>".$model->Campus."</td>
  </tr>
  <tr>
    <td><strong>Facultad</strong></td>
    <td>".$model->Facultad."</td>
  </tr>
  <tr>
    <td><strong>Región</strong></td>
    <td>".$model->regionCodRegion->NombreRegion."</td>
  </tr>
  <tr>
    <td><strong>Provincia</strong></td>
    <td>".$model->provinciaCodProvincia->NombreProvincia."</td>
  </tr>
  <tr>
    <td><strong>Ciudad</strong></td>
    <td>".$model->ciudadCodCiudad->NombreCiudad."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Carrera: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Código de Carrera</strong></td>
    <td>".$carreraData->codCarrera."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$carreraData->NombreCarrera."</td>
  </tr>
  <tr>
    <td><strong>Semestres</strong></td>
    <td>".$carreraData->SemestresCarrera."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Director: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut</strong></td>
    <td>".$directorData->RutDirector."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$directorData->NombreDirector."</td>
  </tr>
  <tr>
    <td><strong>Correo</strong></td>
    <td>".$directorData->MailDirector."</td>
  </tr>
  <tr>
    <td><strong>Teléfono</strong></td>
    <td>".$directorData->TelefonoDirector."</td>
  </tr>
  <tr>
    <td><strong>Celular</strong></td>
    <td>".$directorData->CelularDirector."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Secretaria: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut</strong></td>
    <td>".$secretariaData->RutSecretaria."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$secretariaData->NombreSecretaria."</td>
  </tr>
  <tr>
    <td><strong>Correo</strong></td>
    <td>".$secretariaData->MailSecretaria."</td>
  </tr>
  <tr>
    <td><strong>Teléfono</strong></td>
    <td>".$secretariaData->TelefonoSecretaria."</td>
  </tr>
  <tr>
    <td><strong>Celular</strong></td>
    <td>".$secretariaData->CelularSecretaria."</td>
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
