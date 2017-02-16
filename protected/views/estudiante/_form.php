<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */
/* @var $form CActiveForm */
?>

<div class="form">
	
	

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiante-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data','autoComplete'=>'false'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	
	
	<div class="row">
		<?php //form de estudiante
		echo $form->labelEx($model,'RutEstudiante'); ?>
		<?php echo $form->textField($model,'RutEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreEstudiante'); ?>
		<?php echo $form->textField($model,'NombreEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreEstudiante'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ClaveEstudiante'); ?>
		<?php echo $form->textField($model,'ClaveEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ClaveEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaIncorporacion'); ?>
		<?php echo $form->textField($model,'FechaIncorporacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FechaIncorporacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mencion_NombreMencion'); ?>
		<?php echo $form->dropDownList($model,'Mencion_NombreMencion',CHtml::listData(Mencion::model()->findAll(),'NombreMencion','NombreMencion'));?>
        <?php echo $form->error($model,'Mencion_NombreMencion'); ?>
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
		<?php echo $form->labelEx($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php echo $form->dropDownList($model,'ProfesorGuiaCP_RutProfGuiaCP',CHtml::listData(Profesorguiacp::model()->findAll(),'RutProfGuiaCP','NombreProfGuiaCP'));?>
        <?php echo $form->error($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ConfiguracionPractica_NombrePractica'); ?>
		<?php echo $form->dropDownList($model,'ConfiguracionPractica_NombrePractica',CHtml::listData(Configuracionpractica::model()->findAll(),'NombrePractica','NombrePractica'));?>
        <?php echo $form->error($model,'ConfiguracionPractica_NombrePractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'));?>
        <?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenEstudiante'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenEstudiante');?>
		<?php echo $form->error($model,'ImagenEstudiante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->