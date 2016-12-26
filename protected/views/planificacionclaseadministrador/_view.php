<?php
/* @var $this PlanificacionclaseadministradorController */
/* @var $data Planificacionclaseadministrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodPlanificacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CodPlanificacion), array('view', 'id'=>$data->CodPlanificacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estudiante_RutEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->Estudiante_RutEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroPractica_RBD')); ?>:</b>
	<?php echo CHtml::encode($data->CentroPractica_RBD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProfesorGuiaCP_RutProfGuiaCP')); ?>:</b>
	<?php echo CHtml::encode($data->ProfesorGuiaCP_RutProfGuiaCP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Curso')); ?>:</b>
	<?php echo CHtml::encode($data->Curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ConfiguracionPractica_NombrePractica')); ?>:</b>
	<?php echo CHtml::encode($data->ConfiguracionPractica_NombrePractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SesionInformada')); ?>:</b>
	<?php echo CHtml::encode($data->SesionInformada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ejecutado')); ?>:</b>
	<?php echo CHtml::encode($data->Ejecutado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Supervisado')); ?>:</b>
	<?php echo CHtml::encode($data->Supervisado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComentarioPlanificacion')); ?>:</b>
	<?php echo CHtml::encode($data->ComentarioPlanificacion); ?>
	<br />

	*/ ?>

</div>