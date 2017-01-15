<?php
/* @var $this GraphDataController */
/* @var $model GraphData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'graph-data-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrepractica'); ?>
		<?php echo $form->textField($model,'nombrepractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombrepractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcentro'); ?>
		<?php echo $form->textField($model,'idcentro'); ?>
		<?php echo $form->error($model,'idcentro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->