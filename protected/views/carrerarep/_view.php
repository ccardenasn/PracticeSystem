<?php
/* @var $this CarrerarepController */
/* @var $data Carrerarep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codCarrera')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codCarrera), array('view', 'id'=>$data->codCarrera)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCarrera')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCarrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SemestresCarrera')); ?>:</b>
	<?php echo CHtml::encode($data->SemestresCarrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Universidad_CodInstitucion')); ?>:</b>
	<?php echo CHtml::encode($data->Universidad_CodInstitucion); ?>
	<br />


</div>