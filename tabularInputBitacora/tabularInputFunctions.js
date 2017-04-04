function add_row(){
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' id='id"+$rowno+"' name='id[]' size='14' placeholder='ID'><br><span class='error_text' id='id"+$rowno+"_error'></span></td><td><input type='text' id='curso"+$rowno+"' name='curso[]' size='14' placeholder='Curso'><br><span class='error_text' id='curso"+$rowno+"_error'></span></td><td><input type='text' id='hora"+$rowno+"' name='hora[]' size='14' placeholder='Hora'><br><span class='error_text' id='hora"+$rowno+"_error'></span></td><td><input type='text' id='asignatura"+$rowno+"' name='asignatura[]' size='14' placeholder='Asignatura'><br><span class='error_text' id='asignatura"+$rowno+"_error'></span></td><td><input type='text' id='profesorguia"+$rowno+"' name='profesorguia[]' size='14' placeholder='Profesor Guia'><br><span class='error_text' id='profesorguia"+$rowno+"_error'></span></td><td><input type='text' id='numeroalumnos"+$rowno+"' name='numeroalumnos[]' size='14' placeholder='Numero de Alumnos'><br><span class='error_text' id='numeroalumnos"+$rowno+"_error'></span></td><td><input type='button' value='x' onclick=delete_row('row"+$rowno+"')></td></tr>");	
}

function delete_row(rowno){
	$('#'+rowno).remove();
}

function setUpdateRows(totalRows){
	for(i=0;i<totalRows-1;i++){
		add_row();
	}
	setRowsData(clasesData);
}

function setRowsData(rowsData){
	var l=1;
	for(i=0;i<rowsData['id'].length;i++){
		$("#id"+l+"").val(""+rowsData['id'][i]+"");
		$("#curso"+l+"").val(""+rowsData['curso'][i]+"");
		$("#hora"+l+"").val(""+rowsData['hora'][i]+"");
		$("#asignatura"+l+"").val(""+rowsData['asignatura'][i]+"");
		$("#profesorguia"+l+"").val(""+rowsData['profesorguia'][i]+"");
		$("#numeroalumnos"+l+"").val(""+rowsData['numeroalumnos'][i]+"");
		l++;
	}
}
