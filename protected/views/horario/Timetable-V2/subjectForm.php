<form id="form_asig">
	<h1>Asignar Asignatura</h1>
	
	<div id="divFields">
		
		<label id="lblSemester" class="tltSemester">Semestre: </label><br>
		
		<select id="txtSemester" name="txtSemester" onchange="showControl('txtSubject');showControl('lblSubject');showControl('btnChange')">
			<option value="0">Seleccione</option>;

			<?php
			
			include('connect.php');
			include_once('ForceUTF/Encoding.php');
			
			$sql = "select CodSemestre,NombreSemestre from semestre inner join asignatura on semestre.CodSemestre = asignatura.Semestre_CodSemestre group by NombreSemestre;";
			$stmt = mysql_query($sql,$con);
			
			while($rows = mysql_fetch_array($stmt))
			{
				$value=$rows['CodSemestre'];
				$visible=Encoding::toUTF8($rows['NombreSemestre']);
				echo'<option value="'.$value.'">'.$visible.'</option>';
			}
			?>
		</select><br><br>
		
		<label id="lblSubject" style="display:none">Asignatura: </label><br>
		<select name="txtSubject" id="txtSubject" style="display:none"></select><br><br>
	</div><br>
	
	<div id="divButton">
		<input type="button" name="btnChange" id="btnChange" onclick="javascript:cambiar(); cerrar();" value="Asignar" style="display:none">
	</div>
	
</form>