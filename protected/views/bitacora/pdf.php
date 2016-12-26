<?php
include_once('centro.php');

$codplanificacion=$model->PlanificacionClase_CodPlanificacion;
$plandata=getPlanData($codplanificacion);

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');
$html='
<table id="yw0" class="detail-view2">
<tr class="principal">
<td colspan="2" align="center"><b>Datos de Bitacora</b></td>
<tr>
<tr class="odd">
<td> <b>Codigo Bitacora</b> </td>
<td> '.$model->CodBitacora.'</td>
</tr>
<tr class="even">
<td> <b>Fecha</b> </td>
<td> '.$model->Fecha.'</td>
</tr>
<tr class="even">
<td> <b>Numero de Sesion</b> </td>
<td> '.$plandata[0].'</td>
</tr>
<tr class="even">
<td> <b>Codigo de Planificacion</b> </td>
<td> '.$codplanificacion.'</td>
</tr>
<tr class="even">
<td> <b>Centro de Practica</b> </td>
<td> '.$plandata[1].'</td>
</tr>
<tr class="even">
<td> <b>¿Que Realize? (Actividades Realizadas)</b> </td>
<td> '.$model->ActividadesRealizadas.'</td>
</tr>
<tr class="even">
<td> <b>¿Que Aprendi? (Analisis Pedagogico)</b> </td>
<td> '.$model->Aprendizaje.'</td>
</tr>
<tr class="even">
<td> <b>¿Que Senti?</b> </td>
<td> '.$model->Sentir.'</td>
</tr>
<tr class="even">
<td> <b>Otros Comentarios</b> </td>
<td> '.$model->OtroComentario.'</td>
</tr>
</tr>
</tr>
</table>';
$html= utf8_encode($html); //se codifica para no tener problema con los acentos y las ñ.
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->WriteHTML($html);
$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
