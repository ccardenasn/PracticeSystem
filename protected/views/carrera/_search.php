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
		<?php echo $form->label($model,'Nombre de Carrera'); ?>
		<?php echo $form->textField($model,'NombreCarrera',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sede'); ?>
		<?php echo $form->textField($model,'Sede',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Region_codRegion'); ?>
		<?php echo $form->textField($model,'Region_codRegion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Provincia_codProvincia'); ?>
		<?php echo $form->textField($model,'Provincia_codProvincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ciudad_codCiudad'); ?>
		<?php echo $form->textField($model,'Ciudad_codCiudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->