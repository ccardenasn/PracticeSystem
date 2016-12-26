<?php
/* @var $this JefeutpcpController */
/* @var $data Jefeutpcp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutJefeUTPCP), array('view', 'id'=>$data->RutJefeUTPCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->MailJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->CelularJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Centro de Practica')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Imagen')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenJefeUTPCP); ?>
	<br />


</div>