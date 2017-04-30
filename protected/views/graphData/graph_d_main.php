<h1>Distribución alumnos por centro o dependencia</h1><br>

<div class="collapse">
	<h3>Descripción</h3>
	<ul>
		Visualiza la cantidad total de estudiantes que recibe cada centro de practica.
	</ul>
	<ul>
		Otra opción es observar la distribución de los alumnos en práctica según la dependencia administrativa del establecimiento.
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>
	
<div id="data">
   <?php $this->renderPartial('graph_d/load'); ?>
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
	array('label'=>'Sesiones Ejecutadas', 'url'=>array('graphdata/graph_e')),
	array('label'=>'Profesores Guías por centro', 'url'=>array('graphdata/graph_f')),
);
?>