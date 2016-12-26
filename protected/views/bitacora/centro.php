<?php

function getPlanData($req){
    
    $querysesion="select NumeroSesion from planificacionclase where CodPlanificacion ='".$req."';";
    $sesiondata=Yii::app()->db->createCommand($querysesion)->queryScalar();  
    
    $queryrut="select Estudiante_RutEstudiante from planificacionclase where CodPlanificacion = '".$req."';";
    $rutdata=Yii::app()->db->createCommand($queryrut)->queryScalar();
        
    $querycentroid="select CentroPractica_RBD from estudiante where RutEstudiante = '".$rutdata."';";
    $centroid=Yii::app()->db->createCommand($querycentroid)->queryScalar();
        
    $querycentro="select NombreCentroPractica from centropractica where RBD = '".$centroid."';";
    $centro=Yii::app()->db->createCommand($querycentro)->queryScalar();
    
    $plandata=array($sesiondata,$centro);
    
    return $plandata;
}
