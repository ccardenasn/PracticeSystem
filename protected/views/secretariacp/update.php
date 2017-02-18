<?php
/* @var $this SecretariacpController */
/* @var $model Secretariacp */

$this->breadcrumbs=array(
	'Secretaria CP'=>array('index'),
	$model->RutSecretariaCP=>array('view','id'=>$model->RutSecretariaCP),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutSecretariaCP)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Secretaria CP <?php echo $model->RutSecretariaCP; ?></h1><br>

<ul>
	<h4>Instrucciones de Opciones</h4>
	<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
	<li>Para regresar al índice de funcionarios haga click en "Lista".</li>
	<li>Haga click en "Añadir" para agregar un nuevo funcionario a la lista.</li>
	<li>Haga click en "Detalles" para visualizar información de funcionario.</li>
	<li>Desde la sección "Administración" se puede observar una lista de funcionarios existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
</ul>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>