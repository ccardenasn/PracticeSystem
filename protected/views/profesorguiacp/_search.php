<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutProfGuiaCP'); ?>
		<?php echo $form->textField($model,'RutProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreProfGuiaCP'); ?>
		<?php echo $form->textField($model,'NombreProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CursoProfGuiaCP'); ?>
		<?php echo $form->textField($model,'CursoProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProfesorJefeProfGuiaCP'); ?>
		<?php echo $form->textField($model,'ProfesorJefeProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailProfGuiaCP'); ?>
		<?php echo $form->textField($model,'MailProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoProfGuiaCP'); ?>
		<?php echo $form->textField($model,'TelefonoProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularProfGuiaCP'); ?>
		<?php echo $form->textField($model,'CelularProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImagenProfGuiaCP'); ?>
		<?php echo $form->textField($model,'ImagenProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->