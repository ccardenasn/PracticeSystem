function add_row(){
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' id='Rut"+$rowno+"' name='RutProfGuiaCP[]' size='14' placeholder='Rut' onblur=validateRut('Rut"+$rowno+"')><br><span class='error_text' id='Rut"+$rowno+"_error'></span><input type='text' id='Mail"+$rowno+"' name='MailProfGuiaCP[]' size='14' placeholder='Mail' onblur=check_email('Mail"+$rowno+"')><br><span class='error_text' id='Mail"+$rowno+"_error'></span></td><td><input type='text' id='Nombre"+$rowno+"' name='NombreProfGuiaCP[]' size='14' placeholder='Nombre' onblur=validateName('Nombre"+$rowno+"')><br><span class='error_text' id='Nombre"+$rowno+"_error'></span><input type='text' id='Telefono"+$rowno+"' name='TelefonoProfGuiaCP[]' size='14' placeholder='Telefono' onblur=validateTelefono('Telefono"+$rowno+"')><br><span class='error_text' id='Telefono"+$rowno+"_error'></span></td><td><input type='text' id='Curso"+$rowno+"' name='CursoProfGuiaCP[]' size='14' placeholder='Curso'><br><span class='error_text' id='Curso"+$rowno+"_error'></span><input type='text' id='Celular"+$rowno+"' name='CelularProfGuiaCP[]' size='14' placeholder='Celular' onblur=validateCelular('Celular"+$rowno+"')><br><span class='error_text' id='Celular"+$rowno+"_error'></span></td><td><input type='text' id='ProfesorJefe"+$rowno+"' name='ProfesorJefeProfGuiaCP[]' size='14' placeholder='Profesor Jefe'></span><input type='text' id='Centro"+$rowno+"' name='CentroPractica_RBD[]' size='14' placeholder='Centro de Práctica'></td><td><input type='text' id='Imagen"+$rowno+"' name='ImagenProfGuiaCP[]' size='14' placeholder='Imagen'></td><td><input type='button' value='x' onclick=delete_row('row"+$rowno+"')></td></tr>");
	
	
	
	
}

function delete_row(rowno){
	$('#'+rowno).remove();
}
