<?php

function isEmpty($table){
	$empty = true;
	$query = "select count(*) from ".$table."";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	if($result != 0){
		$empty = false;
	}else{
		$empty = true;
	}
	
	return $empty;
}



?>