<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutProfCoordGuiaCp'); ?>
		<?php echo $form->textField($model,'RutProfCoordGuiaCp',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'NombreProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'MailProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'TelefonoProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'CelularProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
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