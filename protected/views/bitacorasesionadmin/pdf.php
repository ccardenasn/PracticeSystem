<?php
include_once('centro.php');
include_once('connect.php');
include_once('forceutf/Encoding.php');

$codplanificacion=$model->PlanificacionClase_CodPlanificacion;
$plandata=getPlanData($codplanificacion);

$sql = "select * from clasebitacorasesion where bitacorasesion_id = '".$model->id."';";

$stmt = mysql_query($sql,$con);

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');
$html.='<h1>Datos de Bitácora </h1>
<h2>Estudiante: '.$plandata[3].'</h2>
<table id="yw0" class="detail-view2" width="100%" border="1" bordercolor="#0000FF" cellspacing="6" cellpadding="6">
<tr class="principal">
<tr>
<tr class="even">
<td> <b>Fecha</b> </td>
<td> '.$model->fecha.'</td>
</tr>
<tr class="even">
<td> <b>Número de Sesión</b> </td>
<td> '.$plandata[0].'</td>
</tr>
<tr class="even">
<td> <b>Código de Planificación</b> </td>
<td> '.$codplanificacion.'</td>
</tr>
<tr class="even">
<td> <b>Centro de Práctica</b> </td>
<td> '.$plandata[1].'</td>
</tr>
<tr class="even">
<td width="50" colspan="2"> <b>¿Que Realicé? (Actividades Realizadas)</b> </td>
</tr>
<tr class="even">
<td width="50" colspan="2"> '.$model->actividades.'</td>
</tr>
<tr class="even">
<td width="50" colspan="2"> <b>¿Que Aprendí? (Analisis Pedagogico)</b> </td>
</tr>
<tr class="even">
<td width="50" colspan="2"> '.$model->aprendizaje.'</td>
</tr>
<tr class="even">
<td  width="50" colspan="2"> <b>¿Que Sentí?</b> </td>
</tr>
<tr class="even">
<td width="50" colspan="2"> '.$model->sentir.'</td>
</tr>
<tr class="even">
<td width="50" colspan="2"> <b>Otros Comentarios</b> </td>
</tr>
<tr class="even">
<td width="50" colspan="2"> '.$model->otro.'</td>
</tr>
</tr>
</tr>
</tr>
</table><br>';

$html.='<h2>Clases </h2><table width="100%" border="1" bordercolor="#0000FF" cellspacing="6" cellpadding="6">
	<thead>
		<tr>
			<th>Curso</th>
			<th>Hora</th>
			<th>Asignatura</th>
			<th>Profesor Guía</th>
			<th>Número de Alumnos</th>
		</tr>
	</thead>
	<tbody>';


while($rs=mysql_fetch_array($stmt)) 
{ 
    $html.= "<tr>" 
           ."<td>".$rs['curso']."</td>" 
           ."<td>".$rs['hora']."</td>" 
           ."<td>".$rs['asignatura']."</td>" 
           ."<td>".$rs['profesorguia']."</td>" 
           ."<td>".$rs['numeroalumnos']."</td>" 
           ."</tr>"; 
 }
$html.='</tbody>
</table>';

//$html= utf8_encode($html); //se codifica para no tener problema con los acentos y las ñ.
$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->WriteHTML($html);
$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
