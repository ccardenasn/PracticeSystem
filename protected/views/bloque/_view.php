<?php
/* @var $this BloqueController */
/* @var $data Bloque */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodBloque')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodBloque), array('view', 'id'=>$data->CodBloque)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreBloque')); ?>:</b>
	<?php echo CHtml::encode($data->NombreBloque); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraInicio')); ?>:</b>
	<?php echo CHtml::encode($data->HoraInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraFin')); ?>:</b>
	<?php echo CHtml::encode($data->HoraFin); ?>
	<br />


</div>