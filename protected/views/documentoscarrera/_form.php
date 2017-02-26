<?php
/* @var $this DocumentoscarreraController */
/* @var $model Documentoscarrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documentoscarrera-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data','autoComplete'=>'false'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreDocumentoCarrera'); ?>
		<?php echo $form->textField($model,'NombreDocumentoCarrera',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreDocumentoCarrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArchivoDocumentoCarrera'); ?>
		<?php echo CHtml::activeFileField($model,'ArchivoDocumentoCarrera');?>
		<?php echo $form->error($model,'ArchivoDocumentoCarrera'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'CategoriaDocumentos_CodCategoriaDocumentos'); ?>
		<?php echo $form->dropDownList($model,'CategoriaDocumentos_CodCategoriaDocumentos',CHtml::listData(Categoriadocumentos::model()->findAll(),'CodCategoriaDocumentos','NombreCategoriaDocumentos'));?>
        <?php echo $form->error($model,'CategoriaDocumentos_CodCategoriaDocumentos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->