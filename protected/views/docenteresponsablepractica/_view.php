<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $data Docenteresponsablepractica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutResponsable')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutResponsable), array('view', 'id'=>$data->RutResponsable)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->NombreResponsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->MailResponsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoResponsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->CelularResponsable); ?>
	<br />

</div>