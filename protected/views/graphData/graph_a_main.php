<?php $this->pageTitle= Yii::app()->name." - "."Gráficos"; ?>

<body onload="javascript:setSelectOption();">
<h1><label id="graphTitleLabel">Estudiantes según tipo de práctica</label>: <label id="titleLabel">placeholder</label></h1><br>

<div class="collapse">
	<h3>Descripción</h3>
	<ul id="descGraph">
		Indica la distribución de estudiantes según la práctica que realiza en cada centro.
	</ul>
</div><br>

<?php $this->widget('ext.ECollapse.ECollapse'); ?>
	
<div id="data">
   <?php $this->renderPartial('graph_a/load'); ?>
</div>

<?php

$this->breadcrumbs=array(
	'Estadísticas'=>array('index'),
	'Gráficos',
);

$this->menu=array(
	array('label'=>'Estadisticas', 'url'=>array('index')),
	array('label'=>'Estudiantes atendidos', 'url'=>array('graphdata/graph_c')),
	array('label'=>'Distribución alumnos por centro o dependencia', 'url'=>array('graphdata/graph_d')),
	array('label'=>'Sesiones Ejecutadas', 'url'=>array('graphdata/graph_e')),
	array('label'=>'Profesores Guías por centro', 'url'=>array('graphdata/graph_f')),
);
?>
</body>