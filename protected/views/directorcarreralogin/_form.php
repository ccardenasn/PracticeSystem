<?php
/* @var $this DirectorcarreraloginController */
/* @var $model Directorcarreralogin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'directorcarreralogin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableClientValidation'=>true,
    'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

    <?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
    <?php endif; ?>
    
	<div class="row" align="center">
		<?php //echo $form->labelEx($model,'ClaveDirector'); ?>
		<?php echo $form->hiddenField($model,'RutDirector',array('size'=>45,'maxlength'=>45,'readOnly' => true)); ?>
		<?php echo $form->error($model,'RutDirector'); ?>
	</div>
    
    <div class="row" align="center">
		<?php echo $form->labelEx($model,'ClaveDirector'); ?>
		<?php echo $form->passwordField($model,'ClaveDirector',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ClaveDirector'); ?>
	</div>
    
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'ConfirmClaveDirector'); ?>
        <?php echo $form->passwordField($model,'ConfirmClaveDirector',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
        <?php echo $form->error($model,'ConfirmClaveDirector'); ?>
    </div>    

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->