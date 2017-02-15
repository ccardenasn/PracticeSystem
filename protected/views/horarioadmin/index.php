<?php
$this->breadcrumbs=array(
	'Horarios',
);
?>

<h1>Horarios</h1>

<p><br/>
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