<?php $this->pageTitle= Yii::app()->name." - "."Gráficos"; ?>

<body onload="javascript:setSelectOption();">
<h1><label id="graphTitleLabel">Profesores Guías por centro</label><label id="titleLabel" style="display:none">placeholder</label></h1><br>

<div class="collapse">
	<h3>Descripción</h3>
	<ul id="descGraph">
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
	array('label'=>'Estudiantes atendidos', 'url'=>array('graphdata/graph_c')),
	array('label'=>'Distribución alumnos por centro o dependencia', 'url'=>array('graphdata/graph_d')),
	array('label'=>'Profesores Guías por centro', 'url'=>array('graphdata/graph_f')),
	array('label'=>'Sesiones Ejecutadas', 'url'=>array('graphdata/graph_e')),
);
?>
</body>