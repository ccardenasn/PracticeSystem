<?php
/* @var $this GraphDataController */
/* @var $data GraphData */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrepractica')); ?>:</b>
	<?php echo CHtml::encode($data->nombrepractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcentro')); ?>:</b>
	<?php echo CHtml::encode($data->idcentro); ?>
	<br />


</div>