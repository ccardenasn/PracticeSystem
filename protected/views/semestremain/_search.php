<?php
/* @var $this SemestremainController */
/* @var $model Semestremain */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodSemestre'); ?>
		<?php echo $form->textField($model,'CodSemestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreSemestre'); ?>
		<?php echo $form->textField($model,'NombreSemestre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->