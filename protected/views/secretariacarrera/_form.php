<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'secretariacarrera-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutSecretaria'); ?>
		<?php echo $form->textField($model,'RutSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreSecretaria'); ?>
		<?php echo $form->textField($model,'NombreSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailSecretaria'); ?>
		<?php echo $form->textField($model,'MailSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoSecretaria'); ?>
		<?php echo $form->textField($model,'TelefonoSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularSecretaria'); ?>
		<?php echo $form->textField($model,'CelularSecretaria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularSecretaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenSecretaria'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenSecretaria');?>
		<?php echo $form->error($model,'ImagenSecretaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->