<?php
/* @var $this ConfiguracionpracticamainController */
/* @var $model Configuracionpracticamain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'configuracionpracticamain-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombrePractica'); ?>
		<?php echo $form->textField($model,'NombrePractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombrePractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescripcionPractica'); ?>
		<?php echo $form->textArea($model,'DescripcionPractica',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DescripcionPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaPractica'); ?>
		<?php echo $form->textField($model,'FechaPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FechaPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Semestre_CodSemestre'); ?>
		<?php echo $form->textField($model,'Semestre_CodSemestre'); ?>
		<?php echo $form->error($model,'Semestre_CodSemestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroSesionesPractica'); ?>
		<?php echo $form->textField($model,'NumeroSesionesPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NumeroSesionesPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroHorasPractica'); ?>
		<?php echo $form->textField($model,'NumeroHorasPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NumeroHorasPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocenteCoordinadorPracticas_RutCoordinador'); ?>
		<?php echo $form->textField($model,'DocenteCoordinadorPracticas_RutCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DocenteCoordinadorPracticas_RutCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocenteResponsablePractica_RutResponsable'); ?>
		<?php echo $form->textField($model,'DocenteResponsablePractica_RutResponsable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DocenteResponsablePractica_RutResponsable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->