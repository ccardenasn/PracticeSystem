<?php
/* @var $this ListaestudianteController */
/* @var $model Listaestudiante */

$this->breadcrumbs=array('Añadir Lista de Estudiantes',);

$this->menu=array(
);
?>

<h1>Añadir Lista de Estudiantes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>