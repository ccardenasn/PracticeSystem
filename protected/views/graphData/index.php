<?php

$this->pageTitle= Yii::app()->name." - "."Estadísticas";

$this->breadcrumbs=array(
	'Estadisticas',
);
?>

<h1>Estadísticas</h1>

<br/>

<p style="line-height: 2em;">

<?php
	echo CHtml::link("<font size=4>1. Estudiantes según tipo de práctica.</font>",array('graphdata/graph_a'),array('style'=> 'text-decoration:none'));
	echo '<br>';
	echo CHtml::link("<font size=4>2. Estudiantes atendidos.</font>",array('graphdata/graph_c'),array('style'=> 'text-decoration:none'));
	echo '<br>';
	echo CHtml::link("<font size=4>3. Distribución alumnos por centro o dependencia.</font>",array('graphdata/graph_d'),array('style'=> 'text-decoration:none'));
	echo '<br>';
	echo CHtml::link("<font size=4>4. Sesiones ejecutadas.</font>",array('graphdata/graph_e'),array('style'=> 'text-decoration:none'));
	echo '<br>';
	echo CHtml::link("<font size=4>5. Profesores Guías por centro.</font>",array('graphdata/graph_f'),array('style'=> 'text-decoration:none'));
?>

</p>
