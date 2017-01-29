<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/dependentdropdown.js');
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/conditioncells.js');
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/changecells.js');
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/functions.js');
$js->registerCssFile($base.'/timetable/cssTimetableStyles/styleTable.css');
$js->registerCssFile($base.'/timetable/cssTimetableStyles/styleForm.css');
?>

<label id="lblRut"><?php echo $rutStudent; ?></label><br>

<?php
include_once("connect.php");

$qr = "select tablaHorario from horario where Estudiante_RutEstudiante = '".$rutStudent."';";

$aa =mysql_query($qr,$con);
$bb = mysql_result($aa,0);
mysql_close($con);
?>

<table id="mainTable" border="2px">
	<tr>
		<th>
			<div id="block_div">
				<?php
				include('blockTable.php');
				?>
			</div>
		</th>
		<th>
			<div id="table_div">
				<?php
				echo $bb;
				?>
			</div>
		</th>
	</tr>
</table>

<div id="form_div" style="display:none;">
	<?php
	include('subjectForm.php');
	?>
</div>

<div id=btnSave_div>
	<input type="button" name="btnSave" id="btnSave" value="Guardar" onclick="javascript:obtener();"  action="saveTable.php">
</div>