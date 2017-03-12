<?php

function createSemesters($semestres){
	for($i=1;$i<=$semestres;$i++){
		$semesterValue="".$i."° Semestre";
		$query="insert into semestre(NombreSemestre) values('".$semesterValue."')";
		Yii::app()->db->createCommand($query)->execute();	
	}
}

function countSemesters(){
	$query="select count(*) from semestre";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function deleteSemesters(){
	$query="truncate table semestre";
	Yii::app()->db->createCommand($query)->execute();	
}


?>