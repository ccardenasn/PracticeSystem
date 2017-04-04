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
	array('label'=>'Lista de Bitacoras', 'url'=>array('index')),
	array('label'=>'Administrar Bitacoras', 'url'=>array('admin')),
);
?>

<h1>Añadir Bitacora</h1>
<h2>Estudiante: <?php echo $arrdata[0] ?> </h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>