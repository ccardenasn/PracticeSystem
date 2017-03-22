<?php
include_once('consultaNombre.php');

$rutStudent = Yii::app()->user->name;
$exist = containsTimeTable($rutStudent);



?>

<ul>	
	<img src='<?php
	if($exist != 0){
			echo 'images/messageImages/vaultboysuccess.png';
		}else{
			echo 'images/messageImages/vaultboyerror.png';
		}

	?>'>
	<h1>
		<?php
		if($exist != 0){
			echo '¡Horario creado con éxito!';
		}else{
			echo '¡Aun no se han ingresado datos al horario!';
		}
		?>
	</h1>
	<br><br>
	<li><h2>
		<?php
		
		if($exist != 0){
			echo "Haga click ".CHtml::link('aquí',array('horario/index'))." para continuar";
		}else{
			echo "Haga click ".CHtml::link('aquí',array('horario/createHorario'))." para regresar a la ventana anterior";
		}
		?>
		
		</h2>
	</li>	
</ul><br>

