<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodHorario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodHorario), array('view', 'id'=>$data->CodHorario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Asignatura')); ?>:</b>
	<?php echo CHtml::encode($data->Asignatura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora')); ?>:</b>
	<?php echo CHtml::encode($data->Hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dia')); ?>:</b>
	<?php echo CHtml::encode($data->Dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Posicion')); ?>:</b>
	<?php echo CHtml::encode($data->Posicion); ?>
	<br />


</div>