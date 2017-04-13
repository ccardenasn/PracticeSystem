<?php
/* @var $this PerfildocentecoordinadorpracticasController */
/* @var $model Perfildocentecoordinadorpracticas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perfildocentecoordinadorpracticas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutCoordinador'); ?>
		<?php echo $form->textField($model,'RutCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreCoordinador'); ?>
		<?php echo $form->textField($model,'NombreCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClaveCoordinador'); ?>
		<?php echo $form->textField($model,'ClaveCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailCoordinador'); ?>
		<?php echo $form->textField($model,'MailCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoCoordinador'); ?>
		<?php echo $form->textField($model,'TelefonoCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularCoordinador'); ?>
		<?php echo $form->textField($model,'CelularCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenCoordinador'); ?>
		<?php echo $form->textField($model,'ImagenCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ImagenCoordinador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->