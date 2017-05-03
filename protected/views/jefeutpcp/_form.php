<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jefeutpcp-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
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
	
	<div class="row">
		<?php echo $form->labelEx($model,'RutJefeUTPCP'); ?>
		<?php echo $form->textField($model,'RutJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreJefeUTPCP'); ?>
		<?php echo $form->textField($model,'NombreJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailJefeUTPCP'); ?>
		<?php echo $form->textField($model,'MailJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoJefeUTPCP'); ?>
		<?php echo $form->textField($model,'TelefonoJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularJefeUTPCP'); ?>
		<?php echo $form->textField($model,'CelularJefeUTPCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularJefeUTPCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'));?>
        <?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenJefeUTPCP'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenJefeUTPCP');?>
		<?php echo $form->error($model,'ImagenJefeUTPCP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->