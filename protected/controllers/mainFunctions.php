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

function getFileModel($fileAttrib,$table,$codTable,$id){
	$query = "select ".$fileAttrib." from ".$table." where ".$codTable." = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function saveFilePath($table,$fileAttrib,$file,$codTable,$id){
	$query="update ".$table." set ".$fileAttrib." = '".$file."' where ".$codTable." = '".$id."';";
	Yii::app()->db->createCommand($query)->execute();
}

function contains($table,$codTable,$id){
	$query = "select count(*) from ".$table." where ".$codTable." = '".$id."'";
	$result=Yii::app()->db->createCommand($query)->queryScalar();
	
	return $result;
}

function deleteData($table,$codTable,$id){
	$query="delete from ".$table." where ".$codTable." ='".$id."'";
	Yii::app()->db->createCommand($query)->execute();
}



?>