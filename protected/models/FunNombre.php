<?php
function nombrevalido($nombre) {
	
	$permitidos = "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ ";
	for($i=0; $i<strlen($nombre); $i++){
		if(strpos($permitidos, substr($nombre,$i,1))===false){
			return false;	
			}
		}
	return true;
	}