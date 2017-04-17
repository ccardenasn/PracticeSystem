<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */
/* @var $form CActiveForm */
$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/tabularInputCentro/tabularInputFunctions.js');
$js->registerScriptFile($base.'/tabularInputCentro/validateTabularFunctions.js');

//print_r($profesorModel);
$totalProfesorModel= count($profesorModel);

echo '<script type="text/javascript">
	var totalProfesoresCentro = "'.$totalProfesorModel.'"; 
</script>';

for($i=0;$i<$totalProfesorModel;$i++){
	$profesorArray['RutProfGuiaCP'][$i] = $profesorModel[$i]['RutProfGuiaCP'];
	$profesorArray['NombreProfGuiaCP'][$i] = $profesorModel[$i]['NombreProfGuiaCP'];
	$profesorArray['CursoProfGuiaCP'][$i] = $profesorModel[$i]['CursoProfGuiaCP'];
	$profesorArray['MailProfGuiaCP'][$i] = $profesorModel[$i]['MailProfGuiaCP'];
	$profesorArray['TelefonoProfGuiaCP'][$i] = $profesorModel[$i]['TelefonoProfGuiaCP'];
	$profesorArray['CelularProfGuiaCP'][$i] = $profesorModel[$i]['CelularProfGuiaCP'];
	$profesorArray['ProfesorJefeProfGuiaCP'][$i] = $profesorModel[$i]['ProfesorJefeProfGuiaCP'];
}
?>

<script type="text/javascript">
	var profesoresData = <?php echo json_encode($profesorArray); ?>; 
	
</script>

<body onload="javascript:setUpdateRows(totalProfesoresCentro)">
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

	<?php echo $form->errorSummary(array($centroModel,$secretariaModel,$directorModel,$jefeutpModel,$coordinadorModel)); ?>

	<div class="collapse">
		<h3>Centro de Práctica</h3>
		<ul>
			<?php $this->renderPartial('centroPracticaUpdateForm', array('form'=>$form,'centroModel'=>$centroModel)); ?>
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
			<table id="employee_table" align=center>
				<tr id="row1">
					<td>
						<input type="text" id="Rut1" name="RutProfGuiaCP[]" size="14" placeholder="Rut" onblur="validateRut('Rut1');">
						<br><span class='error_text' id='Rut1_error'></span>
						<input type="text" id="Mail1" name="MailProfGuiaCP[]" size="14" placeholder="Mail" onblur="check_email('Mail1');">
						<br><span class='error_text' id='Mail1_error'></span>
					</td>
					<td>
						<input type="text" id="Nombre1" name="NombreProfGuiaCP[]" size="14" placeholder="Nombre" onblur="validateName('Nombre1');">
						<br><span class='error_text' id='Nombre1_error'></span>
						<input type="text" id="Telefono1" name="TelefonoProfGuiaCP[]" size="14" placeholder="Telefono" onblur="validateTelefono('Telefono1');">
						<br><span class='error_text' id='Telefono1_error'></span>
					</td>
					<td>
						<input type="text" id="Curso1" name="CursoProfGuiaCP[]" size="14" placeholder="Curso">
						<br><span class='error_text' id='Curso1_error'></span>
						<input type="text" id="Celular1" name="CelularProfGuiaCP[]" size="14" placeholder="Celular" onblur="validateCelular('Celular1');">
						<br><span class='error_text' id='Celular1_error'></span>
					</td>
					<td>
						<select id="ProfesorJefe1" name="ProfesorJefeProfGuiaCP[]" style="width:130px">
							<option value="Si" selected>Si</option>
							<option value="No" selected>No</option>
							<option value="No Aplica" selected>No Aplica</option>
						</select>
						<br><span class='error_text' id='ProfesorJefe1_error'></span>
						<input type="file" id="Imagen1" name="ImagenProfGuiaCP[]"  size="14"><br><span class='error_text' id='Imagen1_error'></span>
					</td>
					<td>
						<input type='button' value='x' onclick="javascript:delete_row('row1');">
					</td>
				</tr>
			</table>
			<input type="button" onclick="add_row();" value="+">
		</ul>
	</div>
	
	<?php $this->widget('ext.ECollapse.ECollapse'); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($centroModel->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>
	
	<?php $this->endWidget(); ?>
	
	</div><!-- form -->
</body>