function cambiar(){
	var subject = $("#txtSubject").val();
	
	if(condicion == "1"){		
		$("#lbl_a_row_a").text(subject);
		addArrItem(0,subject);	
	}
	
	if(condicion == "2"){
		$("#lbl_b_row_a").text(subject);
		addArrItem(1,subject);
	}
	
	if(condicion == "3"){
		$("#lbl_c_row_a").text(subject);
		addArrItem(2,subject);
	}
	
	if(condicion == "4"){
		$("#lbl_d_row_a").text(subject);
		addArrItem(3,subject);
	}
	
	if(condicion == "5"){
		$("#lbl_e_row_a").text(subject);
		addArrItem(4,subject);
	}
	
	if(condicion == "6"){
		$("#lbl_a_row_b").text(subject);
		addArrItem(5,subject);
	}
	
	if(condicion == "7"){
		$("#lbl_b_row_b").text(subject);
		addArrItem(6,subject);
	}
	
	if(condicion == "8"){
		$("#lbl_c_row_b").text(subject);
		addArrItem(7,subject);
	}
	
	if(condicion == "9"){
		$("#lbl_d_row_b").text(subject);
		addArrItem(8,subject);
	}
	
	if(condicion == "10"){
		$("#lbl_e_row_b").text(subject);
		addArrItem(9,subject);
	}
	
	if(condicion == "11"){
		$("#lbl_a_row_c").text(subject);
		addArrItem(10,subject);
	}
	
	if(condicion == "12"){
		$("#lbl_b_row_c").text(subject);
		addArrItem(11,subject);
	}
	
	if(condicion == "13"){
		$("#lbl_c_row_c").text(subject);
		addArrItem(12,subject);
	}
	
	if(condicion == "14"){
		$("#lbl_d_row_c").text(subject);
		addArrItem(13,subject);
	}
	
	if(condicion == "15"){
		$("#lbl_e_row_c").text(subject);
		addArrItem(14,subject);
	}
	
	if(condicion == "16"){
		$("#lbl_a_row_d").text(subject);
		addArrItem(15,subject);
	}
	
	if(condicion == "17"){
		$("#lbl_b_row_d").text(subject);
		addArrItem(16,subject);
	}
	
	if(condicion == "18"){
		$("#lbl_c_row_d").text(subject);
		addArrItem(17,subject);
	}
	
	if(condicion == "19"){
		$("#lbl_d_row_d").text(subject);
		addArrItem(18,subject);
	}
	
	if(condicion == "20"){
		$("#lbl_e_row_d").text(subject);
		addArrItem(19,subject);
	}
	
	if(condicion == "21"){
		$("#lbl_a_row_e").text(subject);
		addArrItem(20,subject);
	}
	
	if(condicion == "22"){
		$("#lbl_b_row_e").text(subject);
		addArrItem(21,subject);
	}
	
	if(condicion == "23"){
		$("#lbl_c_row_e").text(subject);
		addArrItem(22,subject);
	}
	
	if(condicion == "24"){
		$("#lbl_d_row_e").text(subject);
		addArrItem(23,subject);
	}
	
	if(condicion == "25"){
		$("#lbl_e_row_e").text(subject);
		addArrItem(24,subject);
	}
	
	if(condicion == "26"){
		$("#lbl_a_row_f").text(subject);
		addArrItem(25,subject);
	}
	
	if(condicion == "27"){
		$("#lbl_b_row_f").text(subject);
		addArrItem(26,subject);
	}
	
	if(condicion == "28"){
		$("#lbl_c_row_f").text(subject);
		addArrItem(27,subject);
	}
	
	if(condicion == "29"){
		$("#lbl_d_row_f").text(subject);
		addArrItem(28,subject);
	}
	
	if(condicion == "30"){
		$("#lbl_e_row_f").text(subject);
		addArrItem(29,subject);
	}
}

function addArrItem(index,subject){
	var valueArr = Array(rut,subject,condicion,day,block);
	tableArr[index] = valueArr;
}