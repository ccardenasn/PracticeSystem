<?php
/* @var $this CentropracticamainController */
/* @var $model Centropractica */

$this->breadcrumbs=array(
	'Centros de Práctica'=>array('index'),
	'Añadir',
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Añadir Centro de Práctica</h1><br>
	
<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones</h4>
			<li>Para regresar al índice de centros haga click en la opción "Lista" situada en el panel de opciones ubicado al lado derecho de la ventana.</li>
			<li>Desde la sección "Administración" se puede observar una lista de centros existentes, además permite realizar acciones tales como ver, modificar y eliminar datos. Haga click en "Administración" en el panel "Opciones" para acceder.</li>
			<li>Para acceder a cada formulario debe hacer click en el símbolo <img src="images/FormImages/small_arrow_right.png"> para desplegar.</li>
			<li>Para ocultar un formulario debe hacer click en el símbolo <img src="images/FormImages/small_arrow_down.png">.</li>
		</ul>
	</ul>
</div><br>

<?php $this->renderPartial('_form', 
						   array(
							   'centroModel'=>$centroModel,
							   'secretariaModel'=>$secretariaModel,
							   'directorModel'=>$directorModel,
							   'jefeutpModel'=>$jefeutpModel,
							   'coordinadorModel'=>$coordinadorModel,
							   //'profesorModel'=>$profesorModel,
						   )); ?>