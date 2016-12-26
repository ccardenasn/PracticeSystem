<?php
/* @var $this DocentecoordinadorpracticasController */
/* @var $data Docentecoordinadorpracticas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutCoordinador), array('view', 'id'=>$data->RutCoordinador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave')); ?>:</b>
	<?php echo CHtml::encode($data->ClaveCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->MailCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->CelularCoordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Imagen')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenCoordinador); ?>
	<br />


</div>