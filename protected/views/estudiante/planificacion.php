<?php

function datosplanificacion($estudiantelogged)
{   
    $queryA="select NombreEstudiante from estudiante where RutEstudiante = '".$estudiantelogged."';";
    $nombredata=Yii::app()->db->createCommand($queryA)->queryScalar();
    $arrplanificacion[0]=$nombredata;
    
    $queryB="select ProfesorGuiaCP_RutProfGuiaCP from estudiante where RutEstudiante='".$estudiantelogged."';";
    $rutprofdata=Yii::app()->db->createCommand($queryB)->queryScalar();
    $arrplanificacion[1]=$rutprofdata;
    
    $queryC="select NombreProfGuiaCP from profesorguiacp where RutProfGuiaCP = '".$rutprofdata."';";
    $nombreprofdata=Yii::app()->db->createCommand($queryC)->queryScalar();
    $arrplanificacion[2]=$nombreprofdata;
    
    $queryD="select ConfiguracionPractica_NombrePractica from estudiante where RutEstudiante = '".$estudiantelogged."';";
    $practicadata=Yii::app()->db->createCommand($queryD)->queryScalar();
    $arrplanificacion[3]=$practicadata;
    
    $queryE="select CursoProfGuiaCP from profesorguiacp where RutProfGuiaCP = '".$rutprofdata."';";    
    $cursodata=Yii::app()->db->createCommand($queryE)->queryScalar();
    $arrplanificacion[4]=$cursodata;
    
    $queryF="select NumeroSesionesPractica from configuracionpractica where NombrePractica = '".$practicadata."';";
    $sesiondata=Yii::app()->db->createCommand($queryF)->queryScalar();
    $arrplanificacion[5]=$sesiondata;
    
    $queryG="select NumeroHorasPractica from configuracionpractica where NombrePractica = '".$practicadata."';";
    $horasdata=Yii::app()->db->createCommand($queryG)->queryScalar();
    $arrplanificacion[6]=$horasdata;
	
	$queryH="select CentroPractica_RBD from estudiante where RutEstudiante = '".$estudiantelogged."';";
	$centrodata=Yii::app()->db->createCommand($queryH)->queryScalar();
    $arrplanificacion[7]=$centrodata;
	
    return $arrplanificacion;
}

function listSesion($total)
{
    $sesiones = array();
    for($i=1;$i<=$total;$i++){
        $sesiones[$i] = $i;
    }
    
    return $sesiones;
}

function viewData($rbd)
{
	$arrcentro = array();
	$queryI="select NombreCentroPractica from centropractica where RBD = '".$rbd."';";
	$centrodata=Yii::app()->db->createCommand($queryI)->queryScalar();
    $arrcentro[0]=$centrodata;
	
	return $arrcentro;
}
