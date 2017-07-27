<?php
/* @var $this BitacorasesionresponsableController */
/* @var $model Bitacorasesionresponsable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bitacorasesionresponsable-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ActividadesBitacora'); ?>
		<?php echo $form->textArea($model,'ActividadesBitacora',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ActividadesBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AprendizajeBitacora'); ?>
		<?php echo $form->textArea($model,'AprendizajeBitacora',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'AprendizajeBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SentirBitacora'); ?>
		<?php echo $form->textArea($model,'SentirBitacora',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SentirBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OtroBitacora'); ?>
		<?php echo $form->textArea($model,'OtroBitacora',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OtroBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocumentoBitacora'); ?>
		<?php echo $form->textField($model,'DocumentoBitacora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DocumentoBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PlanificacionClase_CodPlanificacion'); ?>
		<?php echo $form->textField($model,'PlanificacionClase_CodPlanificacion'); ?>
		<?php echo $form->error($model,'PlanificacionClase_CodPlanificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->