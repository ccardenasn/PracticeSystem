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
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

    <?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
    <?php endif; ?>
    
	<div class="row" align="center">
		<?php //echo $form->labelEx($model,'RutEstudiante'); ?>
		<?php echo $form->hiddenField($model,'RutEstudiante',array('size'=>30,'maxlength'=>30,'readOnly' => true)); ?>
		<?php echo $form->error($model,'RutEstudiante'); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'ClaveEstudiante'); ?>
		<?php echo $form->passwordField($model,'ClaveEstudiante',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ClaveEstudiante'); ?>
	</div>
    
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'ConfirmClaveEstudiante'); ?>
        <?php echo $form->passwordField($model,'ConfirmClaveEstudiante',array('onfocus'=>"this.removeAttribute('readonly');",'readOnly'=>true,'size'=>30,'maxlength'=>30)); ?>
        <?php echo $form->error($model,'ConfirmClaveEstudiante'); ?>
    </div>

	<div class="row buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->