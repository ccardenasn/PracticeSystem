<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carrera-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codCarrera'); ?>
		<?php echo $form->textField($model,'codCarrera',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codCarrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreCarrera'); ?>
		<?php echo $form->textField($model,'NombreCarrera',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreCarrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sede'); ?>
		<?php echo $form->textField($model,'Sede',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Sede'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Región'); ?>
		<?php echo $form->dropDownList($model,'Region_codRegion',CHtml::listData(Region::model()->findAll(),'codRegion','NombreRegion'),
				array(
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Carrera/selectProvincia'),
						'update'=>'#'.CHtml::activeId($model,'Provincia_codProvincia'),
						'beforeSend'=>'function(){
						$("#Carrera_Provincia_codProvincia").find("option").remove();
						$("#Carrera_Ciudad_codCiudad").find("option").remove();
						}',
					),'prompt'=>'Seleccione'
				)
		);?>
		<?php echo $form->error($model,'Region_codRegion'); ?>
	</div>
    
	<?php //campo dropdownlist Provincia?>
	<div class="row">
		<?php echo $form->labelEx($model,'Provincia'); ?>
		<?php 
		$lista_dos=array();
		if(isset($model->Provincia_codProvincia)){
			$id_uno=intval($model->Region_codRegion);
			$lista_dos = CHtml::listData(Provincia::model()->findAll("Region_codRegion = '$id_uno'"),'codProvincia','NombreProvincia');
		}
		echo $form->dropDownList($model,'Provincia_codProvincia',$lista_dos,
				array(
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Carrera/selectCiudad'),
						'update'=>'#'.CHtml::activeId($model,'Ciudad_codCiudad'),
						'beforeSend'=>'function(){
						$("#Carrera_Ciudad_codCiudad").find("option").remove();
						}',
					),'prompt'=>'Seleccione'
				)
		);?>
		<?php echo $form->error($model,'Provincia_codProvincia'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad_codCiudad'); ?>
		<?php 
		$lista_tres=array();
		if(isset($model->Ciudad_codCiudad)){
			$id_dos=intval($model->Provincia_codProvincia);
			$lista_tres = CHtml::listData(Ciudad::model()->findAll("Provincia_codProvincia = '$id_dos'"),'codCiudad','NombreCiudad');
		}
		
		echo $form->dropDownList($model,'Ciudad_codCiudad',$lista_tres,
					array('prompt'=>'Seleccione')
		);?>
		<?php echo $form->error($model,'Ciudad_codCiudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->