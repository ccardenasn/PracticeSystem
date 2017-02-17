<?php
/* @var $this ProfesorguiacpController */
/* @var $model Profesorguiacp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesorguiacp-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutProfGuiaCP'); ?>
		<?php echo $form->textField($model,'RutProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreProfGuiaCP'); ?>
		<?php echo $form->textField($model,'NombreProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CursoProfGuiaCP'); ?>
		<?php echo $form->textField($model,'CursoProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CursoProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfesorJefeProfGuiaCP'); ?>
		<?php echo $form->textField($model,'ProfesorJefeProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ProfesorJefeProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailProfGuiaCP'); ?>
		<?php echo $form->textField($model,'MailProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoProfGuiaCP'); ?>
		<?php echo $form->textField($model,'TelefonoProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularProfGuiaCP'); ?>
		<?php echo $form->textField($model,'CelularProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'));?>
        <?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'ImagenProfGuiaCP'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenProfGuiaCP');?>
		<?php echo $form->error($model,'ImagenProfGuiaCP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->