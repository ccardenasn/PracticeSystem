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
?>

<body onload="javascript:loadCreate();">
    <div id='successTimeTable' class='flash-success' style="display:none">
        <p><strong>¡Operación realizada!</strong></p>
        <ul>
            <li>Para editar un horario debe ir a la pagina principal de horario y hacer clic en <strong>"Editar Horario"</strong>.</li>
            <li>Haga click <?php echo CHtml::link("<strong>aquí</strong>",array('horario/index')); ?> para ir a la pagina principal de horario.</li>
            <li>Haga click <?php echo CHtml::link("<strong>aquí</strong>",array('horario/updateHorario')); ?> para ir directamente a la sección de edición de horario.</li>
        </ul>
    </div>
    
    
    <div id="table_div" style="display:">
		<?php
		include('tableForm.php');
		?>
	</div>
	
	<div id="form_div" style="display:none;">
		<?php
		include('subjectForm.php');
		?>
	</div>
	
	<div id=btnSave_div style="display:">
		<input type="button" name="btnSave" id="btnSave" value="Guardar" onclick="javascript:obtener();">
	</div>
</body>




