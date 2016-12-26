<?php
/* @var $this ClasebitacoraController */
/* @var $data Clasebitacora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodClaseBitacora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodClaseBitacora), array('view', 'id'=>$data->CodClaseBitacora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Curso')); ?>:</b>
	<?php echo CHtml::encode($data->Curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora')); ?>:</b>
	<?php echo CHtml::encode($data->Hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Asignatura')); ?>:</b>
	<?php echo CHtml::encode($data->Asignatura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfesorGuia')); ?>:</b>
	<?php echo CHtml::encode($data->ProfesorGuia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroAlumnos')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroAlumnos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bitacora_CodBitacora')); ?>:</b>
	<?php echo CHtml::encode($data->Bitacora_CodBitacora); ?>
	<br />


</div>