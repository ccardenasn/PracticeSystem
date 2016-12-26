<?php
/* @var $this DocumentobitacoraController */
/* @var $data Documentobitacora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodDocumentoBitacora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodDocumentoBitacora), array('view', 'id'=>$data->CodDocumentoBitacora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocumentoWord')); ?>:</b>
	<?php echo CHtml::encode($data->DocumentoWord); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bitacorasesion_id')); ?>:</b>
	<?php echo CHtml::encode($data->bitacorasesion_id); ?>
	<br />


</div>