<?php

function containsSubjects($id){
	$query="select count(*) from asignatura where Semestre_CodSemestre = '".$id."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function deleteSubjects($id){
	$query="delete from asignatura where Semestre_CodSemestre = '".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}

function getSemesterSubjects($id){
	$query="select * from asignatura where Semestre_CodSemestre = '".$id."';";
	$semesterSubjects=Yii::app()->db->createCommand($query)->queryAll();
	
	return $semesterSubjects;
}

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