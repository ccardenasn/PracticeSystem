<?php

function consultaplanificacion($estudiantelogged)
{
    $querycount = "select count(*) from planificacionclase where Estudiante_RutEstudiante = '".$estudiantelogged."';";
    $numerosesionesusuario=Yii::app()->db->createCommand($querycount)->queryScalar();
        
    $querypractica="select ConfiguracionPractica_NombrePractica from estudiante where RutEstudiante = '".$estudiantelogged."';";
    $practicadata=Yii::app()->db->createCommand($querypractica)->queryScalar();
        
    $querytotalsesiones="select NumeroSesionesPractica from configuracionpractica where NombrePractica = '".$practicadata."';";
    $totalsesiones=Yii::app()->db->createCommand($querytotalsesiones)->queryScalar();
        
    echo $na = intval($numerosesionesusuario);
    echo $nb = intval($totalsesiones);
    
    $arrconsulta= array($na,$nb);
    
    return $arrconsulta;
}

function consultabitacora($plan)
{
	$querycount = "select count(*) from bitacorasesion where PlanificacionClase_CodPlanificacion = '".$plan."';";
	$bitexist=Yii::app()->db->createCommand($querycount)->queryScalar();
	
	return $bitexist;
}