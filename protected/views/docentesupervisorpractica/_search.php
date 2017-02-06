<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $model Docentesupervisorpractica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutSupervisor'); ?>
		<?php echo $form->textField($model,'RutSupervisor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreSupervisor'); ?>
		<?php echo $form->textField($model,'NombreSupervisor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClaveSupervisor'); ?>
		<?php echo $form->textField($model,'ClaveSupervisor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailSupervisor'); ?>
		<?php echo $form->textField($model,'MailSupervisor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoSupervisor'); ?>
		<?php echo $form->textField($model,'TelefonoSupervisor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularSupervisor'); ?>
		<?php echo $form->textField($model,'CelularSupervisor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->