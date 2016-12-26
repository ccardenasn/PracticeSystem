<?php
/* @var $this DocumentobitacoraController */
/* @var $model Documentobitacora */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodDocumentoBitacora'); ?>
		<?php echo $form->textField($model,'CodDocumentoBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocumentoWord'); ?>
		<?php echo $form->textField($model,'DocumentoWord',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bitacorasesion_id'); ?>
		<?php echo $form->textField($model,'bitacorasesion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->