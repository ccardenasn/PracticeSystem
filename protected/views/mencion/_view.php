<?php
/* @var $this MencionController */
/* @var $data Mencion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreMencion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreMencion), array('view', 'id'=>$data->NombreMencion)); ?>
	<br />


</div>