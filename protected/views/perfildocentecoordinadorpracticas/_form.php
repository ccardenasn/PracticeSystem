<?php
/* @var $this PerfildocentecoordinadorpracticasController */
/* @var $model Perfildocentecoordinadorpracticas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perfildocentecoordinadorpracticas-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutCoordinador'); ?>
		<?php echo $form->textField($model,'RutCoordinador',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreCoordinador'); ?>
		<?php echo $form->textField($model,'NombreCoordinador',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClaveCoordinador'); ?>
		<?php echo $form->textField($model,'ClaveCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailCoordinador'); ?>
		<?php echo $form->textField($model,'MailCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoCoordinador'); ?>
		<?php echo $form->textField($model,'TelefonoCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularCoordinador'); ?>
		<?php echo $form->textField($model,'CelularCoordinador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularCoordinador'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ImagenCoordinador'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenCoordinador');?>
		<?php echo $form->error($model,'ImagenCoordinador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->