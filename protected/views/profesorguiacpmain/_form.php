<?php
/* @var $this ProfesorguiacpmainController */
/* @var $model Profesorguiacp */
/* @var $form CActiveForm */

$base = Yii::app()->baseUrl; 
$js = Yii::app()->getClientScript();
$js->registerScriptFile($base.'/tabularInputControls/tabularInputFunctions.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesorguiacp-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<form method="post" action="<?php Yii::app()->createUrl('profesorguiacpmain/create') ?>">
	<table id="employee_table" align=center>
		<tr id="row1">
			<td>
				<input type="text" name="RutProfGuiaCP[]" size="14" placeholder="Rut">
				<input type="text" name="MailProfGuiaCP[]" size="14" placeholder="Mail">
			</td>
			<td>
				<input type="text" name="NombreProfGuiaCP[]" size="14" placeholder="Nombre">
				<input type="text" name="TelefonoProfGuiaCP[]" size="14" placeholder="Telefono">
			</td>
			<td>
				<input type="text" name="CursoProfGuiaCP[]" size="14" placeholder="Curso">
				<input type="text" name="CelularProfGuiaCP[]" size="14" placeholder="Celular">
			</td>
			<td>
				<input type="text" name="ProfesorJefeProfGuiaCP[]" size="14" placeholder="Profesor Jefe">
				<input type="text" name="CentroPractica_RBD[]" size="14" placeholder="Centro de Práctica">
			</td>
			<td>
				<input type="text" name="ImagenProfGuiaCP[]" size="14" placeholder="Imagen">
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

