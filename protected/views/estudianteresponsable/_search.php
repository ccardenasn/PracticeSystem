<?php
/* @var $this EstudianteresponsableController */
/* @var $model Estudianteresponsable */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RutEstudiante'); ?>
		<?php echo $form->textField($model,'RutEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreEstudiante'); ?>
		<?php echo $form->textField($model,'NombreEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClaveEstudiante'); ?>
		<?php echo $form->textField($model,'ClaveEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaIncorporacion'); ?>
		<?php echo $form->textField($model,'FechaIncorporacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mencion_CodMencion'); ?>
		<?php echo $form->textField($model,'Mencion_CodMencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MailEstudiante'); ?>
		<?php echo $form->textField($model,'MailEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelefonoEstudiante'); ?>
		<?php echo $form->textField($model,'TelefonoEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CelularEstudiante'); ?>
		<?php echo $form->textField($model,'CelularEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php echo $form->textField($model,'ProfesorGuiaCP_RutProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->textField($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CentroPractica_RBD'); ?>
		<?php echo $form->textField($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImagenEstudiante'); ?>
		<?php echo $form->textField($model,'ImagenEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SituacionFinalEstudiante'); ?>
		<?php echo $form->textField($model,'SituacionFinalEstudiante',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ObservacionEstudiante'); ?>
		<?php echo $form->textArea($model,'ObservacionEstudiante',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->