<?php
/* @var $this ProfesorguiacpController */
/* @var $data Profesorguiacp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutProfGuiaCP), array('view', 'id'=>$data->RutProfGuiaCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Curso')); ?>:</b>
	<?php echo CHtml::encode($data->CursoProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfesorJefe')); ?>:</b>
	<?php echo CHtml::encode($data->ProfesorJefeProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->MailProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->CelularProfGuiaCP); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroPractica_RBD')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenProfGuiaCP); ?>
	<br />

	*/ ?>

</div>