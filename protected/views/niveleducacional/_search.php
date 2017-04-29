<?php
/* @var $this NiveleducacionalController */
/* @var $model Niveleducacional */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodNivel'); ?>
		<?php echo $form->textField($model,'CodNivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreNivel'); ?>
		<?php echo $form->textField($model,'NombreNivel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->