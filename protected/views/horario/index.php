<?php

$this->breadcrumbs=array(
	'Horarios',
);

?>



<h1>Horarios</h1><br>

<h3>Bienvenido a la sección de Horario.</h3>


<ul>
	<h4>Opciones Disponibles</h4>
	<li><b>Crear Horario:</b> Esta opción permite generar una tabla compuesta por los dias de la semana, ademas de cada bloque correspondiente a las asignaturas que se cursarán. Una vez allí El usuario podrá añadir las asignaturas que esté cursando durante el semestre.</li><br>
	<li><b>Modificar Horario:</b> Esta opción aparecerá en el menú una vez que haya sido creado el horario, reemplazando a la opción anterior. Permite realizar modificaciones al horario, como añadir o reemplazar asignaturas en los bloques correspondientes.</li>
	
</ul>
<p><br/>
	
<?php
include_once('consultaNombre.php');

$rutStudent = Yii::app()->user->name;
$exist = containsStudent($rutStudent);

$existSubject = containsSubjects();
$existBlock = containsBlocks();
	

	
if($existSubject != 0 && $existBlock != 0){
	if($exist != 0){
		$menuData = "horario/updateHorario";
		$titleData = "Modificar Horario";
	}else{
		$menuData = "horario/createHorario";
		$titleData = "Crear Horario";
	}
	
}else{
	$titleData="";
	$menuData='';
	echo "<h2>Actualmente no hay registros de asignaturas y/o bloques en el sistema, por favor contacte con su administrador.</h2>";
}
	
$this->menu=array(
	array('label'=>$titleData, 'url'=>array($menuData)),
);

?>