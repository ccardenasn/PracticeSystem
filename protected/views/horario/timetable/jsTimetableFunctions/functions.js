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
	var horario = $('#table_div').html();
	var dataa = 'horario='+horario;
	
	$.ajax({
		type: 'POST',
		url: 'saveTable.php',
		data: dataa,
	});
}