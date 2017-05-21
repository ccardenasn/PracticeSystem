<?php
/* @var $this UniversidadmainController */
/* @var $data Universidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreInstitucion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreInstitucion), array('view', 'id'=>$data->NombreInstitucion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sede')); ?>:</b>
	<?php echo CHtml::encode($data->Sede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Campus')); ?>:</b>
	<?php echo CHtml::encode($data->Campus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facultad')); ?>:</b>
	<?php echo CHtml::encode($data->Facultad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Region_codRegion')); ?>:</b>
	<?php echo CHtml::encode($data->regionCodRegion->NombreRegion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Provincia_codProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->provinciaCodProvincia->NombreProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_codCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadCodCiudad->NombreCiudad); ?>
	<br />


</div>