<?php
$this->breadcrumbs=array(
	'Estadisticas',
);
?>

<h1>Estadísticas</h1>

<br/>

<p style="line-height: 2em;">

<?php
	echo CHtml::link("<font size=4>1. Cantidad de estudiantes en práctica por centro</font>",array('graphdata/graph_a'));
	echo '<br>';
	echo CHtml::link("<font size=4>2. Prácticas realizadas por centro</font>",array('graphdata/graph_b'));
	echo '<br>';
	echo CHtml::link("<font size=4>3. Cantidad de estudiantes atendidos según práctica por centro</font>",array('graphdata/graph_c'));
	echo '<br>';
	echo CHtml::link("<font size=4>4. Cantidad de estudiantes de acuerdo a centros o dependencias</font>",array('graphdata/graph_d'));
	echo '<br>';
	echo CHtml::link("<font size=4>5. Sesiones ejecutadas</font>",array('graphdata/graph_e'));
	echo '<br>';
	echo CHtml::link("<font size=4>6. Cantidad de profesores por centro de prácticas</font>",array('graphdata/graph_f'));
?>

</p>
