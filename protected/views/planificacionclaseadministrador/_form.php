<?php
include_once('planningFunctions.php');
/* @var $this PlanificacionclaseadministradorController */
/* @var $model Planificacionclaseadministrador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'planificacionclaseadministrador-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true, 
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($model,$studentModel),'<strong>El formulario contiene los siguientes errores:</strong>'); ?>
   
    <?php 
    $req=Yii::app()->request->getQuery('id');
    $studentData=Estudiante::model()->find('RutEstudiante=?',array($req));
    $profesorData=Profesorguiacp::model()->find('RutProfGuiaCP=?',array($studentData->ProfesorGuiaCP_RutProfGuiaCP));
    ?>
    
	<div class="row">
		<?php //echo $form->labelEx($model,'Estudiante_RutEstudiante'); ?>
		<?php echo $form->hiddenField($model,'Estudiante_RutEstudiante',array('value'=>$req,'readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estudiante_RutEstudiante'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Rut Estudiante','Estudiante_RutEstudiante'); ?>
        <?php echo CHtml::textField('Estudiante_RutEstudiante',$req,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Nombre Estudiante','NombreEstudiante'); ?>
        <?php echo CHtml::textField('NombreEstudiante',$studentData->NombreEstudiante,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<?php
	
	$centrosData = Centropractica::model()->findAll();
	$arrCentros = array();
	
	foreach ($centrosData as $centro){
		$arrCentros[$centro->RBD] = $centro->RBD.' '.$centro->NombreCentroPractica; 
	}
	
	?>
	
	<div class="row">
		<?php echo $form->labelEx($studentModel,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($studentModel,'CentroPractica_RBD',$arrCentros,
				array(
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Planificacionclaseadministrador/selectProfesorCreate'),
						'update'=>'#'.CHtml::activeId($studentModel,'ProfesorGuiaCP_RutProfGuiaCP'),
						'beforeSend'=>'function(){
						$("#Centropractica_ProfesorGuiaCP_RutProfGuiaCP").find("option").remove();
						$("#Centropractica_ProfesorGuiaCP_RutProfGuiaCP").find("option").remove();
						}',
					),'prompt'=>'Seleccione'
				)
		);?>
		<?php echo $form->error($studentModel,'CentroPractica_RBD'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($studentModel,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php 
		$lista_dos=array();
		if(isset($studentModel->ProfesorGuiaCP_RutProfGuiaCP)){
			$id_uno=intval($studentModel->CentroPractica_RBD);
			$lista_dos = CHtml::listData(Profesorguiacp::model()->findAll("CentroPractica_RBD = '$id_uno'"),'RutProfGuiaCP','NombreProfGuiaCP');
		}
		echo $form->dropDownList($studentModel,'ProfesorGuiaCP_RutProfGuiaCP',$lista_dos,
				array('prompt'=>'Seleccione')
		);?>
		<?php echo $form->error($studentModel,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Curso'); ?>
		<?php echo $form->textField($model,'Curso',array('value'=>$profesorData->CursoProfGuiaCP,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Curso'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php //echo $form->dropDownList($model,'ConfiguracionPractica_CodPractica',CHtml::listData(configuracionpractica::model()->findAll(),'CodPractica','NombrePractica'),array('options' => array($studentData->ConfiguracionPractica_CodPractica=>array('selected'=>true))));?>
        <?php //echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>-->
    
    <div class="row">
		<?php //echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
        <?php echo $form->hiddenField($model,'ConfiguracionPractica_CodPractica',array('value'=>$studentData->ConfiguracionPractica_CodPractica,'readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>
    
    <div class="row">
        <?php echo CHtml::label('Práctica','ConfiguracionPractica_CodPractica'); ?>
        <?php echo CHtml::textField('ConfiguracionPractica_CodPractica',$studentData->configuracionPracticaCodPractica->NombrePractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
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
        <?php echo $form->labelEx($model,'SesionInformada');?>
        <?php echo $form->dropDownList($model,'SesionInformada',listsesion($studentData->configuracionPracticaCodPractica->NumeroSesionesPractica,$req));?>
        <?php echo $form->error($model,'SesionInformada'); ?>
    </div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Sesiones','NumeroSesionesPractica'); ?>
        <?php echo CHtml::textField('NumeroSesionesPractica',$studentData->configuracionPracticaCodPractica->NumeroSesionesPractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Horas','NumeroHorasPractica'); ?>
        <?php echo CHtml::textField('NumeroHorasPractica',$studentData->configuracionPracticaCodPractica->NumeroHorasPractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
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
    
    <div class="row">
		<?php echo $form->labelEx($model,'DocumentoPlanificacion'); ?>
        <?php //echo $form->fileField($model,'DocumentoPlanificacion');?>
		<?php echo CHtml::activeFileField($model,'DocumentoPlanificacion');?>
		<?php echo $form->error($model,'DocumentoPlanificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->