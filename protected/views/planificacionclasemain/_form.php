<?php
/* @var $this PlanificacionclasemainController */
/* @var $model Planificacionclasemain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'planificacionclasemain-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Estudiante_RutEstudiante'); ?>
		<?php echo $form->textField($model,'Estudiante_RutEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estudiante_RutEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($model,'CentroPractica_RBD'); ?>
		<?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php echo $form->textField($model,'ProfesorGuiaCP_RutProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Curso'); ?>
		<?php echo $form->textField($model,'Curso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->textField($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SesionInformada'); ?>
		<?php echo $form->textField($model,'SesionInformada',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SesionInformada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ejecutado'); ?>
		<?php echo $form->textField($model,'Ejecutado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Ejecutado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Supervisado'); ?>
		<?php echo $form->textField($model,'Supervisado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Supervisado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ComentarioPlanificacion'); ?>
		<?php echo $form->textArea($model,'ComentarioPlanificacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ComentarioPlanificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocumentoPlanificacion'); ?>
		<?php echo $form->textField($model,'DocumentoPlanificacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DocumentoPlanificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->