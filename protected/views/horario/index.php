<h1>Horarios</h1><br>

<ul>
	<h4>Bienvenido a la sección de Horario.</h4>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/plus.png"> del menú "Opciones de Horarios" situado en la parte inferior de la ventana para desplegar las opciones disponibles.</li>
</ul>

<ul>
	<h4>Opciones Disponibles</h4>
	<li>Crear Horario: Esta opción permite generar una tabla compuesta por los dias de la semana, ademas de cada bloque correspondiente a las asignaturas que se cursarán. Una vez allí El usuario podrá añadir las asignaturas que esté cursando durante el semestre.</li>
	<li>Modificar Horario: Esta opción aparecerá en el menú una vez que haya sido creado el horario, reemplazando a la opción anterior. Permite realizar modificaciones al horario, como añadir o reemplazar asignaturas en los bloques correspondientes.</li>
	
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
		$menuData = array("url"=>array(),"label"=>'Opciones',array("url"=>array("route"=>"horario/updateHorario"),"label"=>"Modificar Horario"),);
	}else{
		$menuData = array("url"=>array(),"label"=>'Opciones',array("url"=>array("route"=>"horario/createHorario"),"label"=>"Crear Horario"),);
	}
	
}else{
	$menuData='';
	echo "<h2>Actualmente no hay registros de asignaturas y/o bloques en el sistema, por favor contacte con su administrador.</h2>";
}



?>
	
<?php
$this->widget('ext.verticalmenu2levels.VerticalMenu2Levels',
			  array(
				  "menu"=>array($menuData,),
			  )
		);
?>