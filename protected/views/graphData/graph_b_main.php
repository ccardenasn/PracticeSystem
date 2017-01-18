<h1>Prácticas Realizadas Por Centro</h1>

<p><br/>
<p><br/>
	
<div id="data">
   <?php $this->renderPartial('graph_b/load'); ?>
</div>

<?php
$this->menu=array(
	array('label'=>'Estadisticas', 'url'=>array('index')),
	array('label'=>'Cantidad de Estudiantes En Practica Por Centro', 'url'=>array('graphdata/graph_a')),
	array('label'=>'Cantidad de Estudiantes Atendidos Segun Práctica Por Centro', 'url'=>array('graphdata/graph_c')),
	array('label'=>'Cantidad de Estudiantes de Acuerdo a Centros o Dependencias', 'url'=>array('graphdata/graph_d')),
	array('label'=>'Sesiones Ejecutadas', 'url'=>array('graphdata/graph_e')),
	array('label'=>'Cantidad de Profesores Por Centro de Prácticas', 'url'=>array('graphdata/graph_f')),
);
?>