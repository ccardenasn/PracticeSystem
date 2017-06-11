<?php
include_once('planningFunctions.php');
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

<?php if(Yii::app()->user->hasFlash('message')):?>
<div class="row buttons">
	<?php echo Yii::app()->user->getFlash('message'); ?>
</div>
<?php endif; ?>

<ul>
	<h4>Instrucciones</h4>
	<li>Para agregar una nueva planificación haga click en la opción <b>"Añadir"</b> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
	<li>Desde la sección <b>"Administración"</b> se puede observar una lista de planificaciones existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
	<li>Haga click en <b>"Bitácoras"</b> para acceder a la seccion de bitacoras del estudiante.</li>
</ul>
