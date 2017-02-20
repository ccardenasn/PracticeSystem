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

	<?php echo $form->errorSummary(array($centroModel,$secretariaModel)); ?>
	
	<div class="collapse">
		<h3>Centro de Práctica</h3>
		<ul>
			<?php $this->renderPartial('centroPracticaForm', array('form'=>$form,'centroModel'=>$centroModel)); ?>
		</ul>
		
		<h3>Secretaria CP</h3>
		<ul>
			<?php $this->renderPartial('secretariaCPForm', array('form'=>$form,'secretariaModel'=>$secretariaModel)); ?>
		</ul>
	</div>
	
	<?php $this->widget('ext.ECollapse.ECollapse'); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($centroModel->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->