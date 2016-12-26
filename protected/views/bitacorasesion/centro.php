<?php

function getPlanData($req){
    
    $querysesion="select SesionInformada from planificacionclase where CodPlanificacion ='".$req."';";
    $sesiondata=Yii::app()->db->createCommand($querysesion)->queryScalar();  
    
    $queryrut="select Estudiante_RutEstudiante from planificacionclase where CodPlanificacion = '".$req."';";
    $rutdata=Yii::app()->db->createCommand($queryrut)->queryScalar();
        
    $querycentroid="select CentroPractica_RBD from estudiante where RutEstudiante = '".$rutdata."';";
    $centroid=Yii::app()->db->createCommand($querycentroid)->queryScalar();
        
    $querycentro="select NombreCentroPractica from centropractica where RBD = '".$centroid."';";
    $centro=Yii::app()->db->createCommand($querycentro)->queryScalar();
	
	$queryfecha="select Fecha from planificacionclase where CodPlanificacion = '".$req."';";
	$fechadata=Yii::app()->db->createCommand($queryfecha)->queryScalar();
	
	$queryst="select NombreEstudiante from estudiante where RutEstudiante='".$rutdata."';";
	$stdata=Yii::app()->db->createCommand($queryst)->queryScalar();
    
    $plandata=array($sesiondata,$centro,$fechadata,$stdata);
    
    return $plandata;
}
