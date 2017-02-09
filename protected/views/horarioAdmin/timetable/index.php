<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/dependentdropdown.js');
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/conditioncells.js');
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/changecells.js');
$js->registerScriptFile($base.'/timetable/jsTimetableFunctions/functions.js');
$js->registerCssFile($base.'/timetable/cssTimetableStyles/styleTable.css');
$js->registerCssFile($base.'/timetable/cssTimetableStyles/styleForm.css');

echo '<script type="text/javascript">
	var rut = "'.$rutStudent.'"; 
</script>';

?>

<body onload="javascript:loadCreate();">
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
				include('tableForm.php');
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

</body>



