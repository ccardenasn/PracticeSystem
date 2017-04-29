<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodDependencia'); ?>
		<?php echo $form->textField($model,'CodDependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreDependencia'); ?>
		<?php echo $form->textField($model,'NombreDependencia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->