<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	$universidadModel->NombreInstitucion=>array('view','id'=>$universidadModel->NombreInstitucion),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Añadir', 'url'=>array('create')),
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$universidadModel->NombreInstitucion)),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Modificar Universidad: <?php echo $universidadModel->NombreInstitucion; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Para regresar al índice de universidad haga click en <strong>"Lista"</strong>.</li>
			<li>Haga click en <strong>"Añadir"</strong> para agregar universidad a la lista.</li>
			<li>Haga click en <strong>"Detalles"</strong> para visualizar información de universidad.</li>
			<li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de universidad, además puede realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
		</ul>
	</ul>
</div><br>

<?php $this->renderPartial('_form',
						   array(
							   'universidadModel'=>$universidadModel,
							   'carreraModel'=>$carreraModel,
							   'secretariaModel'=>$secretariaModel,
						   )); ?>