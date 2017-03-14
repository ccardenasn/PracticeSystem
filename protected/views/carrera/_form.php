<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carrera-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codCarrera'); ?>
		<?php echo $form->textField($model,'codCarrera',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codCarrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreCarrera'); ?>
		<?php echo $form->textField($model,'NombreCarrera',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreCarrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SemestresCarrera'); ?>
		<?php echo $form->textField($model,'SemestresCarrera',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SemestresCarrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Universidad_NombreInstitucion'); ?>
		<?php echo $form->dropDownList($model,'Universidad_NombreInstitucion',CHtml::listData(Universidad::model()->findAll(),'NombreInstitucion','NombreInstitucion'));?>
        <?php echo $form->error($model,'Universidad_NombreInstitucion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->