<script languague="javascript">
	
	var condicion="0";
	
	function mostrar() {
		div = document.getElementById('form_div');
		div.style.display = '';
	}
	
	function change_a_row_a(){
		condicion = "1";
	}
	
	function change_b_row_a(){
		condicion = "2";
	}
	
	function change_c_row_a(){
		condicion = "3";
	}
	
	function change_d_row_a(){
		condicion = "4";
	}
	
	function change_e_row_a(){
		condicion = "5";
	}
	
	function change_a_row_b(){
		condicion = "6";
	}
	
	function change_b_row_b(){
		condicion = "7";
	}
	
	function change_c_row_b(){
		condicion = "8";
	}
	
	function change_d_row_b(){
		condicion = "9";
	}
	
	function change_e_row_b(){
		condicion = "10";
	}
	
	function change_a_row_c(){
		condicion = "11";
	}
	
	function change_b_row_c(){
		condicion = "12";
	}
	
	function change_c_row_c(){
		condicion = "13";
	}
	
	function change_d_row_c(){
		condicion = "14";
	}
	
	function change_e_row_c(){
		condicion = "15";
	}
	
	function change_a_row_d(){
		condicion = "16";
	}
	
	function change_b_row_d(){
		condicion = "17";
	}
	
	function change_c_row_d(){
		condicion = "18";
	}
	
	function change_d_row_d(){
		condicion = "19";
	}
	
	function change_e_row_d(){
		condicion = "20";
	}
	
	function change_a_row_e(){
		condicion = "21";
	}
	
	function change_b_row_e(){
		condicion = "22";
	}
	
	function change_c_row_e(){
		condicion = "23";
	}
	
	function change_d_row_e(){
		condicion = "24";
	}
	
	function change_e_row_e(){
		condicion = "25";
	}
	
	function change_a_row_f(){
		condicion = "26";
	}
	
	function change_b_row_f(){
		condicion = "27";
	}
	
	function change_c_row_f(){
		condicion = "28";
	}
	
	function change_d_row_f(){
		condicion = "29";
	}
	
	function change_e_row_f(){
		condicion = "30";
	}

	function cerrar(){
		div = document.getElementById('form_div');
		div.style.display = 'none';
	}
	
	function cambiar(){
		if(condicion == "1"){
			$("#lbl_a_row_a").text($("#txtSubject").val());
		}
		if(condicion == "2"){
			$("#lbl_b_row_a").text($("#txtSubject").val());
		}
		if(condicion == "3"){
			$("#lbl_c_row_a").text($("#txtSubject").val());
		}
		if(condicion == "4"){
			$("#lbl_d_row_a").text($("#txtSubject").val());
		}
		if(condicion == "5"){
			$("#lbl_e_row_a").text($("#txtSubject").val());
		}
		if(condicion == "6"){
			$("#lbl_a_row_b").text($("#txtSubject").val());
		}
		if(condicion == "7"){
			$("#lbl_b_row_b").text($("#txtSubject").val());
		}
		if(condicion == "8"){
			$("#lbl_c_row_b").text($("#txtSubject").val());
		}
		if(condicion == "9"){
			$("#lbl_d_row_b").text($("#txtSubject").val());
		}
		if(condicion == "10"){
			$("#lbl_e_row_b").text($("#txtSubject").val());
		}
		if(condicion == "11"){
			$("#lbl_a_row_c").text($("#txtSubject").val());
		}
		if(condicion == "12"){
			$("#lbl_b_row_c").text($("#txtSubject").val());
		}
		if(condicion == "13"){
			$("#lbl_c_row_c").text($("#txtSubject").val());
		}
		if(condicion == "14"){
			$("#lbl_d_row_c").text($("#txtSubject").val());
		}
		if(condicion == "15"){
			$("#lbl_e_row_c").text($("#txtSubject").val());
		}
		if(condicion == "16"){
			$("#lbl_a_row_d").text($("#txtSubject").val());
		}
		if(condicion == "17"){
			$("#lbl_b_row_d").text($("#txtSubject").val());
		}
		if(condicion == "18"){
			$("#lbl_c_row_d").text($("#txtSubject").val());
		}
		if(condicion == "19"){
			$("#lbl_d_row_d").text($("#txtSubject").val());
		}
		if(condicion == "20"){
			$("#lbl_e_row_d").text($("#txtSubject").val());
		}
		if(condicion == "21"){
			$("#lbl_a_row_e").text($("#txtSubject").val());
		}
		if(condicion == "22"){
			$("#lbl_b_row_e").text($("#txtSubject").val());
		}
		if(condicion == "23"){
			$("#lbl_c_row_e").text($("#txtSubject").val());
		}
		if(condicion == "24"){
			$("#lbl_d_row_e").text($("#txtSubject").val());
		}
		if(condicion == "25"){
			$("#lbl_e_row_e").text($("#txtSubject").val());
		}
		if(condicion == "26"){
			$("#lbl_a_row_f").text($("#txtSubject").val());
		}
		if(condicion == "27"){
			$("#lbl_b_row_f").text($("#txtSubject").val());
		}
		if(condicion == "28"){
			$("#lbl_c_row_f").text($("#txtSubject").val());
		}
		if(condicion == "29"){
			$("#lbl_d_row_f").text($("#txtSubject").val());
		}
		if(condicion == "30"){
			$("#lbl_e_row_f").text($("#txtSubject").val());
		}
	}
