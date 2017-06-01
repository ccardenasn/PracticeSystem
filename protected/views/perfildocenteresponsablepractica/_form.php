<?php
/* @var $this PerfildocenteresponsablepracticaController */
/* @var $model Perfildocenteresponsablepractica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perfildocenteresponsablepractica-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutResponsable'); ?>
		<?php echo $form->textField($model,'RutResponsable',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutResponsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreResponsable'); ?>
		<?php echo $form->textField($model,'NombreResponsable',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
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
		<?php echo CHtml::activeFileField($model,'ImagenResponsable');?>
		<?php echo $form->error($model,'ImagenResponsable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->