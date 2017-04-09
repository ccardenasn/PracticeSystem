<?php
include_once('centro.php');
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
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	<?php $req=Yii::app()->request->getQuery('id'); ?>
	<?php $plandata=getPlanDataById($req); ?>
	
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="collapse">
		<h3>Planificación</h3>
		<ul>
			<div class="row">
				<?php echo $form->labelEx($model,'FechaBitacora'); ?>
				<?php echo $form->textField($model,'FechaBitacora',array('readOnly' => false,'size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'FechaBitacora'); ?>
			</div>
			
			<div class="row">
				<?php echo CHtml::label('Numero de Sesion','NumeroSesion'); ?>
				<?php echo CHtml::textField('NumeroSesion',$plandata[0],array('readOnly' => true)); ?>
				<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
			</div>
			
			<div class="row">
				<?php //echo $form->labelEx($model,'PlanificacionClase_CodPlanificacion'); ?>
				<?php echo $form->hiddenField($model,'PlanificacionClase_CodPlanificacion',array('type'=>"hidden",'readOnly' => true)); ?>
				<?php echo $form->error($model,'PlanificacionClase_CodPlanificacion'); ?>
			</div>
			
			<div class="row">
				<?php echo CHtml::label('Nombre Centro de Practica','NombreCentroPractica'); ?>
				<?php echo CHtml::textField('NombreCentroPractica',$plandata[1],array('readOnly' => true)); ?>
				<?php //echo $form->error($model,'NombrePracticaEstudiante'); ?>
			</div>
		</ul>
		
		<h3>Clases</h3>
		<ul>
			<table id="employee_table" align=center>
				<tr id="row1">
					<td>
						<input type="hidden" id="CodClase1" name="CodClase[]" size="14" placeholder="ID">
						<br><span class='error_text' id='CodClase1_error'></span>
					</td>
					<td>
						<input type="text" id="CursoClase1" name="CursoClase[]" size="14" placeholder="Curso">
						<br><span class='error_text' id='CursoClase_error'></span>
					</td>
					<td>
						<input type="text" id="HoraClase1" name="HoraClase[]" size="14" placeholder="Hora">
						<br><span class='error_text' id='HoraClase_error'></span>
					</td>
					<td>
						<input type="text" id="AsignaturaClase1" name="AsignaturaClase[]" size="14" placeholder="Asignatura">
						<br><span class='error_text' id='AsignaturaClase1_error'></span>
					</td>
					<td>
						<input type="text" id="ProfesorGuiaClase1" name="ProfesorGuiaClase[]" size="14" placeholder="Profesor Guia">
						<br><span class='error_text' id='ProfesorGuiaClase1_error'></span>
					</td>
					<td>
						<input type="text" id="NumeroAlumnosClase1" name="NumeroAlumnosClase[]" size="14" placeholder="Numero de Alumnos">
						<br><span class='error_text' id='NumeroAlumnosClase1_error'></span>
					</td>
					<td>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
	</body>