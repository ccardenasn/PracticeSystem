<?php
/* @var $this JefeutpcpController */
/* @var $data Jefeutpcp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutJefeUTPCP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutJefeUTPCP), array('view', 'id'=>$data->RutJefeUTPCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreJefeUTPCP')); ?>:</b>
	<?php echo CHtml::encode($data->NombreJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailJefeUTPCP')); ?>:</b>
	<?php echo CHtml::encode($data->MailJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoJefeUTPCP')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularJefeUTPCP')); ?>:</b>
	<?php echo CHtml::encode($data->CelularJefeUTPCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroPractica_RBD')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />


</div>