<?php
/* @var $this EstadisticasController */
/* @var $data Estadisticas */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('AnexoProtocolo')); ?>:</b>
	<?php echo CHtml::encode($data->AnexoProtocolo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dependencia')); ?>:</b>
	<?php echo CHtml::encode($data->Dependencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NivelEducacional')); ?>:</b>
	<?php echo CHtml::encode($data->NivelEducacional); ?>
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

	*/ ?>

</div>