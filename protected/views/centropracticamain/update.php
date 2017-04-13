<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centros de Práctica'=>array('index'),
	$centroModel->RBD=>array('view','id'=>$centroModel->RBD),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$centroModel->RBD)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Centro de Práctica: <?php echo $centroModel->RBD; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de centros haga click en "Lista".</li>
			<li>Haga click en "Añadir" para agregar un nuevo centro a la lista.</li>
			<li>Haga click en "Detalles" para visualizar información de centro.</li>
			<li>Desde la sección "Administración" se puede observar una lista de centros existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->renderPartial('_updateForm', 
						   array(
							   'centroModel'=>$centroModel,
							   'secretariaModel'=>$secretariaModel,
							   'directorModel'=>$directorModel,
							   'jefeutpModel'=>$jefeutpModel,
							   'coordinadorModel'=>$coordinadorModel,
							   'profesorModel'=>$profesorModel,
						   )); ?>