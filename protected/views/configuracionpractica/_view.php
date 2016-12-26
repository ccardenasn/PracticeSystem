<?php
/* @var $this ConfiguracionpracticaController */
/* @var $data Configuracionpractica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombrePractica), array('view', 'id'=>$data->NombrePractica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->DescripcionPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->FechaPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Semestre')); ?>:</b>
	<?php echo CHtml::encode($data->SemestrePractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero de Sesiones')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroSesionesPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero de Horas')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroHorasPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Docente Coordinador de Practicas')); ?>:</b>
	<?php echo CHtml::encode($data->DocenteCoordinadorPracticas_RutCoordinador); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DocenteResponsablePractica_RutResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->DocenteResponsablePractica_RutResponsable); ?>
	<br />

	*/ ?>

</div>