<?php
/* @var $this DependenciaController */
/* @var $data Dependencia */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreDependencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreDependencia), array('view', 'id'=>$data->CodDependencia)); ?>
	<br />

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('NombreDependencia')); ?>:</b>
	<?php //echo CHtml::encode($data->NombreDependencia); ?>
	<br />-->
</div>