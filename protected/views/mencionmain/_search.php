<?php
/* @var $this MencionmainController */
/* @var $model Mencionmain */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodMencion'); ?>
		<?php echo $form->textField($model,'CodMencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreMencion'); ?>
		<?php echo $form->textField($model,'NombreMencion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->