</script>

<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<table border="2px">
	<tr>
		<th>Horario</th>
		<th>Lunes</th>
		<th>Martes</th>
		<th>Miercoles</th>
		<th>Jueves</th>
		<th>Viernes</th>
	</tr>
	<tr>
		<td>09:00 a 10:30</td>
		<td>
			<label id="lbl_a_row_a">Hello</label>
			<input type="button" id="btn_a_row_a" value="+"  onclick="javascript:mostrar(); change_a_row_a();"/>
		</td>
		<td>
			<label id="lbl_b_row_a">Hello</label>
			<input type="button" id="btn_b_row_a" value="+"  onclick="javascript:mostrar(); change_b_row_a();"/>
		</td>
		<td>
			<label id="lbl_c_row_a">Hello</label>
			<input type="button" id="btn_c_row_a" value="+"  onclick="javascript:mostrar(); change_c_row_a();"/>
		</td>
		<td>
			<label id="lbl_d_row_a">Hello</label>
			<input type="button" id="btn_d_row_a" value="+"  onclick="javascript:mostrar(); change_d_row_a();"/>
		</td>
		<td>
			<label id="lbl_e_row_a">Hello</label>
			<input type="button" id="btn_e_row_a" value="+"  onclick="javascript:mostrar(); change_e_row_a();"/>
		</td>
	</tr>
	<tr>
		<td>10:40 12:10</td>
		<td>
			<label id="lbl_a_row_b">Hello</label>
			<input type="button" id="btn_a_row_b" value="+"  onclick="javascript:mostrar(); change_a_row_b();"/>
		</td>
		<td>
			<label id="lbl_b_row_b">Hello</label>
			<input type="button" id="btn_b_row_b" value="+"  onclick="javascript:mostrar(); change_b_row_b();"/>
		</td>
		<td>
			<label id="lbl_c_row_b">Hello</label>
			<input type="button" id="btn_c_row_b" value="+"  onclick="javascript:mostrar(); change_c_row_b();"/>
		</td>
		<td>
			<label id="lbl_d_row_b">Hello</label>
			<input type="button" id="btn_d_row_b" value="+"  onclick="javascript:mostrar(); change_d_row_b();"/>
		</td>
		<td>
			<label id="lbl_e_row_b">Hello</label>
			<input type="button" id="btn_e_row_b" value="+"  onclick="javascript:mostrar(); change_e_row_b();"/>
		</td>
		
	</tr>
	<tr>
		<td>12:20 a 13:50</td>
		<td>
			<label id="lbl_a_row_c">Hello</label>
			<input type="button" id="btn_a_row_c" value="+"  onclick="javascript:mostrar(); change_a_row_c();"/>
		</td>
		<td>
			<label id="lbl_b_row_c">Hello</label>
			<input type="button" id="btn_b_row_c" value="+"  onclick="javascript:mostrar(); change_b_row_c();"/>
		</td>
		<td>
			<label id="lbl_c_row_c">Hello</label>
			<input type="button" id="btn_c_row_c" value="+"  onclick="javascript:mostrar(); change_c_row_c();"/>
		</td>
		<td>
			<label id="lbl_d_row_c">Hello</label>
			<input type="button" id="btn_d_row_c" value="+"  onclick="javascript:mostrar(); change_d_row_c();"/>
		</td>
		<td>
			<label id="lbl_e_row_c">Hello</label>
			<input type="button" id="btn_e_row_c" value="+"  onclick="javascript:mostrar(); change_e_row_c();"/>
		</td>
	</tr>
	<tr>
		<td colspan="6">Campos 4 y 5</td>
	</tr>
	<tr>
		<td>14:00 a 15:30</td>
		<td>
			<label id="lbl_a_row_d">Hello</label>
			<input type="button" id="btn_a_row_d" value="+"  onclick="javascript:mostrar(); change_a_row_d();"/>
		</td>
		<td>
			<label id="lbl_b_row_d">Hello</label>
			<input type="button" id="btn_b_row_d" value="+"  onclick="javascript:mostrar(); change_b_row_d();"/>
		</td>
		<td>
			<label id="lbl_c_row_d">Hello</label>
			<input type="button" id="btn_c_row_d" value="+"  onclick="javascript:mostrar(); change_c_row_d();"/>
		</td>
		<td>
			<label id="lbl_d_row_d">Hello</label>
			<input type="button" id="btn_d_row_d" value="+"  onclick="javascript:mostrar(); change_d_row_d();"/>
		</td>
		<td>
			<label id="lbl_e_row_d">Hello</label>
			<input type="button" id="btn_e_row_d" value="+"  onclick="javascript:mostrar(); change_e_row_d();"/>
		</td>
	</tr>
	<tr>
		<td>15:40 a 17:10</td>
		<td>
			<label id="lbl_a_row_e">Hello</label>
			<input type="button" id="btn_a_row_e" value="+"  onclick="javascript:mostrar(); change_a_row_e();"/>
		</td>
		<td>
			<label id="lbl_b_row_e">Hello</label>
			<input type="button" id="btn_b_row_e" value="+"  onclick="javascript:mostrar(); change_b_row_e();"/>
		</td>
		<td>
			<label id="lbl_c_row_e">Hello</label>
			<input type="button" id="btn_c_row_e" value="+"  onclick="javascript:mostrar(); change_c_row_e();"/>
		</td>
		<td>
			<label id="lbl_d_row_e">Hello</label>
			<input type="button" id="btn_d_row_e" value="+"  onclick="javascript:mostrar(); change_d_row_e();"/>
		</td>
		<td>
			<label id="lbl_e_row_e">Hello</label>
			<input type="button" id="btn_e_row_e" value="+"  onclick="javascript:mostrar(); change_e_row_e();"/>
		</td>
	</tr>
	<tr>
		<td>17:20 a 18:50</td>
		<td>
			<label id="lbl_a_row_f">Hello</label>
			<input type="button" id="btn_a_row_f" value="+"  onclick="javascript:mostrar(); change_a_row_f();"/>
		</td>
		<td>
			<label id="lbl_b_row_f">Hello</label>
			<input type="button" id="btn_b_row_f" value="+"  onclick="javascript:mostrar(); change_b_row_f();"/>
		</td>
		<td>
			<label id="lbl_c_row_f">Hello</label>
			<input type="button" id="btn_c_row_f" value="+"  onclick="javascript:mostrar(); change_c_row_f();"/>
		</td>
		<td>
			<label id="lbl_d_row_f">Hello</label>
			<input type="button" id="btn_d_row_f" value="+"  onclick="javascript:mostrar(); change_d_row_f();"/>
		</td>
		<td>
			<label id="lbl_e_row_f">Hello</label>
			<input type="button" id="btn_e_row_f" value="+"  onclick="javascript:mostrar(); change_e_row_f();"/>
		</td>
	</tr>
</table>

<div id="form_div" style="display:none;">
<form id="form_asig">
	<label id="lblSubject">Asignatura: </label>
	<input type="text" name="txtSubject" id="txtSubject" class="nombre2" value="">
	<input type="button" name="btnChange" id="btnChange" onclick="javascript:cambiar(); cerrar();" value="Guardar">
</form>
</div>


