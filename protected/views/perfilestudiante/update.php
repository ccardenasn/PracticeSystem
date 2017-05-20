<?php
/* @var $this PerfilestudianteController */
/* @var $model Perfilestudiante */

$this->breadcrumbs=array(
	$model->RutEstudiante=>array('view','id'=>$model->RutEstudiante),
	'Editar',
);

$this->menu=array(
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutEstudiante)),
);
?>

<h1>Modificar Perfil: <?php echo $model->NombreEstudiante; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Las opciones están situadas en un panel, el cual se encuentra ubicado al lado derecho de la ventana.</li>
			<li>Haga click en <strong>"Detalles"</strong> para visualizar información de perfil.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>