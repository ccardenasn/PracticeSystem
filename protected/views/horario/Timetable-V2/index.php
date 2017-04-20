<?php

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/Timetable-V2/jsTimetableFunctions/dependentdropdown.js');
$js->registerScriptFile($base.'/Timetable-V2/jsTimetableFunctions/conditioncells.js');
$js->registerScriptFile($base.'/Timetable-V2/jsTimetableFunctions/changecells.js');
$js->registerScriptFile($base.'/Timetable-V2/jsTimetableFunctions/functions.js');
$js->registerCssFile($base.'/Timetable-V2/cssTimetableStyles/styleTable.css');
$js->registerCssFile($base.'/Timetable-V2/cssTimetableStyles/styleForm.css');

echo '<script type="text/javascript">
	var rut = "'.$rutStudent.'"; 
</script>';

$nextPage = Yii::app()->createUrl('horario/successTimeTable');

echo '<script type="text/javascript">
	var redirectPage = "'.$nextPage.'"; 
</script>';

?>

<body onload="javascript:loadCreate();">
	<div id="table_div">
		<?php
		include('tableForm.php');
		?>
	</div>
	
	<div id="form_div" style="display:none;">
		<?php
		include('subjectForm.php');
		?>
	</div>
	
	<div id=btnSave_div>
		<input type="button" name="btnSave" id="btnSave" value="Guardar" onclick="javascript:obtener();">
	</div>
</body>




