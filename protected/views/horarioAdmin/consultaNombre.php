<?php

function nameQuery($student){
	
	$query="select NombreEstudiante from estudiante where RutEstudiante = '".$student."';";
	$nameStudent=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $nameStudent;
}

function containsStudent($student){
	$query="select count(*) from horario where Estudiante_RutEstudiante = '".$student."';";
	$containsData=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $containsData;
}

function containsSu(){
	$query="select count(*) from asignatura;";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}



?>