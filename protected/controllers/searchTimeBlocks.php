<?php

function getBlockInitTime($bloque){
    $initTimeData=Bloque::model()->find('NombreBloque=?',array($bloque));
    $initTime = $initTimeData->HoraInicio;
	
	return $initTime;
}

function getBlockEndTime($bloque){
    $endTimeData=Bloque::model()->find('NombreBloque=?',array($bloque));
    $endTime = $endTimeData->HoraFin;
	
	return $endTime;
}


?>