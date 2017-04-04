<?php
/* @var $this BitacorasesionController */
/* @var $data Bitacorasesion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividades')); ?>:</b>
	<?php echo CHtml::encode($data->actividades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aprendizaje')); ?>:</b>
	<?php echo CHtml::encode($data->aprendizaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sentir')); ?>:</b>
	<?php echo CHtml::encode($data->sentir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otro')); ?>:</b>
	<?php echo CHtml::encode($data->otro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PlanificacionClase_CodPlanificacion')); ?>:</b>
	<?php echo CHtml::encode($data->PlanificacionClase_CodPlanificacion); ?>
	<br />


</div>