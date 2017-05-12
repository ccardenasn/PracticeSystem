<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $data Docentecoordinadorpracticas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutCoordinador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutCoordinador), array('view', 'id'=>$data->RutCoordinador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCoordinador')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailCoordinador')); ?>:</b>
	<?php echo CHtml::encode($data->MailCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoCoordinador')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularCoordinador')); ?>:</b>
	<?php echo CHtml::encode($data->CelularCoordinador); ?>
	<br />

</div>