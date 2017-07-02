<?php
/* @var $this DocentecoordinadorpracticasloginController */
/* @var $model Docentecoordinadorpracticaslogin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'docentecoordinadorpracticaslogin-form',
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
		<?php //echo $form->labelEx($model,'RutCoordinador'); ?>
		<?php echo $form->hiddenField($model,'RutCoordinador',array('size'=>30,'maxlength'=>30,'readOnly' => true)); ?>
		<?php echo $form->error($model,'RutCoordinador'); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'ClaveCoordinador'); ?>
		<?php echo $form->passwordField($model,'ClaveCoordinador',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ClaveCoordinador'); ?>
	</div>
    
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'ConfirmClaveCoordinador'); ?>
        <?php echo $form->passwordField($model,'ConfirmClaveCoordinador',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
        <?php echo $form->error($model,'ConfirmClaveCoordinador'); ?>
    </div>

	<div class="row buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->