<?php
/* @var $this ConfiguracionpracticaController */
/* @var $data Configuracionpractica */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('NombrePractica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombrePractica), array('view', 'id'=>$data->CodPractica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescripcionPractica')); ?>:</b>
	<?php echo CHtml::encode($data->DescripcionPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaPractica')); ?>:</b>
	<?php echo CHtml::encode($data->FechaPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Semestre_CodSemestre')); ?>:</b>
	<?php echo CHtml::encode($data->Semestre_CodSemestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroSesionesPractica')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroSesionesPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroHorasPractica')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroHorasPractica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocenteCoordinadorPracticas_RutCoordinador')); ?>:</b>
	<?php echo CHtml::encode($data->DocenteCoordinadorPracticas_RutCoordinador); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DocenteResponsablePractica_RutResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->DocenteResponsablePractica_RutResponsable); ?>
	<br />

	*/ ?>

</div>