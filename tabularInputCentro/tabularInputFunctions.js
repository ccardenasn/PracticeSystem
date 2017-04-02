function add_row(){
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' id='Rut"+$rowno+"' name='RutProfGuiaCP[]' size='14' placeholder='Rut' onblur=validateRut('Rut"+$rowno+"')><br><span class='error_text' id='Rut"+$rowno+"_error'></span><input type='text' id='Mail"+$rowno+"' name='MailProfGuiaCP[]' size='14' placeholder='Mail' onblur=check_email('Mail"+$rowno+"')><br><span class='error_text' id='Mail"+$rowno+"_error'></span></td><td><input type='text' id='Nombre"+$rowno+"' name='NombreProfGuiaCP[]' size='14' placeholder='Nombre' onblur=validateName('Nombre"+$rowno+"')><br><span class='error_text' id='Nombre"+$rowno+"_error'></span><input type='text' id='Telefono"+$rowno+"' name='TelefonoProfGuiaCP[]' size='14' placeholder='Telefono' onblur=validateTelefono('Telefono"+$rowno+"')><br><span class='error_text' id='Telefono"+$rowno+"_error'></span></td><td><input type='text' id='Curso"+$rowno+"' name='CursoProfGuiaCP[]' size='14' placeholder='Curso'><br><span class='error_text' id='Curso"+$rowno+"_error'></span><input type='text' id='Celular"+$rowno+"' name='CelularProfGuiaCP[]' size='14' placeholder='Celular' onblur=validateCelular('Celular"+$rowno+"')><br><span class='error_text' id='Celular"+$rowno+"_error'></span></td><td><select id='ProfesorJefe"+$rowno+"' name='ProfesorJefeProfGuiaCP[]' style='width:130px'><option value='Si' selected>Si</option><option value='No' selected>No</option><option value='No Aplica' selected>No Aplica</option></select></span><input type='file' id='Imagen"+$rowno+"' name='ImagenProfGuiaCP[]' size='14'></td><td><input type='button' value='x' onclick=delete_row('row"+$rowno+"')></td></tr>");
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
		//$("#Imagen1").val('lalalal');
		l++;
	}
}
