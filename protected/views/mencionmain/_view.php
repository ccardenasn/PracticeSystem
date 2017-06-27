<?php
/* @var $this MencionmainController */
/* @var $data Mencionmain */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodMencion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodMencion), array('view', 'id'=>$data->CodMencion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreMencion')); ?>:</b>
	<?php echo CHtml::encode($data->NombreMencion); ?>
	<br />


</div>