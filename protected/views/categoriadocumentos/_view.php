<?php
/* @var $this CategoriadocumentosController */
/* @var $data Categoriadocumentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodCategoriaDocumentos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodCategoriaDocumentos), array('view', 'id'=>$data->CodCategoriaDocumentos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCategoriaDocumentos')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCategoriaDocumentos); ?>
	<br />


</div>