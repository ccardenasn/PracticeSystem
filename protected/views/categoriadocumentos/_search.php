<?php
/* @var $this CategoriadocumentosController */
/* @var $model Categoriadocumentos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodCategoriaDocumentos'); ?>
		<?php echo $form->textField($model,'CodCategoriaDocumentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreCategoriaDocumentos'); ?>
		<?php echo $form->textField($model,'NombreCategoriaDocumentos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->