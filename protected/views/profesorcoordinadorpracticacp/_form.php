<?php
/* @var $this ProfesorcoordinadorpracticacpController */
/* @var $model Profesorcoordinadorpracticacp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesorcoordinadorpracticacp-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutProfCoordGuiaCp'); ?>
		<?php echo $form->textField($model,'RutProfCoordGuiaCp',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutProfCoordGuiaCp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'NombreProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreProfCoordGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'MailProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailProfCoordGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'TelefonoProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoProfCoordGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularProfCoordGuiaCP'); ?>
		<?php echo $form->textField($model,'CelularProfCoordGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularProfCoordGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'));?>
        <?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'ImagenProfCoordGuiaCP'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenProfCoordGuiaCP');?>
		<?php echo $form->error($model,'ImagenProfCoordGuiaCP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->