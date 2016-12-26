<?php
/* @var $this SecretariacpController */
/* @var $data Secretariacp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutSecretariaCP), array('view', 'id'=>$data->RutSecretariaCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->MailSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->CelularSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Centro de Practica')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenSecretaria')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenSecretariaCP); ?>
	<br />


</div>