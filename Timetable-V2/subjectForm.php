<form id="form_asig">
	<h1>Asignar Asignatura</h1>
	
	<div id="divFields">
		
		<label id="lblSemester" class="tltSemester">Semestre: </label><br>
		
		<select id="txtSemester" name=txtSemester>
			<?php
			
			include('connect.php');
			include_once('ForceUTF/Encoding.php');
			
			$sql = "select * from semestre;";
			$stmt = mysql_query($sql,$con);
			
			while($rows = mysql_fetch_array($stmt))
			{
				$value=$rows['CodSemestre'];
				$visible=Encoding::toUTF8($rows['NombreSemestre']);
				echo'<option value="'.$value.'">'.$visible.'</option>';
			}
			?>
		</select><br><br>
		
		<label id="lblSubject">Asignatura: </label><br>
		<select name="txtSubject" id="txtSubject"></select><br><br>
	</div><br>
	
	<div id="divButton">
		<input type="button" name="btnChange" id="btnChange" onclick="javascript:cambiar(); cerrar();" value="Asignar">
	</div>
	
</form>