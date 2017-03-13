<div class="row">
		<?php echo $form->labelEx($centroModel,'RBD'); ?>
		<?php echo $form->textField($centroModel,'RBD'); ?>
		<?php echo $form->error($centroModel,'RBD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'NombreCentroPractica'); ?>
		<?php echo $form->textField($centroModel,'NombreCentroPractica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'NombreCentroPractica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'VigenciaProtocolo');?>
		<?php echo $form->dropDownList($centroModel,'VigenciaProtocolo',
								   array(
									   'Si'=>'Si',
									   'No'=>'No',
								   ));?>
		<?php echo $form->error($centroModel,'VigenciaProtocolo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'FechaProtocolo'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
						array(
							'model' => $centroModel,
							'language' => 'es',
							'attribute' => 'FechaProtocolo',
							'options' => array(
								'showAnim' => 'fold',
								'changeYear'=>'true',
								'dateFormat' => 'dd-mm-yy',
							),
							'htmlOptions'=>array('value'=>'Haga Click Aquí'),
						));?>
		<?php echo $form->error($centroModel,'FechaProtocolo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($centroModel,'AnexoProtocolo'); ?>
		<?php echo CHtml::activeFileField($centroModel,'AnexoProtocolo');?>
		<?php echo $form->error($centroModel,'AnexoProtocolo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Dependencia');?>
		<?php echo $form->dropDownList($centroModel,'Dependencia',
								   array(
									   'Municipal'=>'Municipal',
									   'Particular Subvencionado'=>'Particular Subvencionado',
									   'Particular'=>'Particular',
									   'Particular Pagado'=>'Particular Pagado',
								   ));?>
		<?php echo $form->error($centroModel,'Dependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'NivelEducacional');?>
		<?php echo $form->dropDownList($centroModel,'NivelEducacional',
								   array(
									   'Educacion PreBasica'=>'Educacion PreBasica',
									   'Educacion Basica'=>'Educacion Basica',
									   'Educacion Media'=>'Educacion Media',
									   'Educacion Superior'=>'Educacion Superior',
								   ));?>
		<?php echo $form->error($centroModel,'NivelEducacional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Area');?>
		<?php echo $form->dropDownList($centroModel,'Area',
								   array(
									   'Rural'=>'Rural',
									   'Urbano'=>'Urbano',
								   ));?>
		<?php echo $form->error($centroModel,'Area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Region_codRegion'); ?>
		<?php echo $form->dropDownList($centroModel,'Region_codRegion',CHtml::listData(Region::model()->findAll(),'codRegion','NombreRegion'),
								   array(
									   'ajax'=>array(
										   'type'=>'POST',
										   'url'=>CController::createUrl('Centropractica/selectProvincia'),
										   'update'=>'#'.CHtml::activeId($centroModel,'Provincia_codProvincia'),
										   'beforeSend'=>'function(){ $("#Centropractica_Provincia_codProvincia").find("option").remove();$("#Centropractica_Ciudad_codCiudad").find("option").remove();}',
									   ),
									   'prompt'=>'Seleccione'));?>
		<?php echo $form->error($centroModel,'Region_codRegion'); ?>
	</div>
	
	<?php //campo dropdownlist Provincia?>
	
	<div class="row">
		<?php echo $form->labelEx($centroModel,'Provincia_codProvincia'); ?>
		<?php
		$lista_dos=array();
		
		if(isset($centroModel->Provincia_codProvincia)){
		$id_uno=intval($centroModel->Region_codRegion);
		$lista_dos = CHtml::listData(Provincia::model()->findAll("Region_codRegion = '$id_uno'"),'codProvincia','NombreProvincia');
	}
	
	echo $form->dropDownList($centroModel,'Provincia_codProvincia',$lista_dos,
							 array(
								 'ajax'=>array(
									 'type'=>'POST',
									 'url'=>CController::createUrl('Centropractica/selectCiudad'),
									 'update'=>'#'.CHtml::activeId($centroModel,'Ciudad_codCiudad'),
									 'beforeSend'=>'function(){
									 $("#Centropractica_Ciudad_codCiudad").find("option").remove();}',
								 ),
								 'prompt'=>'Seleccione'
							 ));?>
	<?php echo $form->error($centroModel,'Provincia_codProvincia'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($centroModel,'Ciudad_codCiudad'); ?>
	<?php
	
	$lista_tres=array();
	
	if(isset($centroModel->Ciudad_codCiudad)){
		$id_dos=intval($centroModel->Provincia_codProvincia);
		$lista_tres = CHtml::listData(Ciudad::model()->findAll("Provincia_codProvincia = '$id_dos'"),'codCiudad','NombreCiudad');
	}
	
	echo $form->dropDownList($centroModel,'Ciudad_codCiudad',$lista_tres,array('prompt'=>'Seleccione'));?>
	<?php echo $form->error($centroModel,'Ciudad_codCiudad'); ?>
</div>

	<div class="row">
		<?php echo $form->labelEx($centroModel,'Calle'); ?>
		<?php echo $form->textField($centroModel,'Calle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($centroModel,'Calle'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($centroModel,'ImagenCentroPractica'); ?>
		<?php echo CHtml::activeFileField($centroModel,'ImagenCentroPractica');?>
		<?php echo $form->error($centroModel,'ImagenCentroPractica'); ?>
	</div>