<?php

function containsProf($rut){
	$query="select count(*) from profesorguiacp where RutProfGuiaCP = '".$rut."';";
	$exist=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $exist;
}


?>