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

$secretariaData=Secretariacp::model()->find('CentroPractica_RBD=?',array($model->RBD));
$directorData=Directorcp::model()->find('CentroPractica_RBD=?',array($model->RBD));
$jefeutpData=Jefeutpcp::model()->find('CentroPractica_RBD=?',array($model->RBD));
$profesorcoordinadorData=Profesorcoordinadorpracticacp::model()->find('CentroPractica_RBD=?',array($model->RBD));
$profesorguiaData=Profesorguiacp::model()->findAll('CentroPractica_RBD=?',array($model->RBD));

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

$html.="<h1 align='center'>Centro de Práctica: ".$model->NombreCentroPractica."</h1><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>RBD</strong></td>
    <td>".$model->RBD."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$model->NombreCentroPractica."</td>
  </tr>
  <tr>
    <td><strong>Vigencia Protocolo</strong></td>
    <td>".$model->VigenciaProtocolo."</td>
  </tr>
  <tr>
    <td><strong>Fecha Protocolo</strong></td>
    <td>".$model->FechaProtocolo."</td>
  </tr>
  <tr>
    <td><strong>Dependencia</strong></td>
    <td>".$model->dependenciaCodDependencia->NombreDependencia."</td>
  </tr>
  <tr>
    <td><strong>Nivel Educacional</strong></td>
    <td>".$model->nivelEducacionalCodNivel->NombreNivel."</td>
  </tr>
  <tr>
    <td><strong>Área</strong></td>
    <td>".$model->Area."</td>
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
  <tr>
    <td><strong>Calle</strong></td>
    <td>".$model->Calle."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Secretaria CP: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut</strong></td>
    <td>".$secretariaData->RutSecretariaCP."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$secretariaData->NombreSecretariaCP."</td>
  </tr>
  <tr>
    <td><strong>Correo</strong></td>
    <td>".$secretariaData->MailSecretariaCP."</td>
  </tr>
  <tr>
    <td><strong>Teléfono</strong></td>
    <td>".$secretariaData->TelefonoSecretariaCP."</td>
  </tr>
  <tr>
    <td><strong>Celular</strong></td>
    <td>".$secretariaData->CelularSecretariaCP."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Director CP: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut</strong></td>
    <td>".$directorData->RutDirectorCP."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$directorData->NombreDirectorCP."</td>
  </tr>
  <tr>
    <td><strong>Correo</strong></td>
    <td>".$directorData->MailDirectorCP."</td>
  </tr>
  <tr>
    <td><strong>Teléfono</strong></td>
    <td>".$directorData->TelefonoDirectorCP."</td>
  </tr>
  <tr>
    <td><strong>Celular</strong></td>
    <td>".$directorData->CelularDirectorCP."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Jefe UTP CP: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut</strong></td>
    <td>".$jefeutpData->RutJefeUTPCP."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$jefeutpData->NombreJefeUTPCP."</td>
  </tr>
  <tr>
    <td><strong>Correo</strong></td>
    <td>".$jefeutpData->MailJefeUTPCP."</td>
  </tr>
  <tr>
    <td><strong>Teléfono</strong></td>
    <td>".$jefeutpData->TelefonoJefeUTPCP."</td>
  </tr>
  <tr>
    <td><strong>Celular</strong></td>
    <td>".$jefeutpData->CelularJefeUTPCP."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Profesor Coordinador de Prácticas CP: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <td><strong>Rut</strong></td>
    <td>".$profesorcoordinadorData->RutProfCoordGuiaCp."</td>
  </tr>
  <tr>
    <td><strong>Nombre</strong></td>
    <td>".$profesorcoordinadorData->NombreProfCoordGuiaCP."</td>
  </tr>
  <tr>
    <td><strong>Correo</strong></td>
    <td>".$profesorcoordinadorData->MailProfCoordGuiaCP."</td>
  </tr>
  <tr>
    <td><strong>Teléfono</strong></td>
    <td>".$profesorcoordinadorData->TelefonoProfCoordGuiaCP."</td>
  </tr>
  <tr>
    <td><strong>Celular</strong></td>
    <td>".$profesorcoordinadorData->CelularProfCoordGuiaCP."</td>
  </tr>
  </table><br>";

$html.="<h2 align='left'>Profesor Guía CP: </h2><br>";

$html.="<table style='width:100%' border=1 class='table-responsive'>
  <tr>
    <th align='left'>Rut</th>
    <th align='left'>Nombre</th>
    <th align='left'>Correo</th>
    <th align='left'>Teléfono</th>
    <th align='left'>Celular</th>
  </tr>";

foreach($profesorguiaData as $item):

$html.="<tr>
			<td>".$item->RutProfGuiaCP."</td>
			<td>".$item->NombreProfGuiaCP."</td>
            <td>".$item->MailProfGuiaCP."</td>
            <td>".$item->TelefonoProfGuiaCP."</td>
            <td>".$item->CelularProfGuiaCP."</td>
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
