<?php
/* @var $this ListaestudianteController */
/* @var $model Listaestudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiante-form',
    'method'=>'post',
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    'clientOptions'=>array('validateOnSubmit'=>true,),
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
    
	<?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
    <?php endif; ?>
	
    <div class="row">
		<?php echo $form->labelEx($model,'Archivo'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenEstudiante');?>
		<?php echo $form->error($model,'ImagenEstudiante'); ?>    
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Leer y Guardar Datos' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->