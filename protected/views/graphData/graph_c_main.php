<body onload="javascript:setSelectOption();">
<h1><label id="graphTitleLabel">Niños</label>: <label id="titleLabel">placeholder</label></h1><br>
	
	
<div class="collapse">
	<h3>Descripción</h3>
	<ul id="descGraph">
		Corresponde a los alumnos de educación básica (niños y/o jovenes) que pertenecen a los centros de práctica con los cuales los estudiantes de pedagogía han trabajado.
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>
	
<div id="data">
   <?php $this->renderPartial('graph_c/load'); ?>
</div>

<?php

$this->breadcrumbs=array(
	'Estadísticas'=>array('index'),
	'Gráficos',
);

$this->menu=array(
	array('label'=>'Estadisticas', 'url'=>array('index')),
	array('label'=>'Estudiantes según tipo de práctica', 'url'=>array('graphdata/graph_a')),
	array('label'=>'Distribución alumnos por centro o dependencia', 'url'=>array('graphdata/graph_d')),
	array('label'=>'Sesiones Ejecutadas', 'url'=>array('graphdata/graph_e')),
	array('label'=>'Profesores Guías por centro', 'url'=>array('graphdata/graph_f')),
);
?>
</body>