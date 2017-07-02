<?php
/* @var $this UniversidadmainController */
/* @var $data Universidad */

$query = "select RutDirector from directorcarrera;";
$rutDirector=Yii::app()->db->createCommand($query)->queryScalar();
$directorData=Directorcarrera::model()->find('RutDirector=?',array($rutDirector));

?>

<div class="view">
    <h3><?php echo CHtml::label('Detalles','Detalles'); ?>:</h3>
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('NombreInstitucion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreInstitucion), array('view', 'id'=>$data->CodInstitucion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sede')); ?>:</b>
	<?php echo CHtml::encode($data->Sede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Campus')); ?>:</b>
	<?php echo CHtml::encode($data->Campus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facultad')); ?>:</b>
	<?php echo CHtml::encode($data->Facultad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Region_codRegion')); ?>:</b>
	<?php echo CHtml::encode($data->regionCodRegion->NombreRegion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Provincia_codProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->provinciaCodProvincia->NombreProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_codCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadCodCiudad->NombreCiudad); ?>
	<br /><br>
    
    <h3><?php echo CHtml::label('Director','Director'); ?>:</h3>

    <b><?php echo CHtml::encode($directorData->getAttributeLabel('RutDirector')); ?>:</b>
	<?php echo CHtml::encode($directorData->RutDirector); ?>
    <br />
    
    <b><?php echo CHtml::encode($directorData->getAttributeLabel('NombreDirector')); ?>:</b>
	<?php echo CHtml::encode($directorData->NombreDirector); ?>
    <br />
    
    <b><?php echo CHtml::encode($directorData->getAttributeLabel('MailDirector')); ?>:</b>
	<?php echo CHtml::encode($directorData->MailDirector); ?>
    <br />
    
    <b><?php echo CHtml::encode($directorData->getAttributeLabel('TelefonoDirector')); ?>:</b>
	<?php echo CHtml::encode($directorData->TelefonoDirector); ?>
    <br />
    
    <b><?php echo CHtml::encode($directorData->getAttributeLabel('CelularDirector')); ?>:</b>
	<?php echo CHtml::encode($directorData->CelularDirector); ?>
    <br />
    
</div>