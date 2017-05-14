<?php
/* @var $this ConfiguracionpracticamainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Configuracionpracticamains',
);

$this->menu=array(
	array('label'=>'Create Configuracionpracticamain', 'url'=>array('create')),
	array('label'=>'Manage Configuracionpracticamain', 'url'=>array('admin')),
);
?>

<h1>Configuracionpracticamains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
