<script type='text/javascript' src="jsTimetableFunctions/jquery.min.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/dependentdropdown.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/conditioncells.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/changecells.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/functions.js"></script>
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleTable.css">
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleForm.css">

<?php
include('findBlocks.php');
include('viewTimeTableProcess.php');

$viewSubjects = orderTimeTableData();

$hour = hourColumns();
?>

<div id="table_div">
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
			<label id="lbl_a_row_a"><?php echo $viewSubjects[0]['Asignatura'] ?></label>
			<input type="button" id="btn_a_row_a" value="+"  onclick="javascript:mostrar(); change_a_row_a();"/>
		</td>
		<td>
			<label id="lbl_b_row_a"><?php echo $viewSubjects[1]['Asignatura'] ?></label>
			<input type="button" id="btn_b_row_a" value="+"  onclick="javascript:mostrar(); change_b_row_a();"/>
		</td>
		<td>
			<label id="lbl_c_row_a"><?php echo $viewSubjects[2]['Asignatura'] ?></label>
			<input type="button" id="btn_c_row_a" value="+"  onclick="javascript:mostrar(); change_c_row_a();"/>
		</td>
		<td>
			<label id="lbl_d_row_a"><?php echo $viewSubjects[3]['Asignatura'] ?></label>
			<input type="button" id="btn_d_row_a" value="+"  onclick="javascript:mostrar(); change_d_row_a();"/>
		</td>
		<td>
			<label id="lbl_e_row_a"><?php echo $viewSubjects[4]['Asignatura'] ?></label>
			<input type="button" id="btn_e_row_a" value="+"  onclick="javascript:mostrar(); change_e_row_a();"/>
		</td>
	</tr>
	<tr>
		<td><?php echo $hour[1][0].' a '.$hour[1][1]?></td>
		<td>
			<label id="lbl_a_row_b"><?php echo $viewSubjects[5]['Asignatura'] ?></label>
			<input type="button" id="btn_a_row_b" value="+"  onclick="javascript:mostrar(); change_a_row_b();"/>
		</td>
		<td>
			<label id="lbl_b_row_b"><?php echo $viewSubjects[6]['Asignatura'] ?></label>
			<input type="button" id="btn_b_row_b" value="+"  onclick="javascript:mostrar(); change_b_row_b();"/>
		</td>
		<td>
			<label id="lbl_c_row_b"><?php echo $viewSubjects[7]['Asignatura'] ?></label>
			<input type="button" id="btn_c_row_b" value="+"  onclick="javascript:mostrar(); change_c_row_b();"/>
		</td>
		<td>
			<label id="lbl_d_row_b"><?php echo $viewSubjects[8]['Asignatura'] ?></label>
			<input type="button" id="btn_d_row_b" value="+"  onclick="javascript:mostrar(); change_d_row_b();"/>
		</td>
		<td>
			<label id="lbl_e_row_b"><?php echo $viewSubjects[9]['Asignatura'] ?></label>
			<input type="button" id="btn_e_row_b" value="+"  onclick="javascript:mostrar(); change_e_row_b();"/>
		</td>
		
	</tr>
	<tr>
		<td><?php echo $hour[2][0].' a '.$hour[2][1]?></td>
		<td>
			<label id="lbl_a_row_c"><?php echo $viewSubjects[10]['Asignatura'] ?></label>
			<input type="button" id="btn_a_row_c" value="+"  onclick="javascript:mostrar(); change_a_row_c();"/>
		</td>
		<td>
			<label id="lbl_b_row_c"><?php echo $viewSubjects[11]['Asignatura'] ?></label>
			<input type="button" id="btn_b_row_c" value="+"  onclick="javascript:mostrar(); change_b_row_c();"/>
		</td>
		<td>
			<label id="lbl_c_row_c"><?php echo $viewSubjects[12]['Asignatura'] ?></label>
			<input type="button" id="btn_c_row_c" value="+"  onclick="javascript:mostrar(); change_c_row_c();"/>
		</td>
		<td>
			<label id="lbl_d_row_c"><?php echo $viewSubjects[13]['Asignatura'] ?></label>
			<input type="button" id="btn_d_row_c" value="+"  onclick="javascript:mostrar(); change_d_row_c();"/>
		</td>
		<td>
			<label id="lbl_e_row_c"><?php echo $viewSubjects[14]['Asignatura'] ?>r</label>
			<input type="button" id="btn_e_row_c" value="+"  onclick="javascript:mostrar(); change_e_row_c();"/>
		</td>
	</tr>
	<tr>
		<td colspan="6">Tarde</td>
	</tr>
	<tr>
		<td><?php echo $hour[3][0].' a '.$hour[3][1]?></td>
		<td>
			<label id="lbl_a_row_d"><?php echo $viewSubjects[15]['Asignatura'] ?></label>
			<input type="button" id="btn_a_row_d" value="+"  onclick="javascript:mostrar(); change_a_row_d();"/>
		</td>
		<td>
			<label id="lbl_b_row_d"><?php echo $viewSubjects[16]['Asignatura'] ?></label>
			<input type="button" id="btn_b_row_d" value="+"  onclick="javascript:mostrar(); change_b_row_d();"/>
		</td>
		<td>
			<label id="lbl_c_row_d"><?php echo $viewSubjects[17]['Asignatura'] ?></label>
			<input type="button" id="btn_c_row_d" value="+"  onclick="javascript:mostrar(); change_c_row_d();"/>
		</td>
		<td>
			<label id="lbl_d_row_d"><?php echo $viewSubjects[18]['Asignatura'] ?></label>
			<input type="button" id="btn_d_row_d" value="+"  onclick="javascript:mostrar(); change_d_row_d();"/>
		</td>
		<td>
			<label id="lbl_e_row_d"><?php echo $viewSubjects[19]['Asignatura'] ?></label>
			<input type="button" id="btn_e_row_d" value="+"  onclick="javascript:mostrar(); change_e_row_d();"/>
		</td>
	</tr>
	<tr>
		<td><?php echo $hour[4][0].' a '.$hour[4][1]?></td>
		<td>
			<label id="lbl_a_row_e"><?php echo $viewSubjects[20]['Asignatura'] ?></label>
			<input type="button" id="btn_a_row_e" value="+"  onclick="javascript:mostrar(); change_a_row_e();"/>
		</td>
		<td>
			<label id="lbl_b_row_e"><?php echo $viewSubjects[21]['Asignatura'] ?></label>
			<input type="button" id="btn_b_row_e" value="+"  onclick="javascript:mostrar(); change_b_row_e();"/>
		</td>
		<td>
			<label id="lbl_c_row_e"><?php echo $viewSubjects[22]['Asignatura'] ?></label>
			<input type="button" id="btn_c_row_e" value="+"  onclick="javascript:mostrar(); change_c_row_e();"/>
		</td>
		<td>
			<label id="lbl_d_row_e"><?php echo $viewSubjects[23]['Asignatura'] ?></label>
			<input type="button" id="btn_d_row_e" value="+"  onclick="javascript:mostrar(); change_d_row_e();"/>
		</td>
		<td>
			<label id="lbl_e_row_e"><?php echo $viewSubjects[24]['Asignatura'] ?></label>
			<input type="button" id="btn_e_row_e" value="+"  onclick="javascript:mostrar(); change_e_row_e();"/>
		</td>
	</tr>
	<tr>
		<td><?php echo $hour[5][0].' a '.$hour[5][1]?></td>
		<td>
			<label id="lbl_a_row_f"><?php echo $viewSubjects[25]['Asignatura'] ?></label>
			<input type="button" id="btn_a_row_f" value="+"  onclick="javascript:mostrar(); change_a_row_f();"/>
		</td>
		<td>
			<label id="lbl_b_row_f"><?php echo $viewSubjects[26]['Asignatura'] ?></label>
			<input type="button" id="btn_b_row_f" value="+"  onclick="javascript:mostrar(); change_b_row_f();"/>
		</td>
		<td>
			<label id="lbl_c_row_f"><?php echo $viewSubjects[27]['Asignatura'] ?></label>
			<input type="button" id="btn_c_row_f" value="+"  onclick="javascript:mostrar(); change_c_row_f();"/>
		</td>
		<td>
			<label id="lbl_d_row_f"><?php echo $viewSubjects[28]['Asignatura'] ?></label>
			<input type="button" id="btn_d_row_f" value="+"  onclick="javascript:mostrar(); change_d_row_f();"/>
		</td>
		<td>
			<label id="lbl_e_row_f"><?php echo $viewSubjects[29]['Asignatura'] ?></label>
			<input type="button" id="btn_e_row_f" value="+"  onclick="javascript:mostrar(); change_e_row_f();"/>
		</td>
	</tr>
</table>
</div>

<div id="form_div" style="display:none;">
	<?php
	include('subjectForm.php');
	?>
</div>

<div id=btnSave_div>
	<input type="button" name="btnSave" id="btnSave" value="Guardar" onclick="javascript:obtener();"  action="saveTable.php">
</div>