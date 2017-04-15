<?php
/* @var $this DocentesupervisorpracticaController */
/* @var $model Docentesupervisorpractica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'docentesupervisorpractica-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutSupervisor'); ?>
		<?php echo $form->textField($model,'RutSupervisor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutSupervisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreSupervisor'); ?>
		<?php echo $form->textField($model,'NombreSupervisor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreSupervisor'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ClaveSupervisor'); ?>
		<?php echo $form->passwordField($model,'ClaveSupervisor',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveSupervisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailSupervisor'); ?>
		<?php echo $form->textField($model,'MailSupervisor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailSupervisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoSupervisor'); ?>
		<?php echo $form->textField($model,'TelefonoSupervisor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoSupervisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularSupervisor'); ?>
		<?php echo $form->textField($model,'CelularSupervisor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularSupervisor'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'ImagenSupervisor'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenSupervisor');?>
		<?php echo $form->error($model,'ImagenSupervisor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->