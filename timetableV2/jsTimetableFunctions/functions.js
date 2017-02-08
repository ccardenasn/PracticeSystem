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
	var info = 'horario='+tableArr;
	
	$.ajax({
		type: 'POST',
		url: 'saveTable.php',
		data: info,
	});
}