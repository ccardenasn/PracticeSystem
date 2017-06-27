<?php
/* @var $this EstudianteloginController */
/* @var $model Estudiantelogin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiantelogin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableClientValidation'=>true,
    'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
    <?php endif; ?>
    
	<div class="row">
		<?php //echo $form->labelEx($model,'RutEstudiante'); ?>
		<?php echo $form->hiddenField($model,'RutEstudiante',array('size'=>45,'maxlength'=>45,'readOnly' => true,)); ?>
		<?php echo $form->error($model,'RutEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClaveEstudiante'); ?>
		<?php echo $form->passwordField($model,'ClaveEstudiante',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveEstudiante'); ?>
	</div>
    
    <div>
        <?php echo $form->labelEx($model,'ConfirmClaveEstudiante'); ?>
        <?php echo $form->passwordField($model,'ConfirmClaveEstudiante',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'ConfirmClaveEstudiante'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->