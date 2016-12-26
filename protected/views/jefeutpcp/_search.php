<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutJefeUTPCP'); ?>
		<?php echo $form->textField($model,'RutJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreJefeUTPCP'); ?>
		<?php echo $form->textField($model,'NombreJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailJefeUTPCP'); ?>
		<?php echo $form->textField($model,'MailJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoJefeUTPCP'); ?>
		<?php echo $form->textField($model,'TelefonoJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularJefeUTPCP'); ?>
		<?php echo $form->textField($model,'CelularJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImagenJefeUTPCP'); ?>
		<?php echo $form->textField($model,'ImagenJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->