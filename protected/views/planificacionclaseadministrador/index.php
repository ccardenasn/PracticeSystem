<?php
include_once('planificacion.php');
/* @var $this PlanificacionclaseadministradorController */
/* @var $dataProvider CActiveDataProvider */

$student=Yii::app()->request->getQuery('id');
$arrdata=datosplanificacion($student);

$this->breadcrumbs=array(
	'Planificaciones',
);

$this->menu=array(
	array('label'=>'Administrar Planificaciones', 'url'=>array('admin')),
	array('label'=>'Añadir Planificacion', 'url'=>array('create','id'=>$student)),
);
?>

<h1>Lista de Planificaciones: </h1>
<h2>Estudiante: <?php echo $arrdata[0] ?> </h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
