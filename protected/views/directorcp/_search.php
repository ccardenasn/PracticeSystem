<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutDirectorCP'); ?>
		<?php echo $form->textField($model,'RutDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreDirectorCP'); ?>
		<?php echo $form->textField($model,'NombreDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailDirectorCP'); ?>
		<?php echo $form->textField($model,'MailDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoDirectorCP'); ?>
		<?php echo $form->textField($model,'TelefonoDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularDirectorCP'); ?>
		<?php echo $form->textField($model,'CelularDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImagenDirectorCP'); ?>
		<?php echo $form->textField($model,'ImagenDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->