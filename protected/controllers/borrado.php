<?php

function getPlanStudents($id){
	$query="select * from planificacionclase where Estudiante_RutEstudiante = '".$id."';";
	$planStudents=Yii::app()->db->createCommand($query)->queryAll();
	
	return $planStudents;
}

function getIdBitacora($planStudents,$i){
	$query="select id from bitacorasesion where PlanificacionClase_CodPlanificacion = '".$planStudents[$i]['CodPlanificacion']."';";
	$idBitacora=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $idBitacora;
}

function containsDoc($idBitacora){
	$query="select count(*) from documentobitacora where bitacorasesion_id = '".$idBitacora."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function containsTimeTableMain($rut){
	$query="select count(*) from horario where Estudiante_RutEstudiante = '".$rut."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function deleteTimeTableMain($rut){
	$query="delete from horario where Estudiante_RutEstudiante ='".$rut."';";
	Yii::app()->db->createCommand($query)->execute();
}

function deleteTimeTableAdmin($rut){
	$query="delete from horarioadmin where Estudiante_RutEstudiante ='".$rut."';";
	Yii::app()->db->createCommand($query)->execute();
}

function deleteDocuments($idBitacora){
	$query="delete from documentobitacora where bitacorasesion_id ='".$idBitacora."';";
	Yii::app()->db->createCommand($query)->execute();
}

function deleteClase($idBitacora){
	$query="delete from clasebitacorasesion where bitacorasesion_id ='".$idBitacora."';";
	Yii::app()->db->createCommand($query)->execute();
}

function deleteBitacora($idBitacora){
	$query="delete from bitacorasesion where id ='".$idBitacora."';";
	Yii::app()->db->createCommand($query)->execute();
}

function deletePlanificacion($planStudents,$i){
	$query="delete from planificacionclase where CodPlanificacion ='".$planStudents[$i]['CodPlanificacion']."';";
	Yii::app()->db->createCommand($query)->execute();
}




?>