<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $data Docentesupervisorpractica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutSupervisor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutSupervisor), array('view', 'id'=>$data->RutSupervisor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreSupervisor')); ?>:</b>
	<?php echo CHtml::encode($data->NombreSupervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClaveSupervisor')); ?>:</b>
	<?php echo CHtml::encode($data->ClaveSupervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailSupervisor')); ?>:</b>
	<?php echo CHtml::encode($data->MailSupervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoSupervisor')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoSupervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularSupervisor')); ?>:</b>
	<?php echo CHtml::encode($data->CelularSupervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenSupervisor')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenSupervisor); ?>
	<br />


</div>