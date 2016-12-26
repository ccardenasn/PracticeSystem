<?php
/* @var $this ConfiguracionpracticaController */
/* @var $model Configuracionpractica */

$this->breadcrumbs=array(
	'Configuracion de Practicas'=>array('index'),
	$model->NombrePractica,
);

$this->menu=array(
	array('label'=>'Lista de Practicas', 'url'=>array('index')),
	array('label'=>'Añadir Practica', 'url'=>array('create')),
	array('label'=>'Modificar Practica', 'url'=>array('update', 'id'=>$model->NombrePractica)),
	array('label'=>'Eliminar Practica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NombrePractica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Practica', 'url'=>array('admin')),
);
?>

<h1>Tipo: <?php echo $model->NombrePractica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array('name'=>'Nombre','value'=>$model->NombrePractica),
        array('name'=>'Descripcion','value'=>$model->DescripcionPractica),
        array('name'=>'Fecha','value'=>$model->FechaPractica),
        array('name'=>'Semestre','value'=>$model->SemestrePractica),
        array('name'=>'Numero de Sesiones','value'=>$model->NumeroSesionesPractica),
		array('name'=>'Numero de Horas','value'=>$model->NumeroHorasPractica),
        array('name'=>'Docente Coordinador de Practicas','value'=>$model->DocenteCoordinadorPracticas_RutCoordinador),
		array('name'=>'Docente Responsable de Practica','value'=>$model->DocenteResponsablePractica_RutResponsable),
	),
)); ?>
