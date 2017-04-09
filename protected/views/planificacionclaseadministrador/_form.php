<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseadministradorController */
/* @var $model Planificacionclaseadministrador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'planificacionclaseadministrador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->errorSummary($model); ?>
	<?php $req=Yii::app()->request->getQuery('id'); ?>
	<?php $arrdata=datosplanificacion($req); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Estudiante_RutEstudiante'); ?>
		<?php echo $form->textField($model,'Estudiante_RutEstudiante',array('value'=>$req,'readOnly'=>true,'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estudiante_RutEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Nombre Estudiante','NombreEstudiante'); ?>
        <?php echo CHtml::textField('NombreEstudiante',$arrdata[0],array('readOnly' => true)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',CHtml::listData(Centropractica::model()->findAll(),'RBD','NombreCentroPractica','RBD'),array('options' => array($arrdata[7]=>array('selected'=>true))));?>
        <?php echo $form->error($model,'CentroPractica_RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
		<?php echo $form->dropDownList($model,'ProfesorGuiaCP_RutProfGuiaCP',CHtml::listData(Profesorguiacp::model()->findAll(),'RutProfGuiaCP','NombreProfGuiaCP','RutProfGuiaCP'),array('options' => array($arrdata[1]=>array('selected'=>true))));?>
        <?php echo $form->error($model,'ProfesorGuiaCP_RutProfGuiaCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Curso'); ?>
		<?php echo $form->textField($model,'Curso',array('value'=>$arrdata[4],'size'=>45,'maxlength'=>45)); ?>
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
        <?php echo $form->dropDownList($model,'SesionInformada',listsesion($arrdata[5],$req));?>
        <?php echo $form->error($model,'SesionInformada'); ?>
    </div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Sesiones','NumeroSesionesPractica'); ?>
        <?php echo CHtml::textField('NumeroSesionesPractica',$arrdata[5],array('readOnly' => true)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Horas','NumeroHorasPractica'); ?>
        <?php echo CHtml::textField('NumeroHorasPractica',$arrdata[6],array('readOnly' => true)); ?>
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

<?php $this->endWidget(); ?>

</div><!-- form -->