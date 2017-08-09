<?php
/* @var $this SecretariacpController */
/* @var $data Secretariacp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutSecretariaCP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutSecretariaCP), array('view', 'id'=>$data->RutSecretariaCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreSecretariaCP')); ?>:</b>
	<?php echo CHtml::encode($data->NombreSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailSecretariaCP')); ?>:</b>
	<?php echo CHtml::encode($data->MailSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoSecretariaCP')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularSecretariaCP')); ?>:</b>
	<?php echo CHtml::encode($data->CelularSecretariaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroPractica_RBD')); ?>:</b>
	<?php echo CHtml::encode($data->centroPracticaRBD->NombreCentroPractica); ?>
	<br />

</div>