<?php

function containsStd($id){
	$query = "select count(*) from estudiante where RutEstudiante = '".$id."' and Estado = 1";
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

function containsData($table,$codTable,$id){
	$query = "select count(*) from ".$table." where ".$codTable." = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function checkMainUser($username){
    
    $exist = false;
    
    $tableEstudiante = "estudiante";
    $codTableEstudiante = "RutEstudiante";
    
    $existEstudiante = containsData($tableEstudiante,$codTableEstudiante,$username);
    
    $tableCoordinador = "docentecoordinadorpracticas";
    $codTableCoordinador = "RutCoordinador";
    
    $existCoordinador = containsData($tableCoordinador,$codTableCoordinador,$username);
    
    $tableResponsable = "docenteresponsablepractica";
    $codTableResponsable = "RutResponsable";
    
    $existResponsable = containsData($tableResponsable,$codTableResponsable,$username);
    
    $tableDirector = "directorcarrera";
    $codTableDirector = "RutDirector";
    
    $existDirector = containsData($tableDirector,$codTableDirector,$username);
    
    if($existEstudiante != 0 || $existCoordinador != 0 || $existResponsable != 0 || $existDirector != 0){
        $exist = true;
    }
    
    return $exist;
    
}


?>