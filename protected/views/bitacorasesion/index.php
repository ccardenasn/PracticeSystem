<?php
include_once('planificacion.php');
/* @var $this CustomerController */
/* @var $dataProvider CActiveDataProvider */

$student=Yii::app()->user->name;
$arrdata=datosplanificacion($student);

$this->breadcrumbs=array(
	'Customers',
);

$this->menu=array(
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h1>Lista de Bitacoras</h1>
<h2>Estudiante: <?php echo $arrdata[0] ?> </h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
