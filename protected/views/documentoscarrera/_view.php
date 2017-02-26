<?php
/* @var $this DocumentoscarreraController */
/* @var $data Documentoscarrera */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreDocumentoCarrera')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreDocumentoCarrera), array('view', 'id'=>$data->NombreDocumentoCarrera)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArchivoDocumentoCarrera')); ?>:</b>
	<?php echo CHtml::encode($data->ArchivoDocumentoCarrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoriaDocumentos_CodCategoriaDocumentos')); ?>:</b>
	<?php echo CHtml::encode($data->CategoriaDocumentos_CodCategoriaDocumentos); ?>
	<br />


</div>