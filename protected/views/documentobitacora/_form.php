<?php
/* @var $this DocumentobitacoraController */
/* @var $model Documentobitacora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documentobitacora-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php $req=Yii::app()->request->getQuery('id'); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'DocumentoWord'); ?>
		<?php echo CHtml::activeFileField($model,'DocumentoWord');?>
		<?php echo $form->error($model,'DocumentoWord'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bitacorasesion_id'); ?>
		<?php echo $form->textField($model,'bitacorasesion_id',array('value'=>$req,'readOnly' => true)); ?>
		<?php echo $form->error($model,'bitacorasesion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->