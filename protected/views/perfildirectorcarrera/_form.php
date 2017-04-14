<?php
/* @var $this PerfildirectorcarreraController */
/* @var $model Perfildirectorcarrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perfildirectorcarrera-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutDirector'); ?>
		<?php echo $form->textField($model,'RutDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreDirector'); ?>
		<?php echo $form->textField($model,'NombreDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClaveDirector'); ?>
		<?php echo $form->textField($model,'ClaveDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailDirector'); ?>
		<?php echo $form->textField($model,'MailDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoDirector'); ?>
		<?php echo $form->textField($model,'TelefonoDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularDirector'); ?>
		<?php echo $form->textField($model,'CelularDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenDirector'); ?>
		<?php echo $form->textField($model,'ImagenDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ImagenDirector'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->