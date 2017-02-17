<?php
/* @var $this DirectorcpController */
/* @var $model Directorcp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'directorcp-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutDirectorCP'); ?>
		<?php echo $form->textField($model,'RutDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreDirectorCP'); ?>
		<?php echo $form->textField($model,'NombreDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailDirectorCP'); ?>
		<?php echo $form->textField($model,'MailDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoDirectorCP'); ?>
		<?php echo $form->textField($model,'TelefonoDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularDirectorCP'); ?>
		<?php echo $form->textField($model,'CelularDirectorCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularDirectorCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'));?>
        <?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenDirectorCP'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenDirectorCP');?>
		<?php echo $form->error($model,'ImagenDirectorCP'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->