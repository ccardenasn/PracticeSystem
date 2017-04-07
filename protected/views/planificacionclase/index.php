<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseController */
/* @var $dataProvider CActiveDataProvider */

$student=Yii::app()->user->name;
$arrdata=datosplanificacion($student);

$this->breadcrumbs=array(
	'Planificacion de Clases',
);

$this->menu=array(
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Administración', 'url'=>array('admin','id'=>$student)),
    array('label'=>'Bitácoras', 'url'=>array('bitacorasesion/index')),
);
?>

<h1>Planificación de Clases</h1>
<h2>Estudiante: <?php echo $arrdata[0] ?> </h2><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para agregar una nueva planificación haga click en la opción "Añadir" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección "Administración" se puede observar una lista de planificaciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
	<li>Haga click en "Bitácoras" para acceder a la seccion de bitacoras del estudiante.</li>
</ul>
