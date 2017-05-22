function add_row(){
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' id='CursoClase"+$rowno+"' name='CursoClase[]' size='14' required><br><span class='error_text' id='CursoClase"+$rowno+"_error'></span></td><td><input type='text' id='HoraClase"+$rowno+"' name='HoraClase[]' size='14' onblur=validateNumero('HoraClase"+$rowno+"') required><br><span class='error_text' id='HoraClase"+$rowno+"_error'></span></td><td><input type='text' id='AsignaturaClase"+$rowno+"' name='AsignaturaClase[]' size='14' required><br><span class='error_text' id='AsignaturaClase"+$rowno+"_error'></span></td><td><input type='text' id='ProfesorGuiaClase"+$rowno+"' name='ProfesorGuiaClase[]' size='14' required><br><span class='error_text' id='ProfesorGuiaClase"+$rowno+"_error'></span></td><td><input type='text' id='NumeroAlumnosClase"+$rowno+"' name='NumeroAlumnosClase[]' size='14' onblur=validateNumero('NumeroAlumnosClase"+$rowno+"') required><br><span class='error_text' id='NumeroAlumnosClase"+$rowno+"_error'></span></td><td><input type='button' value='x' onclick=delete_row('row"+$rowno+"')></td></tr>");	
	
    
    
	
}

function add_rowUpdate(){
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='hidden' id='CodClase"+$rowno+"' name='CodClase[]' size='14' placeholder='ID'><br><span class='error_text' id='CodClase"+$rowno+"_error'></span></td><td><input type='text' id='CursoClase"+$rowno+"' name='CursoClase[]' size='14' placeholder='Curso'><br><span class='error_text' id='CursoClase_error'></span></td><td><input type='text' id='HoraClase"+$rowno+"' name='HoraClase[]' size='14' placeholder='Hora'><br><span class='error_text' id='HoraClase_error'></span></td><td><input type='text' id='AsignaturaClase"+$rowno+"' name='AsignaturaClase[]' size='14' placeholder='Asignatura'><br><span class='error_text' id='AsignaturaClase"+$rowno+"_error'></span></td><td><input type='text' id='ProfesorGuiaClase"+$rowno+"' name='ProfesorGuiaClase[]' size='14' placeholder='Profesor Guia'><br><span class='error_text' id='ProfesorGuiaClase"+$rowno+"_error'></span></td><td><input type='text' id='NumeroAlumnosClase"+$rowno+"' name='NumeroAlumnosClase[]' size='14' placeholder='Numero de Alumnos'><br><span class='error_text' id='NumeroAlumnosClase"+$rowno+"_error'></span></td><td><input type='button' value='x' onclick=delete_row('row"+$rowno+"')></td></tr>");
	
	
}



function delete_row(rowno){
	$('#'+rowno).remove();
}

function setUpdateRows(totalRows){
	for(i=0;i<totalRows-1;i++){
		add_rowUpdate();
	}
	setRowsData(clasesData);
}

function setRowsData(rowsData){
	var l=1;
	for(i=0;i<rowsData['CodClase'].length;i++){
		$("#CodClase"+l+"").val(""+rowsData['CodClase'][i]+"");
		$("#CursoClase"+l+"").val(""+rowsData['CursoClase'][i]+"");
		$("#HoraClase"+l+"").val(""+rowsData['HoraClase'][i]+"");
		$("#AsignaturaClase"+l+"").val(""+rowsData['AsignaturaClase'][i]+"");
		$("#ProfesorGuiaClase"+l+"").val(""+rowsData['ProfesorGuiaClase'][i]+"");
		$("#NumeroAlumnosClase"+l+"").val(""+rowsData['NumeroAlumnosClase'][i]+"");
		l++;
	}
}
