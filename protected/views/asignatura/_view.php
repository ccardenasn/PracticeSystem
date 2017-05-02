<?php
/* @var $this AsignaturaController */
/* @var $data Asignatura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreAsignatura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreAsignatura), array('view', 'id'=>$data->NombreAsignatura)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Semestre_CodSemestre')); ?>:</b>
	<?php echo CHtml::encode($data->semestreCodSemestre->NombreSemestre); ?>
	<br />


</div>