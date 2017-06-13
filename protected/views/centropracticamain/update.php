<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centros de Práctica'=>array('index'),
    $centroModel->NombreCentroPractica=>array('view','id'=>$centroModel->RBD),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$centroModel->RBD)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Centro de Práctica: <?php echo $centroModel->NombreCentroPractica; ?></h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de centros haga click en <b>"Lista"</b>.</li>
			<li>Haga click en <b>"Añadir"</b> para agregar un nuevo centro a la lista.</li>
			<li>Haga click en <b>"Detalles"</b> para visualizar información de centro.</li>
			<li>Desde la sección <b>"Administración"</b> se puede observar una lista de centros existentes, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <b>"Administración"</b> en el panel <b>"Opciones"</b> para acceder.</li>
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