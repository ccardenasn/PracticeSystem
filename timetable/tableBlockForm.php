<div id="table_div">
	<table border="2px">
		<tr>
			<th>Bloque</th>
			<th>Hora Inicio</th>
			<th>Hora Fin</th>
		</tr>
		<tr>
			<td>Bloque 1</td>
			<td>
				<label id="lbl_bloque_a_a">09:00</label>
				<input type="button" id="btn_a_a" value="+"  onclick="javascript:showInit();closeEnd();changeInitA();"/>
			</td>
			<td>
				<label id="lbl_bloque_a_b">10:30</label>
				<input type="button" id="btn_a_b" value="+"  onclick="javascript:showEnd();closeInit();changeEndA();"/>
			</td>
		</tr>
		<tr>
			<td>Bloque 2</td>
			<td>
				<label id="lbl_bloque_b_a">10:40</label>
				<input type="button" id="btn_b_a" value="+" onclick="javascript:showInit();closeEnd();changeInitB();"/>
			</td>
			<td>
				<label id="lbl_bloque_b_b">12:10</label>
				<input type="button" id="btn_b_b" value="+" onclick="javascript:showEnd();closeInit();changeEndB();"/>
			</td>
		</tr>
		<tr>
			<td>Bloque 3</td>
			<td>
				<label id="lbl_bloque_c_a">12:20</label>
				<input type="button" id="btn_c_a" value="+" onclick="javascript:showInit();closeEnd();changeInitC();"/>
			</td>
			<td>
				<label id="lbl_bloque_c_b">13:50</label>
				<input type="button" id="btn_c_b" value="+" onclick="javascript:showEnd();closeInit();changeEndC();"/>
			</td>
		</tr>
		<tr>
			<td colspan="3">Tarde</td>
		</tr>
		<tr>
			<td>Bloque 4</td>
			<td>
				<label id="lbl_bloque_d_a">14:00</label>
				<input type="button" id="btn_d_a" value="+" onclick="javascript:showInit();closeEnd();changeInitD();"/>
			</td>
			<td>
				<label id="lbl_bloque_d_b">15:30</label>
				<input type="button" id="btn_d_b" value="+" onclick="javascript:showEnd();closeInit();changeEndD();"/>
			</td>
		</tr>
		<tr>
			<td>Bloque 5</td>
			<td>
				<label id="lbl_bloque_e_a">15:40</label>
				<input type="button" id="btn_e_a" value="+" onclick="javascript:showInit();closeEnd();changeInitE();"/>
			</td>
			<td>
				<label id="lbl_bloque_e_b">17:10</label>
				<input type="button" id="btn_e_b" value="+" onclick="javascript:showEnd();closeInit();changeEndE();"/>
			</td>
		</tr>
		<tr>
			<td>Bloque 6</td>
			<td>
				<label id="lbl_bloque_f_a">17:20</label>
				<input type="button" id="btn_f_a" value="+"  onclick="javascript:showInit();closeEnd();changeInitF();"/>
			</td>
			<td>
				<label id="lbl_bloque_f_b">18:50</label>
				<input type="button" id="btn_f_b" value="+"  onclick="javascript:showEnd();closeInit();changeEndF();"/>
			</td>
		</tr>
	</table>
</div>


