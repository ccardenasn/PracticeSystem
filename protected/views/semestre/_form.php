<?php
/* @var $this SemestreController */
/* @var $model Semestre */
/* @var $form CActiveForm */
/*$semestreData = Semestre::model()->findAll();
$totalSemester = count($semestreData);

$nextSemester = $totalSemester+1;

$semesterName = $nextSemester."° Semestre";*/

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'semestre-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreSemestre'); ?>
		<?php echo $form->textField($model,'NombreSemestre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreSemestre'); ?>
	</div>
	
	<!--<div class="row">
        <?php //echo CHtml::label('NombreSemestre','NombreSemestre'); ?>
        <?php //echo CHtml::textField('NombreSemestre',$semesterName,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->