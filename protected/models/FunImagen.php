<?php
function imagenvalida($image) {
	$isValid = false;
	$imageExtension = pathinfo($image, PATHINFO_EXTENSION);
    
    if($imageExtension != "jpg" || $imageExtension != "jpeg" || $imageExtension != "png"){
        $isValid = false;
    }else{
        $isValid = true;
    }
    
    return $isValid;
}