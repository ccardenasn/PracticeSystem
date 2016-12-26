<?php
/* @var $this EstudianteController */
/* @var $data Estudiante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutEstudiante), array('view', 'id'=>$data->RutEstudiante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->NombreEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave')); ?>:</b>
	<?php echo CHtml::encode($data->ClaveEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Año Incorporacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaIncorporacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mencion')); ?>:</b>
	<?php echo CHtml::encode($data->Mencion_NombreMencion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->MailEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoEstudiante); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->CelularEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfesorGuiaCP_RutProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->ProfesorGuiaCP_RutProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ConfiguracionPractica_NombrePractica')); ?>:</b>
	<?php echo CHtml::encode($data->ConfiguracionPractica_NombrePractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SesionesPlanificadas')); ?>:</b>
	<?php echo CHtml::encode($data->SesionesPlanificadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HorasPlanificadas')); ?>:</b>
	<?php echo CHtml::encode($data->HorasPlanificadas); ?>
	<br />

	*/ ?>

</div>