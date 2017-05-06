<?php

include_once('forceutf/Encoding.php');

$centroRBD = Yii::app()->request->getQuery('id');

$mainData=GraphData::model()->findAll('idcentro=?',array($centroRBD));

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');
$html.="Prueba de Gráfico <img src='images/myImage.png'>";

$html.="<table><thead><tr><th>Curso</th><th>Nombre de Práctica</th><th>Número de Estudiantes</th></tr></thead><tbody>";

foreach($mainData as $item):
$html.="<tr>
<td>".$item->nombrepractica."</td>
<td>".$item->numero."</td>
</tr>";
endforeach;

$html.="</tbody></table>";

//$html= utf8_encode($html); //se codifica para no tener problema con los acentos y las ñ.
$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->WriteHTML($html);
$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
