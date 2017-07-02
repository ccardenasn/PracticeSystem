<?php
/* @var $this UniversidadrepController */
/* @var $model Universidadrep */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'universidadrep-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreInstitucion'); ?>
		<?php echo $form->textField($model,'NombreInstitucion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sede'); ?>
		<?php echo $form->textField($model,'Sede',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Sede'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Campus'); ?>
		<?php echo $form->textField($model,'Campus',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Campus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Facultad'); ?>
		<?php echo $form->textField($model,'Facultad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Facultad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Region_codRegion'); ?>
		<?php echo $form->textField($model,'Region_codRegion'); ?>
		<?php echo $form->error($model,'Region_codRegion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Provincia_codProvincia'); ?>
		<?php echo $form->textField($model,'Provincia_codProvincia'); ?>
		<?php echo $form->error($model,'Provincia_codProvincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad_codCiudad'); ?>
		<?php echo $form->textField($model,'Ciudad_codCiudad'); ?>
		<?php echo $form->error($model,'Ciudad_codCiudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->