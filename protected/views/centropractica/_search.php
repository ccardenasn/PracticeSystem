<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RBD'); ?>
		<?php echo $form->textField($model,'RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreCentroPractica'); ?>
		<?php echo $form->textField($model,'NombreCentroPractica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VigenciaProtocolo'); ?>
		<?php echo $form->textField($model,'VigenciaProtocolo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaProtocolo'); ?>
		<?php echo $form->textField($model,'FechaProtocolo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AnexoProtocolo'); ?>
		<?php echo $form->textField($model,'AnexoProtocolo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dependencia'); ?>
		<?php echo $form->textField($model,'Dependencia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NivelEducacional'); ?>
		<?php echo $form->textField($model,'NivelEducacional',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Area'); ?>
		<?php echo $form->textField($model,'Area',array('size'=>45,'maxlength'=>45)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'Calle'); ?>
		<?php echo $form->textField($model,'Calle',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImagenCentroPractica'); ?>
		<?php echo $form->textField($model,'ImagenCentroPractica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->