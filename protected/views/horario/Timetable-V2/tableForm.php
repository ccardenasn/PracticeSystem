<?php
include('findBlocks.php');
$hour = hourColumns();
?>

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
		<td> <?php echo $hour[0][0].' a '.$hour[0][1]?> </td>
		<td>
			<label id="lbl_a_row_a">Asignar</label>
			<input type="button" id="btn_a_row_a" value="+"  onclick="javascript:mostrar(); change_a_row_a();"/>
			<input type="button" id="btn_xa_row_a" value="x"  onclick="javascript:del_a_row_a();"/>
		</td>
		<td>
			<label id="lbl_b_row_a">Asignar</label>
			<input type="button" id="btn_b_row_a" value="+"  onclick="javascript:mostrar(); change_b_row_a();"/>
			<input type="button" id="btn_xb_row_a" value="x"  onclick="javascript:del_b_row_a();"/>
		</td>
		<td>
			<label id="lbl_c_row_a">Asignar</label>
			<input type="button" id="btn_c_row_a" value="+"  onclick="javascript:mostrar(); change_c_row_a();"/>
			<input type="button" id="btn_xc_row_a" value="x"  onclick="javascript:del_c_row_a();"/>
		</td>
		<td>
			<label id="lbl_d_row_a">Asignar</label>
			<input type="button" id="btn_d_row_a" value="+"  onclick="javascript:mostrar(); change_d_row_a();"/>
			<input type="button" id="btn_xd_row_a" value="x"  onclick="javascript:del_d_row_a();"/>
		</td>
		<td>
			<label id="lbl_e_row_a">Asignar</label>
			<input type="button" id="btn_e_row_a" value="+"  onclick="javascript:mostrar(); change_e_row_a();"/>
			<input type="button" id="btn_xe_row_a" value="x"  onclick="javascript:del_e_row_a();"/>
		</td>
	</tr>
	<tr>
		<td><?php echo $hour[1][0].' a '.$hour[1][1]?></td>
		<td>
			<label id="lbl_a_row_b">Asignar</label>
			<input type="button" id="btn_a_row_b" value="+"  onclick="javascript:mostrar(); change_a_row_b();"/>
			<input type="button" id="btn_xa_row_b" value="x"  onclick="javascript:del_a_row_b();"/>
		</td>
		<td>
			<label id="lbl_b_row_b">Asignar</label>
			<input type="button" id="btn_b_row_b" value="+"  onclick="javascript:mostrar(); change_b_row_b();"/>
			<input type="button" id="btn_xb_row_b" value="x"  onclick="javascript:del_b_row_b();"/>
		</td>
		<td>
			<label id="lbl_c_row_b">Asignar</label>
			<input type="button" id="btn_c_row_b" value="+"  onclick="javascript:mostrar(); change_c_row_b();"/>
			<input type="button" id="btn_xc_row_b" value="x"  onclick="javascript:del_c_row_b();"/>
		</td>
		<td>
			<label id="lbl_d_row_b">Asignar</label>
			<input type="button" id="btn_d_row_b" value="+"  onclick="javascript:mostrar(); change_d_row_b();"/>
			<input type="button" id="btn_xd_row_b" value="x"  onclick="javascript:del_d_row_b();"/>
		</td>
		<td>
			<label id="lbl_e_row_b">Asignar</label>
			<input type="button" id="btn_e_row_b" value="+"  onclick="javascript:mostrar(); change_e_row_b();"/>
			<input type="button" id="btn_xa_row_b" value="x"  onclick="javascript:del_a_row_b();"/>
		</td>
		
	</tr>
	<tr>
		<td><?php echo $hour[2][0].' a '.$hour[2][1]?></td>
		<td>
			<label id="lbl_a_row_c">Asignar</label>
			<input type="button" id="btn_a_row_c" value="+"  onclick="javascript:mostrar(); change_a_row_c();"/>
			<input type="button" id="btn_xa_row_c" value="x"  onclick="javascript:del_a_row_c();"/>
		</td>
		<td>
			<label id="lbl_b_row_c">Asignar</label>
			<input type="button" id="btn_b_row_c" value="+"  onclick="javascript:mostrar(); change_b_row_c();"/>
			<input type="button" id="btn_xb_row_c" value="x"  onclick="javascript:del_b_row_c();"/>
		</td>
		<td>
			<label id="lbl_c_row_c">Asignar</label>
			<input type="button" id="btn_c_row_c" value="+"  onclick="javascript:mostrar(); change_c_row_c();"/>
			<input type="button" id="btn_xc_row_c" value="x"  onclick="javascript:del_c_row_c();"/>
		</td>
		<td>
			<label id="lbl_d_row_c">Asignar</label>
			<input type="button" id="btn_d_row_c" value="+"  onclick="javascript:mostrar(); change_d_row_c();"/>
			<input type="button" id="btn_xd_row_c" value="x"  onclick="javascript:del_d_row_c();"/>
		</td>
		<td>
			<label id="lbl_e_row_c">Asignar</label>
			<input type="button" id="btn_e_row_c" value="+"  onclick="javascript:mostrar(); change_e_row_c();"/>
			<input type="button" id="btn_xe_row_c" value="x"  onclick="javascript:del_e_row_c();"/>
		</td>
	</tr>
	<tr>
		<td colspan="6">Tarde</td>
	</tr>
	<tr>
		<td><?php echo $hour[3][0].' a '.$hour[3][1]?></td>
		<td>
			<label id="lbl_a_row_d">Asignar</label>
			<input type="button" id="btn_a_row_d" value="+"  onclick="javascript:mostrar(); change_a_row_d();"/>
			<input type="button" id="btn_xa_row_d" value="x"  onclick="javascript:del_a_row_d();"/>
		</td>
		<td>
			<label id="lbl_b_row_d">Asignar</label>
			<input type="button" id="btn_b_row_d" value="+"  onclick="javascript:mostrar(); change_b_row_d();"/>
			<input type="button" id="btn_xb_row_d" value="x"  onclick="javascript:del_b_row_d();"/>
		</td>
		<td>
			<label id="lbl_c_row_d">Asignar</label>
			<input type="button" id="btn_c_row_d" value="+"  onclick="javascript:mostrar(); change_c_row_d();"/>
			<input type="button" id="btn_xc_row_d" value="x"  onclick="javascript:del_c_row_d();"/>
		</td>
		<td>
			<label id="lbl_d_row_d">Asignar</label>
			<input type="button" id="btn_d_row_d" value="+"  onclick="javascript:mostrar(); change_d_row_d();"/>
			<input type="button" id="btn_xd_row_d" value="x"  onclick="javascript:del_d_row_d();"/>
		</td>
		<td>
			<label id="lbl_e_row_d">Asignar</label>
			<input type="button" id="btn_e_row_d" value="+"  onclick="javascript:mostrar(); change_e_row_d();"/>
			<input type="button" id="btn_xe_row_d" value="x"  onclick="javascript:del_e_row_d();"/>
		</td>
	</tr>
	<tr>
		<td><?php echo $hour[4][0].' a '.$hour[4][1]?></td>
		<td>
			<label id="lbl_a_row_e">Asignar</label>
			<input type="button" id="btn_a_row_e" value="+"  onclick="javascript:mostrar(); change_a_row_e();"/>
			<input type="button" id="btn_xa_row_e" value="x"  onclick="javascript:del_a_row_e();"/>
		</td>
		<td>
			<label id="lbl_b_row_e">Asignar</label>
			<input type="button" id="btn_b_row_e" value="+"  onclick="javascript:mostrar(); change_b_row_e();"/>
			<input type="button" id="btn_xb_row_e" value="x"  onclick="javascript:del_b_row_e();"/>
		</td>
		<td>
			<label id="lbl_c_row_e">Asignar</label>
			<input type="button" id="btn_c_row_e" value="+"  onclick="javascript:mostrar(); change_c_row_e();"/>
			<input type="button" id="btn_xc_row_e" value="x"  onclick="javascript:del_c_row_e();"/>
		</td>
		<td>
			<label id="lbl_d_row_e">Asignar</label>
			<input type="button" id="btn_d_row_e" value="+"  onclick="javascript:mostrar(); change_d_row_e();"/>
			<input type="button" id="btn_xd_row_e" value="x"  onclick="javascript:del_d_row_e();"/>
		</td>
		<td>
			<label id="lbl_e_row_e">Asignar</label>
			<input type="button" id="btn_e_row_e" value="+"  onclick="javascript:mostrar(); change_e_row_e();"/>
			<input type="button" id="btn_xe_row_e" value="x"  onclick="javascript:del_e_row_e();"/>
		</td>
	</tr>
	<tr>
		<td><?php echo $hour[5][0].' a '.$hour[5][1]?></td>
		<td>
			<label id="lbl_a_row_f">Asignar</label>
			<input type="button" id="btn_a_row_f" value="+"  onclick="javascript:mostrar(); change_a_row_f();"/>
			<input type="button" id="btn_xa_row_f" value="x"  onclick="javascript:del_a_row_f();"/>
		</td>
		<td>
			<label id="lbl_b_row_f">Asignar</label>
			<input type="button" id="btn_b_row_f" value="+"  onclick="javascript:mostrar(); change_b_row_f();"/>
			<input type="button" id="btn_xb_row_f" value="x"  onclick="javascript:del_b_row_f();"/>
		</td>
		<td>
			<label id="lbl_c_row_f">Asignar</label>
			<input type="button" id="btn_c_row_f" value="+"  onclick="javascript:mostrar(); change_c_row_f();"/>
			<input type="button" id="btn_xc_row_f" value="x"  onclick="javascript:del_c_row_f();"/>
		</td>
		<td>
			<label id="lbl_d_row_f">Asignar</label>
			<input type="button" id="btn_d_row_f" value="+"  onclick="javascript:mostrar(); change_d_row_f();"/>
			<input type="button" id="btn_xd_row_f" value="x"  onclick="javascript:del_d_row_f();"/>
		</td>
		<td>
			<label id="lbl_e_row_f">Asignar</label>
			<input type="button" id="btn_e_row_f" value="+"  onclick="javascript:mostrar(); change_e_row_f();"/>
			<input type="button" id="btn_xe_row_f" value="x"  onclick="javascript:del_e_row_f();"/>
		</td>
	</tr>
</table>