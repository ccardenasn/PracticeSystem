<?php
/* @var $this BitacorasesionresponsableController */
/* @var $data Bitacorasesionresponsable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodBitacora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodBitacora), array('view', 'id'=>$data->CodBitacora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActividadesBitacora')); ?>:</b>
	<?php echo CHtml::encode($data->ActividadesBitacora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AprendizajeBitacora')); ?>:</b>
	<?php echo CHtml::encode($data->AprendizajeBitacora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SentirBitacora')); ?>:</b>
	<?php echo CHtml::encode($data->SentirBitacora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OtroBitacora')); ?>:</b>
	<?php echo CHtml::encode($data->OtroBitacora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocumentoBitacora')); ?>:</b>
	<?php echo CHtml::encode($data->DocumentoBitacora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PlanificacionClase_CodPlanificacion')); ?>:</b>
	<?php echo CHtml::encode($data->PlanificacionClase_CodPlanificacion); ?>
	<br />


</div>