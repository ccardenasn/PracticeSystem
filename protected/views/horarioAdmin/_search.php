<?php
/* @var $this HorarioAdminController */
/* @var $model HorarioAdmin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodHorario'); ?>
		<?php echo $form->textField($model,'CodHorario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estudiante_RutEstudiante'); ?>
		<?php echo $form->textField($model,'Estudiante_RutEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tablaHorario'); ?>
		<?php echo $form->textArea($model,'tablaHorario',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->