<?php
/* @var $this PerfilestudianteController */
/* @var $model Perfilestudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perfilestudiante-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RutEstudiante'); ?>
		<?php echo $form->textField($model,'RutEstudiante',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreEstudiante'); ?>
		<?php echo $form->textField($model,'NombreEstudiante',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaIncorporacion'); ?>
		<?php echo $form->textField($model,'FechaIncorporacion',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FechaIncorporacion'); ?>
	</div>
    
    <div class="row">
		<?php //echo $form->labelEx($model,'Mencion_CodMencion'); ?>
		<?php echo $form->hiddenField($model,'Mencion_CodMencion',array('readOnly' => true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Mencion_CodMencion'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Mención','Mencion_CodMencion'); ?>
        <?php echo CHtml::textField('Mencion_CodMencion',$model->mencionCodMencion->NombreMencion,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MailEstudiante'); ?>
		<?php echo $form->textField($model,'MailEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MailEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelefonoEstudiante'); ?>
		<?php echo $form->textField($model,'TelefonoEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TelefonoEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CelularEstudiante'); ?>
		<?php echo $form->textField($model,'CelularEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CelularEstudiante'); ?>
	</div>
	
    <div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->hiddenField($model,'CentroPractica_RBD',array('readOnly' => true,'size'=>45,'maxlength'=>45)); ?>
        <?php echo CHtml::textField('CentroPractica_RBD',$model->centroPracticaRBD->NombreCentroPractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45)); ?>
		<?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php echo $form->hiddenField($model,'ProfesorGuiaCP_RutProfGuiaCP',array('readOnly' => true,'size'=>45,'maxlength'=>45)); ?>
        <?php echo CHtml::textField('ProfesorGuiaCP_RutProfGuiaCP',$model->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP,array('readOnly' => true,'disabled'=>'disabled','size'=>45)); ?>
		<?php echo $form->error($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>
    
    <div class="row">
		<?php //echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->hiddenField($model,'ConfiguracionPractica_CodPractica',array('readOnly' => true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Práctica','ConfiguracionPractica_CodPractica'); ?>
        <?php echo CHtml::textField('ConfiguracionPractica_CodPractica',$model->configuracionPracticaCodPractica->NombrePractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
    
    <div class="row">
		<?php //echo $form->labelEx($model,'ImagenEstudiante'); ?>
		<?php echo $form->hiddenField($model,'ImagenEstudiante',array('readOnly'=> true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ImagenEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SituacionFinalEstudiante'); ?>
		<?php echo $form->textField($model,'SituacionFinalEstudiante',array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SituacionFinalEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ObservacionEstudiante'); ?>
		<?php echo $form->textArea($model,'ObservacionEstudiante',array('readOnly' => true,'disabled'=>'disabled','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ObservacionEstudiante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->