<?php

function createSemesters($semestres){
	for($i=1;$i<=$semestres;$i++){
		$semesterValue="".$i."° Semestre";
		$query="insert into semestre(NombreSemestre) values('".$semesterValue."')";
		Yii::app()->db->createCommand($query)->execute();	
	}
}


?>