<?php
/* @var $this CarreraController */
/* @var $data Carrera */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codCarrera), array('view', 'id'=>$data->codCarrera)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCarrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sede')); ?>:</b>
	<?php echo CHtml::encode($data->Sede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Region')); ?>:</b>
	<?php echo CHtml::encode($data->regionCodRegion->NombreRegion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Provincia')); ?>:</b>
	<?php echo CHtml::encode($data->provinciaCodProvincia->NombreProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadCodCiudad->NombreCiudad); ?>
	<br />


</div>