<?php
include_once('planificacion.php');

/* @var $this BitacorasesionController */
/* @var $model Bitacorasesion */

$student=Yii::app()->user->name;
$arrdata=datosplanificacion($student);

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Bitacora</h1><br>
<h2>Estudiante: <?php echo $arrdata[0] ?> </h2><br>

<ul>
	<h4>Instrucciones</h4>
	<li>Para regresar al índice de bitácoras haga click en la opción <b>"Lista"</b> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de bitacoras existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
	<li>Para acceder a cada formulario debe hacer click en el símbolo <img src="images/FormImages/small_arrow_right.png"> para desplegar.</li>
	<li>Para ocultar un formulario debe hacer click en el símbolo <img src="images/FormImages/small_arrow_down.png">.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>