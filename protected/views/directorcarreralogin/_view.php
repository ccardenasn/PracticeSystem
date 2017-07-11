<?php
/* @var $this DirectorcarreraloginController */
/* @var $data Directorcarreralogin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutDirector')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutDirector), array('view', 'id'=>$data->RutDirector)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreDirector')); ?>:</b>
	<?php echo CHtml::encode($data->NombreDirector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClaveDirector')); ?>:</b>
	<?php echo CHtml::encode($data->ClaveDirector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailDirector')); ?>:</b>
	<?php echo CHtml::encode($data->MailDirector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoDirector')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoDirector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularDirector')); ?>:</b>
	<?php echo CHtml::encode($data->CelularDirector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenDirector')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenDirector); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('EstadoDirector')); ?>:</b>
	<?php echo CHtml::encode($data->EstadoDirector); ?>
	<br />

	*/ ?>

</div>