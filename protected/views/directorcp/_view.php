<?php
/* @var $this DirectorcpController */
/* @var $data Directorcp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutDirectorCP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutDirectorCP), array('view', 'id'=>$data->RutDirectorCP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreDirectorCP')); ?>:</b>
	<?php echo CHtml::encode($data->NombreDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailDirectorCP')); ?>:</b>
	<?php echo CHtml::encode($data->MailDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoDirectorCP')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularDirectorCP')); ?>:</b>
	<?php echo CHtml::encode($data->CelularDirectorCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroPractica_RBD')); ?>:</b>
	<?php echo CHtml::encode($data->centroPracticaRBD->NombreCentroPractica); ?>
	<br />
	
</div>