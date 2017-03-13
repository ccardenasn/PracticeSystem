<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'centropractica-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data','autoComplete'=>'false'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($centroModel,$secretariaModel,$directorModel,$jefeutpModel,$coordinadorModel,$profesorModel)); ?>

	<div class="collapse">
		<h3>Centro de Práctica</h3>
		<ul>
			<?php $this->renderPartial('centroPracticaForm', array('form'=>$form,'centroModel'=>$centroModel)); ?>
		</ul>
		
		<h3>Secretaria CP</h3>
		<ul>
			<?php $this->renderPartial('secretariaCPForm', array('form'=>$form,'secretariaModel'=>$secretariaModel)); ?>
		</ul>
		
		<h3>Director CP</h3>
		<ul>
			<?php $this->renderPartial('directorCPForm', array('form'=>$form,'directorModel'=>$directorModel)); ?>
		</ul>
		
		<h3>Jefe UTP CP</h3>
		<ul>
			<?php $this->renderPartial('jefeutpCPForm', array('form'=>$form,'jefeutpModel'=>$jefeutpModel)); ?>
		</ul>
		
		<h3>Profesor Coordinador de Prácticas CP</h3>
		<ul>
			<?php $this->renderPartial('coordinadorCPForm', array('form'=>$form,'coordinadorModel'=>$coordinadorModel)); ?>
		</ul>
		
		<h3>Profesor Guía CP</h3>
		<ul>
			<?php $this->renderPartial('profesorCPForm', array('form'=>$form,'profesorModel'=>$profesorModel)); ?>
		</ul>
		
	</div>
	
	<?php $this->widget('ext.ECollapse.ECollapse'); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($centroModel->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->