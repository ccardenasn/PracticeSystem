<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodHorario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodHorario), array('view', 'id'=>$data->CodHorario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estudiante_RutEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->Estudiante_RutEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tablaHorario')); ?>:</b>
	<?php echo CHtml::encode($data->tablaHorario); ?>
	<br />


</div>