<?php
function numerovalido($numero) {
	
	$permitidos = "0123456789";
	for($i=0; $i<strlen($numero); $i++){
		if(strpos($permitidos, substr($numero,$i,1))===false){
			return false;	
			}
		}
    return true;
}