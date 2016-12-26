<?php
function telefonovalido($telefono) {
	$esTelefono=false;
	
	if((substr($telefono,0,4)==="0652") && strlen($telefono)=== 10){
		$esTelefono=true;
	}
	return $esTelefono;
}