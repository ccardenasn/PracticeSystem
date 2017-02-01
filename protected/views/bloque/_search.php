<?php
/* @var $this BloqueController */
/* @var $model Bloque */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodBloque'); ?>
		<?php echo $form->textField($model,'CodBloque'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreBloque'); ?>
		<?php echo $form->textField($model,'NombreBloque',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoraInicio'); ?>
		<?php echo $form->textField($model,'HoraInicio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoraFin'); ?>
		<?php echo $form->textField($model,'HoraFin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->