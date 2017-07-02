<?php
/* @var $this DocenteresponsablepracticaloginController */
/* @var $model Docenteresponsablepracticalogin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'docenteresponsablepracticalogin-form',
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
		<?php //echo $form->labelEx($model,'RutResponsable'); ?>
		<?php echo $form->hiddenField($model,'RutResponsable',array('size'=>30,'maxlength'=>30,'readOnly' => true)); ?>
		<?php echo $form->error($model,'RutResponsable'); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'ClaveResponsable'); ?>
		<?php echo $form->passwordField($model,'ClaveResponsable',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ClaveResponsable'); ?>
	</div>
    
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'ConfirmClaveResponsable'); ?>
        <?php echo $form->passwordField($model,'ConfirmClaveResponsable',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
        <?php echo $form->error($model,'ConfirmClaveResponsable'); ?>
    </div>

	<div class="row buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->