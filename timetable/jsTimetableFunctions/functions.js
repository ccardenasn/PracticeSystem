var condicion="0";

function mostrar() {
	div = document.getElementById('form_div');
	div.style.display = '';
}

function cerrar(){
	div = document.getElementById('form_div');
	div.style.display = 'none';
}

function obtener(){
	var rut = $('#lblRut').html();
	var horario = $('#table_div').html();
	
	var dataa = 'rut='+rut+'&horario='+horario;
	
	$.ajax({
		type: 'POST',
		url: 'timetable/saveTable.php',
		data: dataa,
	});
}