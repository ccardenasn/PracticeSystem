<?php
/* @var $this EstudiantemainController */
/* @var $data Estudiantemain */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RutEstudiante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RutEstudiante), array('view', 'id'=>$data->RutEstudiante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->NombreEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClaveEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->ClaveEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaIncorporacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaIncorporacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mencion_CodMencion')); ?>:</b>
	<?php echo CHtml::encode($data->Mencion_CodMencion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MailEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->MailEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelefonoEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->TelefonoEstudiante); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CelularEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->CelularEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfesorGuiaCP_RutProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->ProfesorGuiaCP_RutProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ConfiguracionPractica_CodPractica')); ?>:</b>
	<?php echo CHtml::encode($data->ConfiguracionPractica_CodPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroPractica_RBD')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImagenEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->ImagenEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SituacionFinalEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->SituacionFinalEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ObservacionEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->ObservacionEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	*/ ?>

</div>