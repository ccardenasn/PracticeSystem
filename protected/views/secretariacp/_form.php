<?php
/* @var $this SecretariacpController */
/* @var $model Secretariacp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'secretariacp-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutSecretariaCP'); ?>
		<?php echo $form->textField($model,'RutSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreSecretariaCP'); ?>
		<?php echo $form->textField($model,'NombreSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailSecretariaCP'); ?>
		<?php echo $form->textField($model,'MailSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoSecretariaCP'); ?>
		<?php echo $form->textField($model,'TelefonoSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularSecretariaCP'); ?>
		<?php echo $form->textField($model,'CelularSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'));?>
        <?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenSecretariaCP'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenSecretariaCP');?>
		<?php echo $form->error($model,'ImagenSecretariaCP'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->