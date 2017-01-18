<h1>Estadísticas</h1>

<p><br/>
<p><br/>
	
<?php
$this->widget('ext.verticalmenu2levels.VerticalMenu2Levels',
			  array(
				  "menu"=>array(
					  array("url"=>array(),"label"=>'Gráficos',
							array("url"=>array("route"=>"graphdata/graph_a"),"label"=>"Cantidad de Estudiantes En Practica Por Centro"),
							array("url"=>array("route"=>"graphdata/graph_b"),"label"=>"Prácticas Realizadas Por Centro"),
							array("url"=>array("route"=>"graphdata/graph_c"),"label"=>"Cantidad de Estudiantes Atendidos Segun Práctica Por Centro"),
							array("url"=>array("route"=>"graphdata/graph_d"),"label"=>"Cantidad de Estudiantes de Acuerdo a Centros o Dependencias"),
							array("url"=>array("route"=>"graphdata/graph_e"),"label"=>"Sesiones Ejecutadas"),
							array("url"=>array("route"=>"graphdata/graph_f"),"label"=>"Cantidad de Profesores Por Centro de Prácticas"),
						   ),
					 
				  ),
			  )
		);
?>

