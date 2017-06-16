<?php
/* @var $this UniversidadmainController */
/* @var $model Universidad */

$this->breadcrumbs=array(
	'Universidad'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Universidad</h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul align=justify>
		<ul>
            <h4>Instrucciones</h4>
            <li>Para regresar al índice de universidad haga click en la opción <strong>"Lista"</strong> situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
            <li>Desde la sección <strong>"Administración"</strong> se puede observar una lista de universidad, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en <strong>"Administración"</strong> en el panel <strong>"Opciones"</strong> para acceder.</li>
        </ul>
	</ul>
</div><br>

<?php $this->renderPartial('_form',
						   array(
							   'universidadModel'=>$universidadModel,
							   'carreraModel'=>$carreraModel,
							   'secretariaModel'=>$secretariaModel,
						   )); ?>