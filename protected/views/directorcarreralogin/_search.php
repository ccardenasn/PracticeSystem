<?php
/* @var $this DirectorcarreraloginController */
/* @var $model Directorcarreralogin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutDirector'); ?>
		<?php echo $form->textField($model,'RutDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreDirector'); ?>
		<?php echo $form->textField($model,'NombreDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClaveDirector'); ?>
		<?php echo $form->textField($model,'ClaveDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailDirector'); ?>
		<?php echo $form->textField($model,'MailDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoDirector'); ?>
		<?php echo $form->textField($model,'TelefonoDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularDirector'); ?>
		<?php echo $form->textField($model,'CelularDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImagenDirector'); ?>
		<?php echo $form->textField($model,'ImagenDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EstadoDirector'); ?>
		<?php echo $form->textField($model,'EstadoDirector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->