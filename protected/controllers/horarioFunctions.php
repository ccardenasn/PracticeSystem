<?php

function containsTimetableSubject($id){
	$query="select count(*) from horario where HorarioAdmin_CodHorario = '".$id."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}

function deleteTimetableSubjects($id){
	$query="delete from  horario where HorarioAdmin_CodHorario = '".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}



?>