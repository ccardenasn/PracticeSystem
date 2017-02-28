<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asignatura-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreAsignatura'); ?>
		<?php echo $form->textField($model,'NombreAsignatura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NombreAsignatura'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Semestre_CodSemestre'); ?>
		<?php echo $form->dropDownList($model,'Semestre_CodSemestre',CHtml::listData(Semestre::model()->findAll(),'CodSemestre','NombreSemestre'));?>
        <?php echo $form->error($model,'Semestre_CodSemestre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->