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
	array('label'=>'Añadir Planificacion', 'url'=>array('create')),
	array('label'=>'Administrar Planificaciones', 'url'=>array('admin')),
    array('label'=>'Lista de Bitacoras', 'url'=>array('bitacorasesion/index')),
);
?>

<h1>Lista de Planificaciones: </h1>
<h2>Estudiante: <?php echo $arrdata[0] ?> </h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
