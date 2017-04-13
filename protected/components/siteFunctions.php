<?php

function containsStd($id){
	$query = "select count(*) from estudiante where RutEstudiante = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function containsCoordinador($id){
	$query = "select count(*) from docentecoordinadorpracticas where RutCoordinador = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function containsDirector($id){
	$query = "select count(*) from directorcarrera where RutDirector = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function containsResponsable($id){
	$query = "select count(*) from docenteresponsablepractica where RutResponsable = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}


?>