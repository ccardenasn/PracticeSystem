<?php
/* @var $this SecretariacarreraController */
/* @var $model Secretariacarrera */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutSecretaria'); ?>
		<?php echo $form->textField($model,'RutSecretaria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreSecretaria'); ?>
		<?php echo $form->textField($model,'NombreSecretaria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailSecretaria'); ?>
		<?php echo $form->textField($model,'MailSecretaria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoSecretaria'); ?>
		<?php echo $form->textField($model,'TelefonoSecretaria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularSecretaria'); ?>
		<?php echo $form->textField($model,'CelularSecretaria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->