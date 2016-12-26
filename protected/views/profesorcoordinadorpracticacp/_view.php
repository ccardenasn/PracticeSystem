<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $data Profesorcoordinadorpracticacp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutProfCoordGuiaCp), array('view', 'id'=>$data->RutProfCoordGuiaCp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->MailProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->CelularProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Centro de Practica')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Imagen')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenProfCoordGuiaCP); ?>
	<br />


</div>