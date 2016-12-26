<?php
include_once('planificacion.php');
include_once('forceutf/Encoding.php');

$arrdata = datosplanificacion($model->Estudiante_RutEstudiante);

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');
$html='
<h1>Sesión Informada: '.$model->SesionInformada.'</h1>
<table id="yw0" class="detail-view2" width="100%" border="1" bordercolor="#0000FF" cellspacing="6" cellpadding="6">
<tr class="principal">
<tr>
<tr class="odd">
<td> <b>Rut Estudiante</b> </td>
<td> '.$model->Estudiante_RutEstudiante.'</td>
</tr>
<tr class="even">
<td> <b>Nombre Estudiante</b> </td>
<td> '.$model->estudianteRutEstudiante->NombreEstudiante.'</td>
</tr>
<tr class="even">
<td> <b>Centro de Práctica</b> </td>
<td> '.$model->centroPracticaRBD->NombreCentroPractica.'</td>
</tr>
<tr class="even">
<td> <b>Rut Profesor Guía</b> </td>
<td> '.$model->ProfesorGuiaCP_RutProfGuiaCP.'</td>
</tr>
<tr class="even">
<td> <b>Nombre Profesor Guía</b> </td>
<td> '.$model->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP.'</td>
</tr>
<tr class="even">
<td> <b>Curso</b> </td>
<td> '.$model->Curso.'</td>
</tr>
<tr class="even">
<td> <b>Nombre Práctica</b> </td>
<td> '.$arrdata[3].'</td>
</tr>
<tr class="even">
<td> <b>Fecha</b> </td>
<td> '.$model->Fecha.'</td>
</tr>
<tr class="even">
<td> <b>Sesión Informada</b> </td>
<td> '.$model->SesionInformada.'</td>
</tr>
<tr class="even">
<td> <b>Total de Sesiones</b> </td>
<td> '.$arrdata[5].'</td>
</tr>
<tr class="even">
<td> <b>Número de Horas</b> </td>
<td> '.$arrdata[6].'</td>
</tr>
<tr class="even">
<td> <b>Ejecutado </b> </td>
<td> '.$model->Ejecutado.'</td>
</tr>
<tr class="even">
<td> <b>Supervisado </b> </td>
<td> '.$model->Supervisado.'</td>
</tr>
<tr class="even">
<td width="50" colspan="2"> <b>Comentario</b> </td>
</tr>
<tr class="even">
<td width="50" colspan="2"> '.$model->ComentarioPlanificacion.'</td>
</tr>
</tr>
</tr>
</tr>
</table>';

$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->WriteHTML($html);
$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
