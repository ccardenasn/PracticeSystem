<?php

function containsTimeTableSubject($id){
	$query="select count(*) from horario where Asignatura_NombreAsignatura = '".$id."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function deleteTimetableSubjects($id){
	$query="delete from  horario where Asignatura_NombreAsignatura = '".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}



?>