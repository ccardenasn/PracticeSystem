<?php
/* @var $this SemestreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horarios'=>array('horarioadmin/index'),
	'Semestres',
);

$this->menu=array(
	array('label'=>'Create Semestre', 'url'=>array('create')),
	array('label'=>'Manage Semestre', 'url'=>array('admin')),
);
?>

<h1>Semestres</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
