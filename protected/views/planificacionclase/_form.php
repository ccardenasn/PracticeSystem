<?php
include_once('planificacion.php');
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

	<?php echo $form->errorSummary($model); ?>
	
	<?php
    $estudiantelogged=Yii::app()->user->name;
    $arrdata=datosplanificacion($estudiantelogged);
    ?>

	<div class="row">
		<?php $model->Estudiante_RutEstudiante=$estudiantelogged;?>
		<?php echo $form->labelEx($model,'Estudiante_RutEstudiante'); ?>
		<?php echo $form->textField($model,'Estudiante_RutEstudiante',array('size'=>45,'maxlength'=>45,'readOnly' => true)); ?>
		<?php echo $form->error($model,'Estudiante_RutEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Nombre Estudiante','NombreEstudiante'); ?>
        <?php echo CHtml::textField('NombreEstudiante',$arrdata[0],array('readOnly' => true,'size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentModel,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($studentModel,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'),
				array(
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Planificacionclase/selectProfesor'),
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
		<?php echo $form->textField($model,'Curso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Curso'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ConfiguracionPractica_NombrePractica'); ?>
		<?php echo $form->dropDownList($model,'ConfiguracionPractica_NombrePractica',CHtml::listData(configuracionpractica::model()->findAll(),'NombrePractica','NombrePractica'),array('options' => array($arrdata[3]=>array('selected'=>true))));?>
        <?php echo $form->error($model,'ConfiguracionPractica_NombrePractica'); ?>
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
					'htmlOptions'=>array('value'=>'Haga Click Aquí'),
            ));?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'SesionInformada');?>
        <?php echo $form->dropDownList($model,'SesionInformada',listsesion($arrdata[5],$model->Estudiante_RutEstudiante));?>
        <?php echo $form->error($model,'SesionInformada'); ?>
    </div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Sesiones','NumeroSesionesPractica'); ?>
        <?php echo CHtml::textField('NumeroSesionesPractica',$arrdata[5],array('readOnly' => true,'size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Horas','NumeroHorasPractica'); ?>
        <?php echo CHtml::textField('NumeroHorasPractica',$arrdata[6],array('readOnly' => true,'size'=>45,'maxlength'=>45)); ?>
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