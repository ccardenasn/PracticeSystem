<h1>Horario</h1>

<p><br/>
<p><br/>
	
<?php
$this->widget('ext.verticalmenu2levels.VerticalMenu2Levels',
			  array(
				  "menu"=>array(
					  array("url"=>array(),"label"=>'Gráficos',
							array("url"=>array("route"=>"horario/createHorario"),"label"=>"Crear Horario"),
							array("url"=>array("route"=>"horario/updateHorario"),"label"=>"Modificar Horario"),
						   ),
					 
				  ),
			  )
		);
?>