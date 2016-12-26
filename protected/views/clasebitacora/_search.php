<?php
/* @var $this ClasebitacoraController */
/* @var $model Clasebitacora */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodClaseBitacora'); ?>
		<?php echo $form->textField($model,'CodClaseBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Curso'); ?>
		<?php echo $form->textField($model,'Curso',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Asignatura'); ?>
		<?php echo $form->textField($model,'Asignatura',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProfesorGuia'); ?>
		<?php echo $form->textField($model,'ProfesorGuia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NumeroAlumnos'); ?>
		<?php echo $form->textField($model,'NumeroAlumnos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bitacora_CodBitacora'); ?>
		<?php echo $form->textField($model,'Bitacora_CodBitacora'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->