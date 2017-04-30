<h1>Profesores Guías por centro</h1><br>

<div class="collapse">
	<h3>Descripción</h3>
	<ul>
		Permite visualizar la cantidad de profesores guias existentes en cada centro de práctica.
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>
	
<div id="data">
   <?php $this->renderPartial('graph_f/load'); ?>
</div>

<?php

$this->breadcrumbs=array(
	'Estadísticas'=>array('index'),
	'Gráficos',
);

$this->menu=array(
	array('label'=>'Estadisticas', 'url'=>array('index')),
	array('label'=>'Estudiantes según tipo de práctica', 'url'=>array('graphdata/graph_a')),
	array('label'=>'Niños', 'url'=>array('graphdata/graph_c')),
	array('label'=>'Distribución alumnos por centro o dependencia', 'url'=>array('graphdata/graph_d')),
	array('label'=>'Profesores Guías por centro', 'url'=>array('graphdata/graph_f')),
	array('label'=>'Sesiones Ejecutadas', 'url'=>array('graphdata/graph_e')),
);
?>
