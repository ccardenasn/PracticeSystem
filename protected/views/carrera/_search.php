<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codCarrera'); ?>
		<?php echo $form->textField($model,'codCarrera',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreCarrera'); ?>
		<?php echo $form->textField($model,'NombreCarrera',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SemestresCarrera'); ?>
		<?php echo $form->textField($model,'SemestresCarrera',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Universidad_NombreInstitucion'); ?>
		<?php echo $form->textField($model,'Universidad_NombreInstitucion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->