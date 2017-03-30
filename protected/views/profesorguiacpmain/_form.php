<?php
include_once('connect.php');
/* @var $this ProfesorguiacpmainController */
/* @var $model Profesorguiacp */
/* @var $form CActiveForm */

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/tabularInputControls/tabularInputFunctions.js');
$js->registerScriptFile($base.'/tabularInputControls/validateTabularFunctions.js');

$data="";

while($rows = mysql_fetch_array($stmt)){
$data=$data."<option value=".$rows['RBD'].">".$rows['NombreCentroPractica']."</option>";
}

echo '<script type="text/javascript">
	var selectData = "'.$data.'"; 
</script>';

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesorguiacp-form',
	'method'=>'post',
	//'enableAjaxValidation'=>true,
	//'enableClientValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data','autoComplete'=>'false'),
	//'clientOptions'=>array('validateOnSubmit'=>true,),

	'enableAjaxValidation'=>false,
)); ?>

	
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<form method="post" action="<?php Yii::app()->createUrl('profesorguiacpmain/create') ?>">
	<table id="employee_table" align=center>
		<tr id="row1">
			<td>
				<input type="text" id="Rut1" name="RutProfGuiaCP[]" size="14" placeholder="Rut" onblur="validateRut('Rut1');">
				<br><span class='error_text' id='Rut1_error'></span>
				<input type="text" id="Mail1" name="MailProfGuiaCP[]" size="14" placeholder="Mail" onblur="check_email('Mail1');">
				<br><span class='error_text' id='Mail1_error'></span>
			</td>
			<td>
				<input type="text" id="Nombre1" name="NombreProfGuiaCP[]" size="14" placeholder="Nombre" onblur="validateName('Nombre1');" >
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
				<select id="Centro1" name="CentroPractica_RBD[]" style="width:130px">
					<?php
		  				echo $data;
					?>
				</select>
				<br><span class='error_text' id='Centro1_error'></span>
			</td>
			<td>
				<input type="file" id="Imagen1" name="ImagenProfGuiaCP[]"  size="14">
				<br><span class='error_text' id='Imagen1_error'></span>
			</td>
		</tr>
	</table>
	
	<input type="button" onclick="add_row();" value="+">
	<input type="submit" name="submit_row" value="Enviar">
	</form>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

