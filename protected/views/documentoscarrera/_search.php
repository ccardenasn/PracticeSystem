<?php
/* @var $this DocumentoscarreraController */
/* @var $model Documentoscarrera */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NombreDocumentoCarrera'); ?>
		<?php echo $form->textField($model,'NombreDocumentoCarrera',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArchivoDocumentoCarrera'); ?>
		<?php echo $form->textField($model,'ArchivoDocumentoCarrera',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CategoriaDocumentos_CodCategoriaDocumentos'); ?>
		<?php echo $form->textField($model,'CategoriaDocumentos_CodCategoriaDocumentos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->