<?php
/* @var $this BloqueController */
/* @var $model Bloque */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bloque-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreBloque'); ?>
		<?php echo $form->textField($model,'NombreBloque',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreBloque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraInicio'); ?>
		<?php echo $form->textField($model,'HoraInicio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'HoraInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraFin'); ?>
		<?php echo $form->textField($model,'HoraFin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'HoraFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->