var cellState=0;

function showInit() {
	div = document.getElementById('formInit_div');
	div.style.display = '';
}

function showEnd() {
	div = document.getElementById('formEnd_div');
	div.style.display = '';
}

function closeInit(){
	div = document.getElementById('formInit_div');
	div.style.display = 'none';
}

function closeEnd(){
	div = document.getElementById('formEnd_div');
	div.style.display = 'none';
}

function enviar(){
	var time = "";
	var remainder = cellState%2;
	
	if(remainder != 0){
		time = $('#txtInitHour').val();
	}else{
		time = $('#txtEndHour').val();
	}
	
	var info = 'time='+time+'&cellState='+cellState;
	
	$.ajax({
		type: 'POST',
		url: 'saveTime.php',
		data: info,
	});
}