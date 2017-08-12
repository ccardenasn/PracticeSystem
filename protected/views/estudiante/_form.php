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
		<?php echo $form->labelEx($model,'RutEstudiante'); ?>
		<?php echo $form->textField($model,'RutEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RutEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreEstudiante'); ?>
		<?php echo $form->textField($model,'NombreEstudiante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaIncorporacion'); ?>
		<?php echo $form->textField($model,'FechaIncorporacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FechaIncorporacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mencion_CodMencion'); ?>
		<?php echo $form->dropDownList($model,'Mencion_CodMencion',CHtml::listData(Mencion::model()->findAll(),'CodMencion','NombreMencion'));?>
        <?php echo $form->error($model,'Mencion_CodMencion'); ?>
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
	
	<?php
	
	$centrosData = Centropractica::model()->findAll();
	$arrCentros = array();
	
	foreach ($centrosData as $centro){
		$arrCentros[$centro->RBD] = $centro->RBD.' '.$centro->NombreCentroPractica; 
	}
		 
	
	?>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'CentroPractica_RBD'); ?>
		<?php echo $form->dropDownList($model,'CentroPractica_RBD',$arrCentros,
				array(
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Estudiante/selectProfesor'),
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
		<?php echo $form->labelEx($model,'Profesor Guia C P'); ?>
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
		<?php echo $form->labelEx($model,'ConfiguracionPractica_CodPractica'); ?>
		<?php echo $form->dropDownList($model,'ConfiguracionPractica_CodPractica',CHtml::listData(Configuracionpractica::model()->findAll(),'CodPractica','NombrePractica'));?>
        <?php echo $form->error($model,'ConfiguracionPractica_CodPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenEstudiante'); ?>
        <?php echo $form->fileField($model,'ImagenEstudiante');?>
		<?php //echo CHtml::activeFileField($model,'ImagenEstudiante');?>
		<?php echo $form->error($model,'ImagenEstudiante'); ?>
	</div>
	
	<div class="row">
        <?php echo $form->labelEx($model,'SituacionFinalEstudiante');?>
        <?php echo $form->dropDownList($model,'SituacionFinalEstudiante', 
                                       array(
                                           'Pendiente'=>'Pendiente',
                                           'Aprobado'=>'Aprobado',
                                           'Reprobado'=>'Reprobado',
                                       ));?>
        <?php echo $form->error($model,'SituacionFinalEstudiante'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'ObservacionEstudiante'); ?>
		<?php echo $form->textArea($model,'ObservacionEstudiante',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ObservacionEstudiante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
	