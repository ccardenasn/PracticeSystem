<script>
var jvsHTML = $('#graphcontainer').html();	
</script>

<?php
$datatable="";

$datatable = "<script>
var jvsHTML = $('#graphcontainer').html();	
</script>";
//echo "datatable = ".$datatable;
?>


<?php





include_once('forceutf/Encoding.php');

//se referencia a la extensión de mPDF
$pdf = Yii::createComponent('application.extensions.MPDF60.mpdf');
$html=$datatable;

//$html= utf8_encode($html); //se codifica para no tener problema con los acentos y las ñ.
$html = Encoding::toUTF8($html);
$mpdf=new mPDF("");
$mpdf->SetHTMLHeader($header);
$mpdf->WriteHTML($html);
$mpdf->Output(""); //muestra en el navegador el archivo PDF creado
//$mpdf->Output('Ficha-USUARIO.pdf','D'); //crea un archivo PDF y lo descarga automaticamente
exit;
?>
