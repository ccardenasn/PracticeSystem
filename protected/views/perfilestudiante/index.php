<?php
/* @var $this PerfilestudianteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfilestudiantes',
);

$this->menu=array(
	array('label'=>'Create Perfilestudiante', 'url'=>array('create')),
	array('label'=>'Manage Perfilestudiante', 'url'=>array('admin')),
);
?>

<h1>Perfilestudiantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
