<?php
/* @var $this PerfildocenteresponsablepracticaController */
/* @var $model Perfildocenteresponsablepractica */

$this->breadcrumbs=array(
	$model->RutResponsable=>array('view','id'=>$model->RutResponsable),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Detalles', 'url'=>array('view', 'id'=>$model->RutResponsable)),
);
?>

<h1>Perfil: <?php echo $model->NombreResponsable; ?></h1><br>

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