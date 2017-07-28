<?php
/* @var $this PlanificacionclaseresponsableController */
/* @var $model Planificacionclaseresponsable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'planificacionclaseresponsable-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'Estudiante_RutEstudiante'); ?>
		<?php echo $form->hiddenField($model,'Estudiante_RutEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estudiante_RutEstudiante'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Rut Estudiante','Estudiante_RutEstudiante'); ?>
        <?php echo CHtml::textField('Estudiante_RutEstudiante',$model->Estudiante_RutEstudiante,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Nombre Estudiante','NombreEstudiante'); ?>
        <?php echo CHtml::textField('NombreEstudiante',$model->estudianteRutEstudiante->NombreEstudiante,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->hiddenField($model,'CentroPractica_RBD'); ?>
		<?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Centro de Práctica','CentroPractica_RBD'); ?>
        <?php echo CHtml::textField('CentroPractica_RBD',$model->centroPracticaRBD->NombreCentroPractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php echo $form->hiddenField($model,'ProfesorGuiaCP_RutProfGuiaCP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Profesor Guía CP','ProfesorGuiaCP_RutProfGuiaCP'); ?>
        <?php echo CHtml::textField('ProfesorGuiaCP_RutProfGuiaCP',$model->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'Curso'); ?>
		<?php echo $form->hiddenField($model,'Curso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Curso'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Curso','Curso'); ?>
        <?php echo CHtml::textField('Curso',$model->Curso,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->hiddenField($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Práctica','ConfiguracionPractica_CodPractica'); ?>
        <?php echo CHtml::textField('ConfiguracionPractica_CodPractica',$model->configuracionPracticaCodPractica->NombrePractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->hiddenField($model,'Fecha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Fecha','Fecha'); ?>
        <?php echo CHtml::textField('Fecha',$model->Fecha,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'SesionInformada'); ?>
		<?php echo $form->hiddenField($model,'SesionInformada',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SesionInformada'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Sesión Informada','SesionInformada'); ?>
        <?php echo CHtml::textField('SesionInformada',$model->SesionInformada,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'Ejecutado'); ?>
		<?php echo $form->hiddenField($model,'Ejecutado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Ejecutado'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Ejecutado','Ejecutado'); ?>
        <?php echo CHtml::textField('Ejecutado',$model->Ejecutado,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'Supervisado'); ?>
		<?php echo $form->hiddenField($model,'Supervisado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Supervisado'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Supervisado','Supervisado'); ?>
        <?php echo CHtml::textField('Supervisado',$model->Supervisado,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ComentarioPlanificacion'); ?>
		<?php echo $form->textArea($model,'ComentarioPlanificacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ComentarioPlanificacion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'DocumentoPlanificacion'); ?>
		<?php echo $form->hiddenField($model,'DocumentoPlanificacion',array('readOnly'=> true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DocumentoPlanificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->