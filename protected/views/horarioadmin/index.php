<?php
$this->breadcrumbs=array(
	'Horarios',
);
?>

<h1>Horarios</h1><br>

<ul>
	<h4>Bienvenido a la sección de Administración de Horarios.</h4>
	<li>Haga click sobre el símbolo <img src="images/AdminTemplates/plus.png"> del menú "Opciones de Horarios" situado en la parte inferior de la ventana para desplegar las opciones disponibles.</li>
</ul>

<ul>
	<h4>Opciones Disponibles</h4>
	<li>Administración de Horarios: Permite visualizar una lista de todos los estudiantes que hallan creado su horario de clases previamente, desde allí se puede observar, editar y/o eliminar la información correspondiente.</li>
	<li>Configuración de Bloques: Ofrece la posibilidad de cambiar las horas en las cuales se llevan a cabo cada uno de los bloques de clases disponibles para el horario.</li>
	<li>Semestres: A través de esta sección se puede agregar la cantidad de semestres de duración de la carrera.</li>
	<li>Asignaturas: Permite añadir asignaturas además de especificar el semestre en el cual se imparten.</li>
</ul>
<p><br/>
	
<?php
$this->widget('ext.verticalmenu2levels.VerticalMenu2Levels',
			  array(
				  "menu"=>array(
					  array("url"=>array(),"label"=>'Opciones de Horarios',
							array("url"=>array("route"=>"horarioadmin/admin"),"label"=>"Administración de Horarios"),
							array("url"=>array("route"=>"bloque/batchUpdate"),"label"=>"Configuración de Bloques"),
							array("url"=>array("route"=>"semestre"),"label"=>"Semestres"),
							array("url"=>array("route"=>"asignatura"),"label"=>"Asignaturas"),
						   ),
					 
				  ),
			  )
		);
?>