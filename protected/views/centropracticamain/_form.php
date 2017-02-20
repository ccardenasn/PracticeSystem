<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'centropractica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($centroModel); ?>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'RBD'); ?>
		<?php echo $form->textField($centroModel,'RBD'); ?>
		<?php echo $form->error($centroModel,'RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'NombreCentroPractica'); ?>
		<?php echo $form->textField($centroModel,'NombreCentroPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'NombreCentroPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'VigenciaProtocolo'); ?>
		<?php echo $form->textField($centroModel,'VigenciaProtocolo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'VigenciaProtocolo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'FechaProtocolo'); ?>
		<?php echo $form->textField($centroModel,'FechaProtocolo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'FechaProtocolo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'AnexoProtocolo'); ?>
		<?php echo $form->textField($centroModel,'AnexoProtocolo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($centroModel,'AnexoProtocolo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Dependencia'); ?>
		<?php echo $form->textField($centroModel,'Dependencia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'Dependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'NivelEducacional'); ?>
		<?php echo $form->textField($centroModel,'NivelEducacional',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'NivelEducacional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Area'); ?>
		<?php echo $form->textField($centroModel,'Area',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'Area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Region_codRegion'); ?>
		<?php echo $form->textField($centroModel,'Region_codRegion'); ?>
		<?php echo $form->error($centroModel,'Region_codRegion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Provincia_codProvincia'); ?>
		<?php echo $form->textField($centroModel,'Provincia_codProvincia'); ?>
		<?php echo $form->error($centroModel,'Provincia_codProvincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Ciudad_codCiudad'); ?>
		<?php echo $form->textField($centroModel,'Ciudad_codCiudad'); ?>
		<?php echo $form->error($centroModel,'Ciudad_codCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Calle'); ?>
		<?php echo $form->textField($centroModel,'Calle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'Calle'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'RutSecretariaCP'); ?>
		<?php echo $form->textField($secretariaModel,'RutSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'RutSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'NombreSecretariaCP'); ?>
		<?php echo $form->textField($secretariaModel,'NombreSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'NombreSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'MailSecretariaCP'); ?>
		<?php echo $form->textField($secretariaModel,'MailSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'MailSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'TelefonoSecretariaCP'); ?>
		<?php echo $form->textField($secretariaModel,'TelefonoSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'TelefonoSecretariaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'CelularSecretariaCP'); ?>
		<?php echo $form->textField($secretariaModel,'CelularSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'CelularSecretariaCP'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($secretariaModel,'CentroPractica_RBD',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($secretariaModel,'CentroPractica_RBD'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($secretariaModel,'ImagenSecretariaCP'); ?>
		<?php echo $form->textField($secretariaModel,'ImagenSecretariaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($secretariaModel,'ImagenSecretariaCP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($centroModel->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->