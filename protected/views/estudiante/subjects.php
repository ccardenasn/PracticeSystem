<?php

function containsSu(){
	$query="select count(*) from asignatura;";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}