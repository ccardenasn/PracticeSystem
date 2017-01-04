<?php
/* @var $this SemestreController */
/* @var $data Semestre */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodSemestre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodSemestre), array('view', 'id'=>$data->CodSemestre)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreSemestre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreSemestre); ?>
	<br />


</div>