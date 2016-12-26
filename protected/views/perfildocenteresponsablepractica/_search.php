<?php
/* @var $this DocenteresponsablepracticaController */
/* @var $model Docenteresponsablepractica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutResponsable'); ?>
		<?php echo $form->textField($model,'RutResponsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreResponsable'); ?>
		<?php echo $form->textField($model,'NombreResponsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClaveResponsable'); ?>
		<?php echo $form->textField($model,'ClaveResponsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailResponsable'); ?>
		<?php echo $form->textField($model,'MailResponsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoResponsable'); ?>
		<?php echo $form->textField($model,'TelefonoResponsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularResponsable'); ?>
		<?php echo $form->textField($model,'CelularResponsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImagenResponsable'); ?>
		<?php echo $form->textField($model,'ImagenResponsable',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->