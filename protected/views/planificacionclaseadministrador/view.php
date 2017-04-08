<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseController */
/* @var $model Planificacionclase */

$this->breadcrumbs=array(
	'Planificaciones'=>array('index'),
	$model->CodPlanificacion,
);

$logBookExist = containsBitacora($model->CodPlanificacion);
$label='';
$url='';
if($logBookExist != 0){
	$label = 'Ver Bitácora';
	$url = 'bitacorasesion/viewPlanificacionBitacora';
}else{
	$label = 'Crear Bitácora';
	$url = 'bitacorasesion/create';
}

$this->menu=array(
	array('label'=>'Lista de Planificaciones Estudiante', 'url'=>array('index','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Añadir Planificacion', 'url'=>array('create','id'=>$model->Estudiante_RutEstudiante)),
	array('label'=>'Modificar Planificacion', 'url'=>array('update', 'id'=>$model->CodPlanificacion)),
	array('label'=>'Eliminar Planificacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CodPlanificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Planificaciones', 'url'=>array('admin')),
	array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->CodPlanificacion)),
	array('label'=>'Crear Bitacora', 'url'=>array('bitacorasesionadmin/create','id'=>$model->CodPlanificacion)),
    array('label'=>$label, 'url'=>array($url, 'id'=>$model->CodPlanificacion)),
);
?>

<h1>Sesion Informada: <?php echo $model->SesionInformada; ?></h1>

<?php 

$arrdata=datosplanificacion($model->Estudiante_RutEstudiante);

?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Estudiante_RutEstudiante',
		array('name'=>'Nombre Estudiante','value'=>$model->estudianteRutEstudiante->NombreEstudiante),
		array('name'=>'Centro de Practica','value'=>$model->centroPracticaRBD->NombreCentroPractica),
		'ProfesorGuiaCP_RutProfGuiaCP',
		array('name'=>'Profesor Guia','value'=>$model->profesorGuiaCPRutProfGuiaCP->NombreProfGuiaCP),
		'Curso',
		'ConfiguracionPractica_NombrePractica',
		'Fecha',
		'SesionInformada',
		array('name'=>'Total de Sesiones','value'=>$arrdata[5]),
        array('name'=>'Numero de Horas','value'=>$arrdata[6]),
		'Ejecutado',
		'Supervisado',
		'ComentarioPlanificacion',
	),
)); ?>
