<?php
/* @var $this CentropracticaController */
/* @var $data Centropractica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RBD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RBD), array('view', 'id'=>$data->RBD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCentroPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Vigencia Protocolo')); ?>:</b>
	<?php echo CHtml::encode($data->VigenciaProtocolo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Protocolo')); ?>:</b>
	<?php echo CHtml::encode($data->FechaProtocolo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Anexo Protocolo')); ?>:</b>
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