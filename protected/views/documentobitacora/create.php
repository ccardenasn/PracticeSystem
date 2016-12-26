<?php
/* @var $this DocumentobitacoraController */
/* @var $model Documentobitacora */

$this->breadcrumbs=array(
	'Documento'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista de Planificaciones', 'url'=>array('planificacionclase/index')),
	array('label'=>'Lista de Bitacoras', 'url'=>array('bitacorasesion/index')),
);
?>

<h1>Añadir Documento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>