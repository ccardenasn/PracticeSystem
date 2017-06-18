<?php

function secretariaupdatevalido($center,$rut)
{
    $isValid=false;
    
    $secretariaModel = Secretariacp::model()->find('CentroPractica_RBD=?',array($center));
    $secretariaUpdate = Secretariacp::model()->findByAttributes(array('CentroPractica_RBD'=>$center,'RutSecretariaCP'=>$rut));
    
    if($secretariaUpdate != null || $secretariaModel == null ){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function directorupdatevalido($center,$rut)
{
    $isValid=false;
    
    $directorModel = Directorcp::model()->find('CentroPractica_RBD=?',array($center));
    $directorUpdate = Directorcp::model()->findByAttributes(array('CentroPractica_RBD'=>$center,'RutDirectorCP'=>$rut));
    
    if($directorUpdate != null || $directorModel == null){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function jefeupdatevalido($center,$rut)
{
    $isValid=false;
    
    $jefeutpModel = Jefeutpcp::model()->find('CentroPractica_RBD=?',array($center));
    $jefeutpUpdate = Jefeutpcp::model()->findByAttributes(array('CentroPractica_RBD'=>$center,'RutJefeUTPCP'=>$rut));
    
    if($jefeutpUpdate != null || $jefeutpModel == null){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function profesorcoordinadorupdatevalido($center,$rut)
{
    $isValid=false;
    
    $profesorModel = Profesorcoordinadorpracticacp::model()->find('CentroPractica_RBD=?',array($center));
    $profesorUpdate = Profesorcoordinadorpracticacp::model()->findByAttributes(array('CentroPractica_RBD'=>$center,'RutProfCoordGuiaCp'=>$rut));
    
    if($profesorUpdate != null || $profesorModel == null){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function secretariavalido($center)
{
    $isValid=false;
    
    $secretariaModel = Secretariacp::model()->find('CentroPractica_RBD=?',array($center));
    
    if($secretariaModel == null){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function directorvalido($center)
{
    $isValid=false;
    
    $directorModel = Directorcp::model()->find('CentroPractica_RBD=?',array($center));
    
    if($directorModel == null){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function jefevalido($center)
{
    $isValid=false;
    
    $jefeutpModel = Jefeutpcp::model()->find('CentroPractica_RBD=?',array($center));
    
    if($jefeutpModel == null){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function profesorcoordinadorvalido($center)
{
    $isValid=false;
    
    $profesorModel = Profesorcoordinadorpracticacp::model()->find('CentroPractica_RBD=?',array($center));
    
    if($profesorModel == null){
        $isValid = true;
    }else{
        $isValid = false;
    }
    
    return $isValid;
}

function centrovalido($center)
{
    $isValid=false;
    
    $profesorguiaModel = Profesorguiacp::model()->findAll('CentroPractica_RBD=?',array($center));
    
    if($profesorguiaModel == null){
        $isValid = false;
    }else{
        $isValid = true;
    }
    
    return $isValid;
}

?>