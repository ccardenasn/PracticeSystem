var condicion="";
var day = "";
var block = "";
var tableArr = [];

function mostrar() {
	div = document.getElementById('form_div');
	div.style.display = '';
}

function cerrar(){
	div = document.getElementById('form_div');
	div.style.display = 'none';
}

function obtener(){
	$.ajax({
		type: 'POST',
		url: 'Timetable-V2/saveTable.php',
		data: {horario:tableArr},
	});
}