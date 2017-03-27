function add_row(){
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='RutProfGuiaCP[]' size='14' placeholder='Rut'><input type='text' name='MailProfGuiaCP[]' size='14' placeholder='Mail'></td><td><input type='text' name='NombreProfGuiaCP[]' size='14' placeholder='Nombre'><input type='text' name='TelefonoProfGuiaCP[]' size='14' placeholder='Telefono'></td><td><input type='text' name='CursoProfGuiaCP[]' size='14' placeholder='Curso'><input type='text' name='CelularProfGuiaCP[]' size='14' placeholder='Celular'></td><td><input type='text' name='ProfesorJefeProfGuiaCP[]' size='14' placeholder='Profesor Jefe'><input type='text' name='CentroPractica_RBD[]' size='14' placeholder='Centro de Práctica'></td><td><input type='text' name='ImagenProfGuiaCP[]' size='14' placeholder='Imagen'></td><td><input type='button' value='x' onclick=delete_row('row"+$rowno+"')></td></tr>");
	
	
}

function delete_row(rowno){
	$('#'+rowno).remove();
}
