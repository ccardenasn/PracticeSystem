<?php
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'planificacionclase-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true, 
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'Estudiante_RutEstudiante'); ?>
		<?php echo $form->hiddenField($model,'Estudiante_RutEstudiante',array('readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estudiante_RutEstudiante'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Rut Estudiante','Estudiante_RutEstudiante'); ?>
        <?php echo CHtml::textField('Estudiante_RutEstudiante',$model->estudianteRutEstudiante->RutEstudiante,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Nombre Estudiante','NombreEstudiante'); ?>
        <?php echo CHtml::textField('NombreEstudiante',$model->estudianteRutEstudiante->NombreEstudiante,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'),
				array(
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Planificacionclase/selectProfesorUpdate'),
						'update'=>'#'.CHtml::activeId($model,'ProfesorGuiaCP_RutProfGuiaCP'),
						'beforeSend'=>'function(){
						$("#Centropractica_ProfesorGuiaCP_RutProfGuiaCP").find("option").remove();
						$("#Centropractica_ProfesorGuiaCP_RutProfGuiaCP").find("option").remove();
						}',
					),'prompt'=>'Seleccione'
				)
		);?>
		<?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php 
		$lista_dos=array();
		if(isset($model->ProfesorGuiaCP_RutProfGuiaCP)){
			$id_uno=intval($model->CentroPractica_RBD);
			$lista_dos = CHtml::listData(Profesorguiacp::model()->findAll("CentroPractica_RBD = '$id_uno'"),'RutProfGuiaCP','NombreProfGuiaCP');
		}
		echo $form->dropDownList($model,'ProfesorGuiaCP_RutProfGuiaCP',$lista_dos,
				array('prompt'=>'Seleccione')
		);?>
		<?php echo $form->error($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Curso'); ?>
		<?php echo $form->textField($model,'Curso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Curso'); ?>
	</div>
	
	<!--<div class="row">
		<?php echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->dropDownList($model,'ConfiguracionPractica_CodPractica',CHtml::listData(Configuracionpractica::model()->findAll(),'NombrePractica','NombrePractica'));?>
        <?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>-->
    
    <div class="row">
		<?php //echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->hiddenField($model,'ConfiguracionPractica_CodPractica',array('size'=>45,'maxlength'=>45,'readOnly'=>true)); ?>
		<?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Práctica','ConfiguracionPractica_CodPractica'); ?>
        <?php echo CHtml::textField('ConfiguracionPractica_CodPractica',$model->configuracionPracticaCodPractica->NombrePractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'language' => 'es',
                    'attribute' => 'Fecha',
                    'options' => array(
                        'showAnim' => 'fold',
                        'changeYear'=>'true',
                        'dateFormat' => 'dd-mm-yy',
                    ),
					'htmlOptions'=>array('placeholder'=>'Haga click aquí','size'=>45,'maxlength'=>45),
            ));?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
        <?php //echo $form->labelEx($model,'SesionInformada');?>
		<?php echo $form->hiddenField($model,'SesionInformada',array('readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'SesionInformada'); ?>
    </div>
	
    <div class="row">
        <?php echo CHtml::label('Sesión Informada','SesionInformada'); ?>
        <?php echo CHtml::textField('SesionInformada',$model->SesionInformada,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	 <div class="row">
        <?php echo CHtml::label('Numero de Sesiones','NumeroSesionesPractica'); ?>
        <?php echo CHtml::textField('NumeroSesionesPractica',$model->configuracionPracticaCodPractica->NumeroSesionesPractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Horas','NumeroHorasPractica'); ?>
        <?php echo CHtml::textField('NumeroHorasPractica',$model->configuracionPracticaCodPractica->NumeroHorasPractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'Ejecutado');?>
        <?php echo $form->dropDownList($model,'Ejecutado', 
                                       array(
                                           'No'=>'No',
                                           'Si'=>'Si',
                                       ));?>
        <?php echo $form->error($model,'Ejecutado'); ?>
    </div>

	<div class="row">
        <?php echo $form->labelEx($model,'Supervisado');?>
        <?php echo $form->dropDownList($model,'Supervisado', 
                                       array(
                                           'No'=>'No',
                                           'Si'=>'Si',
                                       ));?>
        <?php echo $form->error($model,'Supervisado'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'ComentarioPlanificacion'); ?>
		<?php echo $form->textArea($model,'ComentarioPlanificacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ComentarioPlanificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>
	
	<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
    <?php endif; ?>

<?php $this->endWidget(); ?>

</div><!-- form -->