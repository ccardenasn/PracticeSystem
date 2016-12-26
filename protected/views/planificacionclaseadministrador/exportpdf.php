<?php
include_once('forceutf/Encoding.php');

$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');
$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
//creamos las cabeceras
$html.='
<h1>Lista de Planificaciones</h1>
<h2>Total Resultados: '.$contador.'</h2>
<table align="center"><tr>
</tr></table>
<table class="detail-view2" repeat_header="1" width="100%" border="1" bordercolor="#0000FF" cellspacing="8" cellpadding="8">
<tr class="principal">
<td><b>Rut Estudiante</b></td>
<td><b>Práctica</b></td>
<td><b>Centro de Práctica</b></td>
<td><b>Profesor Guía</b></td>
<td><b>Curso</b></td>
<td><b>Ejecutado</b></td>
<td class="principal" width="45%"><b>Supervisado</b></td>
</tr>';
$i=0;
$val=count($dataProvider);
//dentro del ciclo vamos insertando los datos obtenidos
while($i<$val){
$html.='
<tr class="odd">
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["Estudiante_RutEstudiante"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["ConfiguracionPractica_NombrePractica"].'</td>
<td class="odd" width="10%">&nbsp;'.$dataProvider[$i]["centroPracticaRBD"]["NombreCentroPractica"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["profesorGuiaCPRutProfGuiaCP"]["NombreProfGuiaCP"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["Curso"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["Ejecutado"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["Supervisado"].'</td>';
$html.='</tr>'; $i++;
}
$html.='</table>';
$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->WriteHTML($html);
$mpdf->Output("");
exit; 
?>