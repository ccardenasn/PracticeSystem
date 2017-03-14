<?php
/* @var $this SecretariacarreraController */
/* @var $data Secretariacarrera */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutSecretaria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutSecretaria), array('view', 'id'=>$data->RutSecretaria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreSecretaria')); ?>:</b>
	<?php echo CHtml::encode($data->NombreSecretaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailSecretaria')); ?>:</b>
	<?php echo CHtml::encode($data->MailSecretaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoSecretaria')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoSecretaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularSecretaria')); ?>:</b>
	<?php echo CHtml::encode($data->CelularSecretaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenSecretaria')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenSecretaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Carrera_codCarrera')); ?>:</b>
	<?php echo CHtml::encode($data->Carrera_codCarrera); ?>
	<br />


</div>