<?php

function clavevalida($password,$confirm){
    $passwordValid = false;
    $comparePasswords = strcmp($password,$confirm);
    
    if($comparePasswords == 0){
        $passwordValid = true;
    }else{
        $passwordValid = false;
    }
    
    return $passwordValid;
}




?>