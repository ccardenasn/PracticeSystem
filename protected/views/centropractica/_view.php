<?php
/* @var $this CentropracticaController */
/* @var $data Centropractica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RBD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RBD), array('view', 'id'=>$data->RBD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCentroPractica')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCentroPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VigenciaProtocolo')); ?>:</b>
	<?php echo CHtml::encode($data->VigenciaProtocolo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaProtocolo')); ?>:</b>
	<?php echo CHtml::encode($data->FechaProtocolo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dependencia_CodDependencia')); ?>:</b>
	<?php echo CHtml::encode($data->dependenciaCodDependencia->NombreDependencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NivelEducacional_CodNivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivelEducacionalCodNivel->NombreNivel); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Area')); ?>:</b>
	<?php echo CHtml::encode($data->Area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Region_codRegion')); ?>:</b>
	<?php echo CHtml::encode($data->Region_codRegion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Provincia_codProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->Provincia_codProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_codCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad_codCiudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Calle')); ?>:</b>
	<?php echo CHtml::encode($data->Calle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenCentroPractica')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenCentroPractica); ?>
	<br />

	*/ ?>

</div>