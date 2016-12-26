<?php
/* @var $this BitacoraController */
/* @var $data Bitacora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodBitacora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodBitacora), array('view', 'id'=>$data->CodBitacora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActividadesRealizadas')); ?>:</b>
	<?php echo CHtml::encode($data->ActividadesRealizadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aprendizaje')); ?>:</b>
	<?php echo CHtml::encode($data->Aprendizaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sentir')); ?>:</b>
	<?php echo CHtml::encode($data->Sentir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OtroComentario')); ?>:</b>
	<?php echo CHtml::encode($data->OtroComentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocumentoWord')); ?>:</b>
	<?php echo CHtml::encode($data->DocumentoWord); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PlanificacionClase_CodPlanificacion')); ?>:</b>
	<?php echo CHtml::encode($data->PlanificacionClase_CodPlanificacion); ?>
	<br />

	*/ ?>

</div>