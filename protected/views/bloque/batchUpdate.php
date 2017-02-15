<?php
/* @var $this BloqueController */
/* @var $model Bloque */

$this->breadcrumbs=array(
	'Horarios'=>array('horarioadmin/index'),
	'Configuración de Bloques',
);

$this->menu=array(
	array('label'=>'Horarios', 'url'=>array('horarioadmin/index')),
	array('label'=>'Semestres', 'url'=>array('semestre/index')),
	array('label'=>'Asignaturas', 'url'=>array('asignatura/index')),
);
?>

<h1>Configuración de Bloques</h1>

<?php $this->renderPartial('batchUpdateForm', array('items'=>$items)); ?>