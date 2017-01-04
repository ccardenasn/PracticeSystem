<?php
/* @var $this ListaestudianteController */
/* @var $model Listaestudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'listaestudiante-form',
    'method'=>'post',
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    'clientOptions'=>array('validateOnSubmit'=>true,),
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>
    
    <div class="row">
		<?php echo $form->labelEx($model,'ImagenEstudiante'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenEstudiante');?>
		<?php echo $form->error($model,'ImagenEstudiante'); ?>    
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Leer y Guardar Datos' : 'Save'); ?>
	</div>
    
    <?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
    <?php endif; ?>

<?php $this->endWidget(); ?>

</div><!-- form -->