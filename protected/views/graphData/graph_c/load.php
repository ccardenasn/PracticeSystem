<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/Highcharts/code/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/html2canvas.js');
$js->registerScriptFile($base.'/graphProcess/saveChartFunctions.js');
$js->registerScriptFile($base.'/graphProcess/grafico_c/loadGraph_c.js');
?>

<script>
var actionURL = '<?php echo Yii::app()->createUrl('graphdata/exportImage'); ?>';
var actionText = '<?php echo Yii::app()->createUrl('graphdata/exportText'); ?>';
var actionPDF = '<?php echo Yii::app()->createUrl('graphdata/pdf'); ?>';
</script>

<div class="row">
<?php echo CHtml::label('<b>Seleccionar</b>','centerLabel');?>
</div>

<div class="row">
    <select id="dynamic_data">
        <?php
        $con = mysql_connect("localhost", "sigep", "s1g3p") or die("ERROR EN LA CONEXION");
        $db = mysql_select_db("sigep", $con) or die("ERROR AL CONECTAR A LA BD"); 
        
        include('ForceUTF/Encoding.php');
        
        $sqlb = "select RBD,NombreCentroPractica from centropractica inner join planificacionclase on centropractica.RBD = planificacionclase.CentroPractica_RBD inner join bitacorasesion on planificacionclase.CodPlanificacion = bitacorasesion.PlanificacionClase_CodPlanificacion inner join clasebitacorasesion on bitacorasesion.CodBitacora = clasebitacorasesion.BitacoraSesion_CodBitacora group by RBD";
        
        $st = mysql_query($sqlb,$con);
        
        while($rows = mysql_fetch_array($st)){
            echo'<option value="'.$rows['RBD'].'">'.Encoding::toUTF8($rows['NombreCentroPractica']).'</option>';
        }
        ?>
    </select>
    <input type="button" name="btnSaveChart" id="btnSaveChart" value="Crear PDF" onclick="javascript:saveChartHTML();" >
</div>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>