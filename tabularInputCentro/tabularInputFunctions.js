function add_row(){
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><label>Rut</label><input type='text' id='Rut"+$rowno+"' name='RutProfGuiaCP[]' size='14' onblur=validateRut('Rut"+$rowno+"') required><br><span class='error_text' id='Rut"+$rowno+"_error'></span><label>Correo Electrónico</label><input type='text' id='Mail"+$rowno+"' name='MailProfGuiaCP[]' size='14' onblur=check_email('Mail"+$rowno+"') required><br><span class='error_text' id='Mail"+$rowno+"_error'></span></td><td><label>Profesor Guia CP</label><input type='text' id='Nombre"+$rowno+"' name='NombreProfGuiaCP[]' size='14' onblur=validateName('Nombre"+$rowno+"') required><br><span class='error_text' id='Nombre"+$rowno+"_error'></span><label>Teléfono</label><input type='text' id='Telefono"+$rowno+"' name='TelefonoProfGuiaCP[]' size='14' onblur=validateNumero('Telefono"+$rowno+"') required><br><span class='error_text' id='Telefono"+$rowno+"_error'></span></td><td><label>Curso</label><input type='text' id='Curso"+$rowno+"' name='CursoProfGuiaCP[]' size='14' required><br><span class='error_text' id='Curso"+$rowno+"_error'></span><label>Celular</label><input type='text' id='Celular"+$rowno+"' name='CelularProfGuiaCP[]' size='14' onblur=validateNumero('Celular"+$rowno+"') required><br><span class='error_text' id='Celular"+$rowno+"_error'></span></td><td><label>Profesor Jefe</label><select id='ProfesorJefe"+$rowno+"' name='ProfesorJefeProfGuiaCP[]' style='width:130px'><option value='Si' selected>Si</option><option value='No' selected>No</option><option value='No Aplica' selected>No Aplica</option></select><br><span class='error_text' id='ProfesorJefe"+$rowno+"_error'></span><label>Imagen</label><input type='file' id='Imagen"+$rowno+"' name='ImagenProfGuiaCP[]'  size='14'><br><span class='error_text' id='Imagen"+$rowno+"_error'></span></td><td><input type='button' value='x' onclick=delete_row('row"+$rowno+"')></td></tr>");

}

function delete_row(rowno){
	$('#'+rowno).remove();
}

function setUpdateRows(totalRows){
	for(i=0;i<totalRows-1;i++){
		add_row();
	}
	setRowsData(profesoresData);
}

function setRowsData(rowsData){
	var l=1;
	for(i=0;i<rowsData['RutProfGuiaCP'].length;i++){
		$("#Rut"+l+"").val(""+rowsData['RutProfGuiaCP'][i]+"");
		$("#Mail"+l+"").val(""+rowsData['MailProfGuiaCP'][i]+"");
		$("#Nombre"+l+"").val(""+rowsData['NombreProfGuiaCP'][i]+"");
		$("#Telefono"+l+"").val(""+rowsData['TelefonoProfGuiaCP'][i]+"");
		$("#Curso"+l+"").val(""+rowsData['CursoProfGuiaCP'][i]+"");
		$("#Celular"+l+"").val(""+rowsData['CelularProfGuiaCP'][i]+"");
		$("#ProfesorJefe"+l+"").val(""+rowsData['ProfesorJefeProfGuiaCP'][i]+"");
		
		l++;
	}
}

function formSubmit(i){
    
    var validForm = true;
    
    var checkRutProf = true;
    var checkMail = true;
    var checkProfesor = true;
    var checkTelefono = true;
    var checkCelular = true;
    
    var rut=$("#Rut"+i+"").val();
    var validRut = checkRut(rut);
    
    var mail=$("#Mail"+i+"").val();
    var validMail = checkCorreo(mail);
    
    var profesor=$("#Nombre"+i+"").val();
    var validProfesor = checkNombre(profesor);
    
    var telefono=$("#Telefono"+i+"").val();
    var validTelefono = checkNumero(telefono);
    
    var celular=$("#Celular"+i+"").val();
    var validCelular = checkNumero(celular);
    
    if(validRut == false){
        checkRutProf = false;
    }
    
    if(validMail == false){
        checkMail = false;
    }
    
    if(validProfesor == false){
        checkProfesor = false;
    }
    
    if(validTelefono == false){
        checkTelefono = false;
    }
    
    if(validCelular == false){
        checkCelular = false;
    }
    
    if(checkRutProf == false || checkMail == false || checkProfesor == false || checkTelefono == false || checkCelular == false){
        validForm = false;
    }
    
    return validForm;
}

function formAlert(i){
    
    var rut=$("#Rut"+i+"").val();
    var validRut = checkRut(rut);
    
    var mail=$("#Mail"+i+"").val();
    var validMail = checkCorreo(mail);
    
    var profesor=$("#Nombre"+i+"").val();
    var validProfesor = checkNombre(profesor);
    
    var telefono=$("#Telefono"+i+"").val();
    var validTelefono = checkNumero(telefono);
    
    var celular=$("#Celular"+i+"").val();
    var validCelular = checkNumero(celular);
    
    if(validRut == false){
        $("#Rut"+i+"").css({"border":"1px solid red"});
        $("#Rut"+i+"_error").text("rut no válido");
        $("#Rut"+i+"_error").css({"margin-top":"5px"});
    }
    
    if(validMail == false){
        $("#Mail"+i+"").css({"border":"1px solid red"});
        $("#Mail"+i+"_error").text("correo no válido");
        $("#Mail"+i+"_error").css({"margin-top":"5px"});
    }
    
    if(validProfesor == false){
        $("#Nombre"+i+"").css({"border":"1px solid red"});
        $("#Nombre"+i+"_error").text("nombre no válido");
        $("#Nombre"+i+"_error").css({"margin-top":"5px"});
    }
    
    if(validTelefono == false){
        $("#Telefono"+i+"").css({"border":"1px solid red"});
        $("#Telefono"+i+"_error").text("ingrese solo números");
        $("#Telefono"+i+"_error").css({"margin-top":"5px"});
    }
    
    if(validCelular == false){
        $("#Celular"+i+"").css({"border":"1px solid red"});
        $("#Celular"+i+"_error").text("ingrese solo números");
        $("#Celular"+i+"_error").css({"margin-top":"5px"});
    }
}

function checkForm(){
    var validForm = false;
    var run = true;
    
    totalFilas=$("#employee_table tr").length;
    
    for(i=1;i<=totalFilas;i++){
        formAlert(i);
    }
    
    var j = 1;
    
    while(run == true){
        
        validForm = formSubmit(j);
        
        if(validForm == false){
            validForm = false;
            run = false;
        }
        j++;
    }
    
    if(validForm == false){
        div = document.getElementById('errorProfesores');
        div.style.display = '';
    }
    
    return validForm;
}
