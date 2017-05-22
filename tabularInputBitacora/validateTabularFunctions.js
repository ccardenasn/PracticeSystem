var ok=0;
function check_fname(inputValue)
{
 var f_val=$('#'+inputValue).val();
 if(f_val=="")
 {
  $('#'+inputValue).css({"border":"1px solid red"});
  $("#"+inputValue+"_error").text("First Name Must Be Filled!");
  $("#"+inputValue+"_error").css({"margin-top":"5px"});
 }
 else
 {
  $('#'+inputValue).css({"border":"1px solid grey"});
  $("#"+inputValue+"_error").text("");
  $("#"+inputValue+"_error").css({"margin-top":"0px"});
  ok++;
 }
}

function check_email(inputValue)
{
 var email_val=$('#'+inputValue).val();
 if(email_val=="" || email_val.indexOf("@")==-1 || email_val.indexOf(".")==-1)
 {
  $('#'+inputValue).css({"border":"1px solid red"});
  $("#"+inputValue+"_error").text("correo no válido");
  $("#"+inputValue+"_error").css({"margin-top":"5px"});
 }
 else
 {
  $('#'+inputValue).css({"border":"1px solid grey"});
  $("#"+inputValue+"_error").text("");
  $("#"+inputValue+"_error").css({"margin-top":"0px"});
  ok++;
 }
}

function validateName(inputValue){
	var nombre_val=$('#'+inputValue).val();
	
	var isNombre = checkNombre(nombre_val);
	
	if(isNombre == false){
		$('#'+inputValue).css({"border":"1px solid red"});
		$("#"+inputValue+"_error").text("nombre no válido");
		$("#"+inputValue+"_error").css({"margin-top":"5px"});
	}else{
		$('#'+inputValue).css({"border":"1px solid grey"});
		$("#"+inputValue+"_error").text("");
		$("#"+inputValue+"_error").css({"margin-top":"0px"});
		ok++;
	}
}

function validateNumero(inputValue){
	var numero_val=$('#'+inputValue).val();
	
	var isNumero = checkNumero(numero_val);
	
	if(isNumero == false){
		$('#'+inputValue).css({"border":"1px solid red"});
		$("#"+inputValue+"_error").text("ingrese solo números");
		$("#"+inputValue+"_error").css({"margin-top":"5px"});
	}else{
		$('#'+inputValue).css({"border":"1px solid grey"});
		$("#"+inputValue+"_error").text("");
		$("#"+inputValue+"_error").css({"margin-top":"0px"});
		ok++;
	}
}



function validateRut(inputValue){
	var rut_val=$('#'+inputValue).val();
	
	var isRut = checkRut(rut_val);
	
	if(isRut == false){
		$('#'+inputValue).css({"border":"1px solid red"});
		$("#"+inputValue+"_error").text("rut no válido");
		$("#"+inputValue+"_error").css({"margin-top":"5px"});
	}else{
		$('#'+inputValue).css({"border":"1px solid grey"});
		$("#"+inputValue+"_error").text("");
		$("#"+inputValue+"_error").css({"margin-top":"0px"});
		ok++;
	}
}

function validateTelefono(inputValue){
	var telefono_val=$('#'+inputValue).val();
	
	var isTelefono = checkTelefono(telefono_val);
	
	if(isTelefono == false){
		$('#'+inputValue).css({"border":"1px solid red"});
		$("#"+inputValue+"_error").text("telefono no válido");
		$("#"+inputValue+"_error").css({"margin-top":"5px"});
	}else{
		$('#'+inputValue).css({"border":"1px solid grey"});
		$("#"+inputValue+"_error").text("");
		$("#"+inputValue+"_error").css({"margin-top":"0px"});
		ok++;
	}
}

function validateCelular(inputValue){
	var celular_val=$('#'+inputValue).val();
	
	var isCelular = checkCelular(celular_val);
	
	if(isCelular == false){
		$('#'+inputValue).css({"border":"1px solid red"});
		$("#"+inputValue+"_error").text("celular no válido");
		$("#"+inputValue+"_error").css({"margin-top":"5px"});
	}else{
		$('#'+inputValue).css({"border":"1px solid grey"});
		$("#"+inputValue+"_error").text("");
		$("#"+inputValue+"_error").css({"margin-top":"0px"});
		ok++;
	}
}


function checkRut($rut){
	$esRut=false;
	
	$numero = $rut.substr(0,$rut.length-2);

    $start=true;
    $serie=2;

    $result=0;

	$len=$numero.length-1;
    
	while($start==true){

		$digitostr=$numero.substr($len,1);
    
        $digitoint=parseInt($digitostr);
    
        $valorserie=$digitoint*$serie;
    
        $result=$result+$valorserie;
    
        $len=$len-1;
    
        $serie=$serie+1;
    
        if($serie > 7){
            $serie=2;
        }
    
        if($len < 0){
            $start=false;
        }
    }

    $modulo=$result%11;

    $digitoresto=11-$modulo;

	$digitover=$rut.substr($rut.length-1,1);

    if($digitoresto == $digitover){
        $esRut=true;
    }else{
        if($digitoresto == 11){
            if($digitover == '0'){
                $esRut=true;
            }
        }else{
            if($digitoresto == 10){
                if($digitover == 'k'){
                    $esRut=true;
                }
            }
        }
    }	
	return $esRut;
}

function checkNombre($nombre) {
	$isNombre = true;
	$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
	for($i=0; $i<$nombre.length; $i++){
		//if(strpos($permitidos, $nombre.substr($i,1))===false){
		if(($permitidos.indexOf($nombre.substr($i,1))) < 0){
			$isNombre=false;	
		}
	}
	return $isNombre;
}

function checkNumero($numero) {
	$isNumero = true;
	$permitidos = "0123456789";
	for($i=0; $i<$numero.length; $i++){
		if(($permitidos.indexOf($numero.substr($i,1))) < 0){
			$isNumero = false;	
			}
		}
    return $isNumero;
}

function checkTelefono($telefono) {
	$esTelefono=false;
	
	if(($telefono.substr(0,4) ==="0652") && $telefono.length === 10){
		$esTelefono=true;
	}
	return $esTelefono;
}

function checkCelular($celular) {
	$esCelular=false;
    
    if($celular.length === 8 && ($celular.substr(0,4)!="0652")){
        $esCelular=true;
    }
	
	return $esCelular;
}
