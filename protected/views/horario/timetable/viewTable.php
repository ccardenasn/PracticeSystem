<script type='text/javascript' src="jsTimetableFunctions/jquery.min.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/dependentdropdown.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/conditioncells.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/changecells.js"></script>
<script type='text/javascript' src="jsTimetableFunctions/functions.js"></script>
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleTable.css">
<link rel="stylesheet" type="text/css" href="cssTimetableStyles/styleForm.css">

<?php
include_once("connect.php");

$qr = "select tablaHorario from horario where CodHorario = '14';";

$aa =mysql_query($qr,$con);
$bb = mysql_result($aa,0);
mysql_close($con);
?>

<table id="mainTable" border="2px">
	<tr>
		<th>
			<div id="block_div">
				<?php
				include('blockTable.php');
				?>
			</div>
		</th>
		<th>
			<div id="table_div">
				<?php
				echo $bb;
				?>
			</div>
		</th>
	</tr>
</table>

<div id="form_div" style="display:none;">
	<?php
	include('subjectForm.php');
	?>
</div>

<div id=btnSave_div>
	<input type="button" name="btnSave" id="btnSave" value="Guardar" onclick="javascript:obtener();"  action="saveTable.php">
</div>