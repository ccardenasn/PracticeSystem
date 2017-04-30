<h1>Sesiones Ejecutadas</h1><br>

<div class="collapse">
	<h3>Descripción</h3>
	<ul>
		Da a conocer el porcentaje de las sesiones planificadas que efectivamente han realizado los estudiantes según la fecha actual.
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>
	
<div id="data">
   <?php $this->renderPartial('graph_e/load'); ?>
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
	
);
?>
