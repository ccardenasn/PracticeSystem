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
	'clientOptions'=>array('validateOnSubmit'=>true),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($universidadModel,$carreraModel),'<strong>El formulario contiene los siguientes errores:</strong>'); ?>
	
	<?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="row buttons">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
    <?php endif; ?>
	
	<div class="collapse">
		<h3>Universidad</h3>
		<ul>
			<?php $this->renderPartial('universidadForm', array('form'=>$form,'universidadModel'=>$universidadModel)); ?>
		</ul>
		
		<h3>Carrera</h3>
		<ul>
			<?php $this->renderPartial('carreraForm', array('form'=>$form,'carreraModel'=>$carreraModel)); ?>
		</ul>
	</div>
	
	<?php $this->widget('ext.ECollapse.ECollapse'); ?>
	
	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($universidadModel->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->