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
	$claseBitacoraArray['id'][$i] = $claseBitacoraModel[$i]['id'];
	$claseBitacoraArray['curso'][$i] = $claseBitacoraModel[$i]['curso'];
	$claseBitacoraArray['hora'][$i] = $claseBitacoraModel[$i]['hora'];
	$claseBitacoraArray['asignatura'][$i] = $claseBitacoraModel[$i]['asignatura'];
	$claseBitacoraArray['profesorguia'][$i] = $claseBitacoraModel[$i]['profesorguia'];
	$claseBitacoraArray['numeroalumnos'][$i] = $claseBitacoraModel[$i]['numeroalumnos'];
}

?>

<script type="text/javascript">
	var clasesData = <?php echo json_encode($claseBitacoraArray); ?>; 
	
</script>

<body onload="javascript:setUpdateRows(totalClaseBitacora)">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bitacorasesion-form',
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
				<?php echo $form->labelEx($model,'fecha'); ?>
				<?php echo $form->textField($model,'fecha',array('readOnly' => false,'size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'fecha'); ?>
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
						<input type="hidden" id="id1" name="id[]" size="14" placeholder="ID">
						<br><span class='error_text' id='id1_error'></span>
					</td>
					<td>
						<input type="text" id="curso1" name="curso[]" size="14" placeholder="Curso">
						<br><span class='error_text' id='curso1_error'></span>
					</td>
					<td>
						<input type="text" id="hora1" name="hora[]" size="14" placeholder="Hora">
						<br><span class='error_text' id='hora1_error'></span>
					</td>
					<td>
						<input type="text" id="asignatura1" name="asignatura[]" size="14" placeholder="Asignatura">
						<br><span class='error_text' id='asignatura1_error'></span>
					</td>
					<td>
						<input type="text" id="profesorguia1" name="profesorguia[]" size="14" placeholder="Profesor Guia">
						<br><span class='error_text' id='profesorguia1_error'></span>
					</td>
					<td>
						<input type="text" id="numeroalumnos1" name="numeroalumnos[]" size="14" placeholder="Numero de Alumnos">
						<br><span class='error_text' id='numeroalumnos1_error'></span>
					</td>
					<td>
						<input type='button' value='x' onclick="javascript:delete_row('row1');">
					</td>
				</tr>
			</table>
			
			<input type="button" onclick="add_row();" value="+">
		</ul>
		
		<h3>Evaluación</h3>
		<ul>
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
		</ul>
	</div>
	
	<?php $this->widget('ext.ECollapse.ECollapse'); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
	</body>