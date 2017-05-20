<?php
/* @var $this PerfildocentecoordinadorpracticasController */
/* @var $model Perfildocentecoordinadorpracticas */

$this->breadcrumbs=array(
	$model->RutCoordinador=>array('view','id'=>$model->RutCoordinador),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutCoordinador)),
);
?>

<h1>Modificar Perfil: <?php echo $model->NombreCoordinador; ?></h1><br>

<div class="collapse">
	<h3>Ayuda</h3>
	<ul>
		<ul>
			<h4>Instrucciones de Opciones</h4>
			<li>Haga click en <b>"Detalles"</b> para visualizar información de perfil.</li>
		</ul>
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>