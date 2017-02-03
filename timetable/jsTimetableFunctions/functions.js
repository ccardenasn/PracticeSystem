var condicion="0";
var mainAction = "";

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
	var dataa = 'rut='+rut+'&horario='+horario+'&action='+mainAction;
	
	$.ajax({
		type: 'POST',
		url: 'timetable/saveTable.php',
		data: dataa,
		success: timetableCreatedMessage(),
	});
}

function loadUpdate(){
	mainAction = "Update";
}

function loadCreate(){
	mainAction = "Create";
}

function timetableCreatedMessage(){
	alert("El Horario Ha Sido Almacenado Correctamente");
}