<?php

function containsSubjects($id){
	$query="select count(*) from semestre where  = '".$id."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function deleteTimetableSubjects($id){
	$query="delete from  horario where HorarioAdmin_CodHorario = '".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}



?>