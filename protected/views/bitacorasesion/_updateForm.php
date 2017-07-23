<?php
/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */
/* @var $form CActiveForm */
$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/tabularInputBitacora/tabularInputFunctions.js');
$js->registerScriptFile($base.'/tabularInputBitacora/validateTabularFunctions.js');

$totalClaseModel= count($claseBitacoraModel);

echo '<script type="text/javascript">
	var totalClaseBitacora = "'.$totalClaseModel.'"; 
</script>';

for($i=0;$i<$totalClaseModel;$i++){
	$claseBitacoraArray['CodClase'][$i] = $claseBitacoraModel[$i]['CodClase'];
	$claseBitacoraArray['CursoClase'][$i] = $claseBitacoraModel[$i]['CursoClase'];
	$claseBitacoraArray['HoraClase'][$i] = $claseBitacoraModel[$i]['HoraClase'];
	$claseBitacoraArray['AsignaturaClase'][$i] = $claseBitacoraModel[$i]['AsignaturaClase'];
	$claseBitacoraArray['ProfesorGuiaClase'][$i] = $claseBitacoraModel[$i]['ProfesorGuiaClase'];
	$claseBitacoraArray['NumeroAlumnosClase'][$i] = $claseBitacoraModel[$i]['NumeroAlumnosClase'];
}
$req=Yii::app()->request->getQuery('id');

$logBookData=Bitacorasesionadmin::model()->find('CodBitacora=?',array($req));
$planningData=Planificacionclaseadministrador::model()->find('CodPlanificacion=?',array($logBookData->PlanificacionClase_CodPlanificacion));

?>

<script type="text/javascript">
	var clasesData = <?php echo json_encode($claseBitacoraArray); ?>; 
	
</script>

<body onload="javascript:setUpdateRows(totalClaseBitacora)">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bitacorasesion-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
    'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
)); ?>
	
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,'<strong>El formulario contiene los siguientes errores:</strong>'); ?>

	<div class="collapse">
		<h3>Planificación</h3>
		<ul>
			<div class="row">
				<?php echo CHtml::label('Fecha de Sesión','FechaBitacora'); ?>
				<?php echo CHtml::textField('FechaBitacora',$planningData->Fecha,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
			</div>
			
			<div class="row">
				<?php echo CHtml::label('Numero de Sesión','NumeroSesion'); ?>
				<?php echo CHtml::textField('NumeroSesion',$planningData->SesionInformada,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
			</div>
			
			<div class="row">
				<?php //echo $form->labelEx($model,'PlanificacionClase_CodPlanificacion'); ?>
				<?php echo $form->hiddenField($model,'PlanificacionClase_CodPlanificacion',array('type'=>"hidden",'readOnly' => true)); ?>
				<?php echo $form->error($model,'PlanificacionClase_CodPlanificacion'); ?>
			</div>
			
			<div class="row">
				<?php echo CHtml::label('Centro de Práctica','NombreCentroPractica'); ?>
				<?php echo CHtml::textField('NombreCentroPractica',$planningData->centroPracticaRBD->NombreCentroPractica,array('readOnly' => true,'disabled'=>'disabled','size'=>45,'maxlength'=>45)); ?>
				<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
			</div>
		</ul>
		
		<h3>Clases</h3>
		<ul>
            <div id='errorClases' class='flash-error' style="display:none"><p><strong>¡Advertencia!</strong></p><ul><li>Debe corregir los errores presentados en <strong>Clases</strong>.</li></ul></div>
            <div id='errorBorrar' class='flash-error' style="display:none"><p><strong>¡Advertencia!</strong></p><ul><li>Debe mantener una clase al menos.</li></ul></div>
			<table id="employee_table" align=center>
				<tr id="row1">
					<td>
						<input type="hidden" id="CodClase1" name="CodClase[]" size="14" placeholder="ID">
						<br><span class='error_text' id='CodClase1_error'></span>
					</td>
					<td>
                        <label>Curso</label>
						<input type="text" id="CursoClase1" name="CursoClase[]" size="14" required>
						<br><span class='error_text' id='CursoClase1_error'></span>
					</td>
					<td>
                        <label>Horas</label>
						<input type="text" id="HoraClase1" name="HoraClase[]" size="14" onblur="validateNumero('HoraClase1');" required>
						<br><span class='error_text' id='HoraClase1_error'></span>
					</td>
					<td>
                        <label>Asignatura</label>
						<input type="text" id="AsignaturaClase1" name="AsignaturaClase[]" size="14" required>
						<br><span class='error_text' id='AsignaturaClase1_error'></span>
					</td>
					<td>
                        <label>Profesor Guía</label>
						<input type="text" id="ProfesorGuiaClase1" name="ProfesorGuiaClase[]" size="14" onblur="validateName('ProfesorGuiaClase1');" required>
						<br><span class='error_text' id='ProfesorGuiaClase1_error'></span>
					</td>
					<td>
                        <label>Número de Alumnos</label>
						<input type="text" id="NumeroAlumnosClase1" name="NumeroAlumnosClase[]" size="14" onblur="validateNumero('NumeroAlumnosClase1');" required>
						<br><span class='error_text' id='NumeroAlumnosClase1_error'></span>
					</td>
					<td>
                        <label>-</label>
						<input type='button' value='x' onclick="javascript:delete_row('row1');">
					</td>
				</tr>
			</table>
			
			<input type="button" onclick="add_rowUpdate();" value="+">
		</ul>
		
		<h3>Evaluación</h3>
		<ul>
			<div class="row">
				<?php echo $form->labelEx($model,'ActividadesBitacora'); ?>
				<?php echo $form->textArea($model,'ActividadesBitacora',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'ActividadesBitacora'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'AprendizajeBitacora'); ?>
				<?php echo $form->textArea($model,'AprendizajeBitacora',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'AprendizajeBitacora'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'SentirBitacora'); ?>
				<?php echo $form->textArea($model,'SentirBitacora',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'SentirBitacora'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'OtroBitacora'); ?>
				<?php echo $form->textArea($model,'OtroBitacora',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'OtroBitacora'); ?>
			</div>
		</ul>
		
		<h3>Documentación</h3>
		<ul>
			<div class="row">
				<?php echo $form->labelEx($model,'DocumentoBitacora'); ?>
				<?php echo CHtml::activeFileField($model,'DocumentoBitacora');?>
				<?php echo $form->error($model,'DocumentoBitacora'); ?>
			</div>
		</ul>
	</div>
	
	<?php $this->widget('ext.ECollapse.ECollapse'); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios',array('onclick'=>"return checkForm(); return false")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
	</body>