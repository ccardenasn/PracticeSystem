<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/highcharts.js');
$js->registerScriptFile($base.'/graphProcess/yii-highcharts/highcharts/assets/modules/exporting.js');
$js->registerScriptFile($base.'/graphProcess/grafico_e/loadGraph_e.js');
?>
	
<select id="dynamic_data">
	<option value="0" selected>Select Data</option>
	<?php 
	include('connect.php');
	$sqlb = "select NombrePractica from configuracionpractica;";

$st = mysql_query($sqlb,$con);
	
	$i=0;
	while($rows = mysql_fetch_array($st))
	{
		echo'<option value="'.$i.'">'.$rows['NombrePractica'].'</option>';
		$i++;
	}
	?>
</select>

<div id="graphcontainer" style="width: 90%; float:left;"></div>

<table class="maintable" bgcolor="#F0F0F0">
</table>