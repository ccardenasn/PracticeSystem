<?php
/* @var $this ClasebitacoraController */
/* @var $model Clasebitacora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clasebitacora-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Curso'); ?>
		<?php echo $form->textField($model,'Curso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asignatura'); ?>
		<?php echo $form->textField($model,'Asignatura',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Asignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfesorGuia'); ?>
		<?php echo $form->textField($model,'ProfesorGuia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ProfesorGuia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroAlumnos'); ?>
		<?php echo $form->textField($model,'NumeroAlumnos',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NumeroAlumnos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bitacora_CodBitacora'); ?>
		<?php echo $form->textField($model,'Bitacora_CodBitacora'); ?>
		<?php echo $form->error($model,'Bitacora_CodBitacora'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->