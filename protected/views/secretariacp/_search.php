<?php
/* @var $this SecretariacpController */
/* @var $model Secretariacp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutSecretariaCP'); ?>
		<?php echo $form->textField($model,'RutSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreSecretariaCP'); ?>
		<?php echo $form->textField($model,'NombreSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailSecretariaCP'); ?>
		<?php echo $form->textField($model,'MailSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoSecretariaCP'); ?>
		<?php echo $form->textField($model,'TelefonoSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularSecretariaCP'); ?>
		<?php echo $form->textField($model,'CelularSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->