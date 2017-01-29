<?php

function nameQuery($student){
	
	$query="select NombreEstudiante from estudiante where RutEstudiante = '".$student."';";
	$nameStudent=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $nameStudent;
}

