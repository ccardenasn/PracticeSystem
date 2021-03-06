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

<script>
var actionURL = '<?php echo Yii::app()->createUrl('horarioadmin/saveTimetable'); ?>';
</script>


<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
    <?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<body onload="javascript:loadCreate();">
    <div id='successTimeTable' class='flash-success' style="display:none">
        <p><strong>¡Operación realizada!</strong></p>
        <ul>
            <li>Haga click <?php echo CHtml::link("<strong>aquí</strong>",array('horarioadmin/index')); ?> para ir a la pagina principal de horario.</li>
            <li>Haga click <?php echo CHtml::link("<strong>aquí</strong>",array('horarioadmin/admin')); ?> para ir directamente a la sección de administración de horarios.</li>
        </ul>
    </div>
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
		<input type="button" name="btnSave" id="btnSave" value="Guardar" onclick="javascript:obtener();"  action="saveTable.php">
	</div>
</body>




