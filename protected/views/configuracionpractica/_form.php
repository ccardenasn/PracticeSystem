<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'configuracionpractica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombrePractica'); ?>
		<?php echo $form->textField($model,'NombrePractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombrePractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescripcionPractica'); ?>
		<?php echo $form->textArea($model,'DescripcionPractica',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DescripcionPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaPractica'); ?>
		<?php echo $form->textField($model,'FechaPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FechaPractica'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'SemestrePractica');?>
        <?php echo $form->dropDownList($model,'SemestrePractica', 
                                       array(
                                           '1'=>'Primer Semestre',
                                           '2'=>'Segundo Semestre',
                                           '3'=>'Tercer Semestre',
                                           '4'=>'Cuarto Semestre',
                                           '5'=>'Quinto Semestre',
                                       ));?>
        <?php echo $form->error($model,'SemestrePractica'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroSesionesPractica'); ?>
		<?php echo $form->textField($model,'NumeroSesionesPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NumeroSesionesPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroHorasPractica'); ?>
		<?php echo $form->textField($model,'NumeroHorasPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NumeroHorasPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocenteCoordinadorPracticas_RutCoordinador'); ?>
		<?php echo $form->dropDownList($model,'DocenteCoordinadorPracticas_RutCoordinador',CHtml::listData(Docentecoordinadorpracticas::model()->findAll(),'RutCoordinador','NombreCoordinador'));?>
        <?php echo $form->error($model,'DocenteCoordinadorPracticas_RutCoordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocenteResponsablePractica_RutResponsable'); ?>
		<?php echo $form->dropDownList($model,'DocenteResponsablePractica_RutResponsable',CHtml::listData(Docenteresponsablepractica::model()->findAll(),'RutResponsable','NombreResponsable'));?>
        <?php echo $form->error($model,'DocenteResponsablePractica_RutResponsable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->