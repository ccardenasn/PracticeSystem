<?php
/* @var $this DirectorcpController */
/* @var $data Directorcp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutDirectorCP), array('view', 'id'=>$data->RutDirectorCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->MailDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->CelularDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Centro de Practica')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Imagen')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenDirectorCP); ?>
	<br />


</div>