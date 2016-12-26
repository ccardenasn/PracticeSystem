<?php
include_once('centro.php');
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('DynamicTabularForm', array(
	'id'=>'bitacorasesion-form',
	'defaultRowView'=>'_contact_form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php $req=Yii::app()->request->getQuery('id'); ?>
	<?php $plandata=getPlanData($req); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('value'=>$plandata[2],'readOnly' => true)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Numero de Sesion','NumeroSesion'); ?>
        <?php echo CHtml::textField('NumeroSesion',$plandata[0],array('readOnly' => true)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<div class="row">
		<?php //echo $form->labelEx($model,'PlanificacionClase_CodPlanificacion'); ?>
		<?php echo $form->hiddenField($model,'PlanificacionClase_CodPlanificacion',array('type'=>"hidden",'value'=>$req,'readOnly' => true)); ?>
		<?php echo $form->error($model,'PlanificacionClase_CodPlanificacion'); ?>
	</div>
	
	<div class="row">
        <?php echo CHtml::label('Nombre Centro de Practica','NombreCentroPractica'); ?>
        <?php echo CHtml::textField('NombreCentroPractica',$plandata[1],array('readOnly' => true)); ?>
		<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
	</div>
	
	<br/>
	<h2>Clases</h2>
	<div class="row clearfix">	
	</div>

	<div id="tabular-content">
		<?php echo $form->rowForm($contacts) ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'actividades'); ?>
		<?php echo $form->textArea($model,'actividades',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'actividades'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'aprendizaje'); ?>
		<?php echo $form->textArea($model,'aprendizaje',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'aprendizaje'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sentir'); ?>
		<?php echo $form->textArea($model,'sentir',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sentir'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'otro'); ?>
		<?php echo $form->textArea($model,'otro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'otro'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->