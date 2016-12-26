<?php
/* @var $this DirectorcarreraController */
/* @var $model Directorcarrera */

$this->breadcrumbs=array($model->RutDirector=>array('view','id'=>$model->RutDirector),'Modificar',
);

$this->menu=array(
	array('label'=>'Ver Director de Carrera', 'url'=>array('view', 'id'=>$model->RutDirector)),
);
?>

<h1>Modificar Director de Carrera <?php echo $model->RutDirector; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>