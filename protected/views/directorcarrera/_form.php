<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'directorcarrera-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutDirector'); ?>
		<?php echo $form->textField($model,'RutDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreDirector'); ?>
		<?php echo $form->textField($model,'NombreDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreDirector'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ClaveDirector'); ?>
		<?php echo $form->passwordField($model,'ClaveDirector',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailDirector'); ?>
		<?php echo $form->textField($model,'MailDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoDirector'); ?>
		<?php echo $form->textField($model,'TelefonoDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularDirector'); ?>
		<?php echo $form->textField($model,'CelularDirector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularDirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenDirector'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenDirector');?>
		<?php echo $form->error($model,'ImagenDirector'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->