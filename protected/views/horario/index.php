<?php
include_once('consultaNombre.php');

$rutStudent = Yii::app()->user->name;
$exist = containsStudent($rutStudent);

if($exist != 0){
	$menuData = array("url"=>array(),"label"=>'Opciones',
							array("url"=>array("route"=>"horario/updateHorario"),"label"=>"Modificar Horario"),
						   );
}else{
	$menuData = array("url"=>array(),"label"=>'Opciones',
							array("url"=>array("route"=>"horario/createHorario"),"label"=>"Crear Horario"),
						   );
}



?>




<h1>Horario</h1>

<p><br/>
<p><br/>
	
<?php
$this->widget('ext.verticalmenu2levels.VerticalMenu2Levels',
			  array(
				  "menu"=>array($menuData,),
			  )
		);
?>