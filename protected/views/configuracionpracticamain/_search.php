<?php
/* @var $this ConfiguracionpracticamainController */
/* @var $model Configuracionpracticamain */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodPractica'); ?>
		<?php echo $form->textField($model,'CodPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombrePractica'); ?>
		<?php echo $form->textField($model,'NombrePractica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DescripcionPractica'); ?>
		<?php echo $form->textArea($model,'DescripcionPractica',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaPractica'); ?>
		<?php echo $form->textField($model,'FechaPractica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Semestre_CodSemestre'); ?>
		<?php echo $form->textField($model,'Semestre_CodSemestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NumeroSesionesPractica'); ?>
		<?php echo $form->textField($model,'NumeroSesionesPractica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NumeroHorasPractica'); ?>
		<?php echo $form->textField($model,'NumeroHorasPractica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocenteCoordinadorPracticas_RutCoordinador'); ?>
		<?php echo $form->textField($model,'DocenteCoordinadorPracticas_RutCoordinador',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->