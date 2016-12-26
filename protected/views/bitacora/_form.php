<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */
/* @var $form CActiveForm */
?>

<div class="form">
	
	<?php $form=$this->beginWidget('DynamicTabularForm', array(
	'id'=>'bitacora-form',
	'method'=>'post',
	'defaultRowView'=>'_clase_form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelA); ?>

	<div class="row">
		<?php echo $form->labelEx($modelA,'Fecha'); ?>
		<?php echo $form->textField($modelA,'Fecha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($modelA,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelA,'ActividadesRealizadas'); ?>
		<?php echo $form->textArea($modelA,'ActividadesRealizadas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($modelA,'ActividadesRealizadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelA,'Aprendizaje'); ?>
		<?php echo $form->textArea($modelA,'Aprendizaje',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($modelA,'Aprendizaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelA,'Sentir'); ?>
		<?php echo $form->textArea($modelA,'Sentir',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($modelA,'Sentir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelA,'OtroComentario'); ?>
		<?php echo $form->textArea($modelA,'OtroComentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($modelA,'OtroComentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelA,'DocumentoWord'); ?>
		<?php echo $form->textField($modelA,'DocumentoWord',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($modelA,'DocumentoWord'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelA,'PlanificacionClase_CodPlanificacion'); ?>
		<?php echo $form->textField($modelA,'PlanificacionClase_CodPlanificacion'); ?>
		<?php echo $form->error($modelA,'PlanificacionClase_CodPlanificacion'); ?>
	</div>
	
	<br/>
	<h2>Contact Person</h2>

	<div id="tabular-content">
		<?php echo $form->rowForm($modelB) ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelA->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->