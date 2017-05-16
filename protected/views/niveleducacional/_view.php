<?php
/* @var $this NiveleducacionalController */
/* @var $data Niveleducacional */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nivel Educacional')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreNivel), array('view', 'id'=>$data->CodNivel)); ?>
	<br />

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('NombreNivel')); ?>:</b>
	<?php //echo CHtml::encode($data->NombreNivel); ?>
	<br />-->


</div>