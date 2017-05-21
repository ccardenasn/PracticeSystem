<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'universidad-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($universidadModel,$carreraModel,$secretariaModel)); ?>
	
	<div class="collapse">
		<h3>Universidad</h3>
		<ul>
			<?php $this->renderPartial('universidadForm', array('form'=>$form,'universidadModel'=>$universidadModel)); ?>
		</ul>
		
		<h3>Carrera</h3>
		<ul>
			<?php $this->renderPartial('carreraForm', array('form'=>$form,'carreraModel'=>$carreraModel)); ?>
		</ul>
		
		<h3>Secretaria</h3>
		<ul>
			<?php $this->renderPartial('secretariaForm', array('form'=>$form,'secretariaModel'=>$secretariaModel)); ?>
		</ul>
	</div>
	
	<?php $this->widget('ext.ECollapse.ECollapse'); ?>
	
	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($universidadModel->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->