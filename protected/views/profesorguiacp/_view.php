<?php
/* @var $this ProfesorguiacpController */
/* @var $data Profesorguiacp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutProfGuiaCP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutProfGuiaCP), array('view', 'id'=>$data->RutProfGuiaCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->NombreProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CursoProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->CursoProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfesorJefeProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->ProfesorJefeProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->MailProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularProfGuiaCP')); ?>:</b>
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