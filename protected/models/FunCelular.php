<?php
function celularvalido($celular) {
	$esCelular=false;
    
    if(strlen($celular)=== 8 && (substr($celular,0,4)!="0652")){
        $esCelular=true;
    }
	
	return $esCelular;
}