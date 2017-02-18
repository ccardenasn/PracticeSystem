<?php
/* @var $this JefeutpcpController */
/* @var $model Jefeutpcp */

$this->breadcrumbs=array(
	'Jefe UTP CP'=>array('index'),
	$model->RutJefeUTPCP=>array('view','id'=>$model->RutJefeUTPCP),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutJefeUTPCP)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Jefe UTP CP <?php echo $model->RutJefeUTPCP; ?></h1><br>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de jefes utp cp haga click en "Lista".</li>
	<li>Haga click en "Añadir" para agregar un nuevo jefe utp cp a la lista.</li>
	<li>Haga click en "Detalles" para visualizar información de jefe utp cp.</li>
	<li>Desde la sección "Administración" se puede observar una lista de jefes utp cp existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>