<?php $this->pageTitle= Yii::app()->name." - "."Gráficos"; ?>

<body onload="javascript:setSelectOption();">
<h1><label id="graphTitleLabel">Distribución alumnos por centro o dependencia</label>: <label id="titleLabel">placeholder</label></h1><br>
	
<div class="collapse">
	<h3>Descripción</h3>
	<ul id="descGraph">
		Visualiza la cantidad total de estudiantes que recibe cada centro de práctica.
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
	array('label'=>'Estudiantes atendidos', 'url'=>array('graphdata/graph_c')),
	array('label'=>'Sesiones Ejecutadas', 'url'=>array('graphdata/graph_e')),
	array('label'=>'Profesores Guías por centro', 'url'=>array('graphdata/graph_f')),
);
?>
</body>