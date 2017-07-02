<?php
/* @var $this EstudiantemainController */
/* @var $model Estudiantemain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiantemain-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutEstudiante'); ?>
		<?php echo $form->textField($model,'RutEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreEstudiante'); ?>
		<?php echo $form->textField($model,'NombreEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClaveEstudiante'); ?>
		<?php echo $form->textField($model,'ClaveEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaIncorporacion'); ?>
		<?php echo $form->textField($model,'FechaIncorporacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FechaIncorporacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mencion_CodMencion'); ?>
		<?php echo $form->textField($model,'Mencion_CodMencion'); ?>
		<?php echo $form->error($model,'Mencion_CodMencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailEstudiante'); ?>
		<?php echo $form->textField($model,'MailEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoEstudiante'); ?>
		<?php echo $form->textField($model,'TelefonoEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularEstudiante'); ?>
		<?php echo $form->textField($model,'CelularEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php echo $form->textField($model,'ProfesorGuiaCP_RutProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->textField($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($model,'CentroPractica_RBD'); ?>
		<?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenEstudiante'); ?>
		<?php echo $form->textField($model,'ImagenEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ImagenEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SituacionFinalEstudiante'); ?>
		<?php echo $form->textField($model,'SituacionFinalEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SituacionFinalEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ObservacionEstudiante'); ?>
		<?php echo $form->textArea($model,'ObservacionEstudiante',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ObservacionEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->