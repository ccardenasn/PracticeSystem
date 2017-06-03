<?php

function fechavalida($date)
{
    $isDate=false;
    $pattern="/^(0?[1-9]|[12][0-9]|3[01])[\/|-](0?[1-9]|[1][012])[\/|-]((19|20)?[0-9]{2})$/";
    
    if(preg_match($pattern,$date)){
        $values=preg_split("[\/|-]",$date);
        
        if(checkdate($values[1],$values[0],$values[2])){
            $isDate= true;
        }
    }
    return $isDate;
}

?>