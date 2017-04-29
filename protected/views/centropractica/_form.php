<?php
/* @var $this CentropracticaController */
/* @var $model Centropractica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'centropractica-form',
	'method'=>'post',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RBD'); ?>
		<?php echo $form->textField($model,'RBD'); ?>
		<?php echo $form->error($model,'RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreCentroPractica'); ?>
		<?php echo $form->textField($model,'NombreCentroPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NombreCentroPractica'); ?>
	</div>
	
	<div class="row">
        <?php echo $form->labelEx($model,'VigenciaProtocolo');?>
        <?php echo $form->dropDownList($model,'VigenciaProtocolo', 
                                       array(
                                           'Si'=>'Si',
                                           'No'=>'No',
                                       ));?>
        <?php echo $form->error($model,'VigenciaProtocolo'); ?>
    </div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'FechaProtocolo'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'language' => 'es',
                    'attribute' => 'FechaProtocolo',
                    'options' => array(
                        'showAnim' => 'fold',
                        'changeYear'=>'true',
                        'dateFormat' => 'dd-mm-yy',
                    ),
	'htmlOptions'=>array('value'=>'Haga Click Aquí'),
            ));?>
		<?php echo $form->error($model,'FechaProtocolo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AnexoProtocolo'); ?>
		<?php echo CHtml::activeFileField($model,'AnexoProtocolo');?>
		<?php echo $form->error($model,'AnexoProtocolo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Dependencia_CodDependencia'); ?>
		<?php echo $form->dropDownList($model,'Dependencia_CodDependencia',CHtml::listData(Dependencia::model()->findAll(),'CodDependencia','NombreDependencia'));?>
        <?php echo $form->error($model,'Dependencia_CodDependencia'); ?>
	</div>
	
	<div class="row">
        <?php echo $form->labelEx($model,'Area');?>
        <?php echo $form->dropDownList($model,'Area', 
                                       array(
                                           'Rural'=>'Rural',
                                           'Urbano'=>'Urbano',
                                       ));?>
        <?php echo $form->error($model,'Area'); ?>
    </div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'NivelEducacional_CodNivel'); ?>
		<?php echo $form->dropDownList($model,'NivelEducacional_CodNivel',CHtml::listData(Niveleducacional::model()->findAll(),'CodNivel','NombreNivel'));?>
        <?php echo $form->error($model,'NivelEducacional_CodNivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Region_codRegion'); ?>
		<?php echo $form->dropDownList($model,'Region_codRegion',CHtml::listData(Region::model()->findAll(),'codRegion','NombreRegion'),
				array(
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Centropractica/selectProvincia'),
						'update'=>'#'.CHtml::activeId($model,'Provincia_codProvincia'),
						'beforeSend'=>'function(){
						$("#Centropractica_Provincia_codProvincia").find("option").remove();
						$("#Centropractica_Ciudad_codCiudad").find("option").remove();
						}',
					),'prompt'=>'Seleccione'
				)
		);?>
		<?php echo $form->error($model,'Region_codRegion'); ?>
	</div>

	<?php //campo dropdownlist Provincia?>
	<div class="row">
		<?php echo $form->labelEx($model,'Provincia_codProvincia'); ?>
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
						'url'=>CController::createUrl('Centropractica/selectCiudad'),
						'update'=>'#'.CHtml::activeId($model,'Ciudad_codCiudad'),
						'beforeSend'=>'function(){
						$("#Centropractica_Ciudad_codCiudad").find("option").remove();
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

	<div class="row">
		<?php echo $form->labelEx($model,'Calle'); ?>
		<?php echo $form->textField($model,'Calle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Calle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImagenCentroPractica'); ?>
		<?php echo CHtml::activeFileField($model,'ImagenCentroPractica');?>
		<?php echo $form->error($model,'ImagenCentroPractica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->