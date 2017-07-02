<?php
/* @var $this UniversidadrepController */
/* @var $data Universidadrep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodInstitucion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodInstitucion), array('view', 'id'=>$data->CodInstitucion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreInstitucion')); ?>:</b>
	<?php echo CHtml::encode($data->NombreInstitucion); ?>
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
	<?php echo CHtml::encode($data->Region_codRegion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Provincia_codProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->Provincia_codProvincia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_codCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad_codCiudad); ?>
	<br />

	*/ ?>

</div>