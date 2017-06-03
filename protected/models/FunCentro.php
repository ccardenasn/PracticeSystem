<?php

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