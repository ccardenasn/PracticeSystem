<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $data Profesorcoordinadorpracticacp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutProfCoordGuiaCp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutProfCoordGuiaCp), array('view', 'id'=>$data->RutProfCoordGuiaCp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreProfCoordGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->NombreProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailProfCoordGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->MailProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoProfCoordGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularProfCoordGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->CelularProfCoordGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroPractica_RBD')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

</div>