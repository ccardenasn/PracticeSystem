<?php $this->pageTitle= Yii::app()->name." - "."Gráficos"; ?>

<body onload="javascript:setSelectOption();">
<h1><label id="graphTitleLabel">Sesiones Ejecutadas</label>: <label id="titleLabel">placeholder</label></h1><br>

<div class="collapse">
	<h3>Descripción</h3>
	<ul id="descGraph">
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
	array('label'=>'Estudiantes atendidos', 'url'=>array('graphdata/graph_c')),
	array('label'=>'Distribución alumnos por centro o dependencia', 'url'=>array('graphdata/graph_d')),
	array('label'=>'Profesores Guías por centro', 'url'=>array('graphdata/graph_f')),
	
);
?>
</body>