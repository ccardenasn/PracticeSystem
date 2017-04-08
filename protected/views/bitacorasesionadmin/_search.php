<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CodBitacora'); ?>
		<?php echo $form->textField($model,'CodBitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaBitacora'); ?>
		<?php echo $form->textField($model,'FechaBitacora',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActividadesBitacora'); ?>
		<?php echo $form->textArea($model,'ActividadesBitacora',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AprendizajeBitacora'); ?>
		<?php echo $form->textArea($model,'AprendizajeBitacora',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SentirBitacora'); ?>
		<?php echo $form->textArea($model,'SentirBitacora',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OtroBitacora'); ?>
		<?php echo $form->textArea($model,'OtroBitacora',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocumentoBitacora'); ?>
		<?php echo $form->textField($model,'DocumentoBitacora',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PlanificacionClase_CodPlanificacion'); ?>
		<?php echo $form->textField($model,'PlanificacionClase_CodPlanificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->