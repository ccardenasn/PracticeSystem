<?php
/* @var $this DocenteresponsablepracticamainController */
/* @var $model Docenteresponsablepracticamain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'docenteresponsablepracticamain-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutResponsable'); ?>
		<?php echo $form->textField($model,'RutResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreResponsable'); ?>
		<?php echo $form->textField($model,'NombreResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClaveResponsable'); ?>
		<?php echo $form->textField($model,'ClaveResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailResponsable'); ?>
		<?php echo $form->textField($model,'MailResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoResponsable'); ?>
		<?php echo $form->textField($model,'TelefonoResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularResponsable'); ?>
		<?php echo $form->textField($model,'CelularResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenResponsable'); ?>
		<?php echo $form->textField($model,'ImagenResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ImagenResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EstadoResponsable'); ?>
		<?php echo $form->textField($model,'EstadoResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EstadoResponsable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->