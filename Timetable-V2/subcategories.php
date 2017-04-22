<?php
include('connect.php');
//include('ForceUTF/Encoding.php');

$id_category = $_POST['id_category'];

$query = "select * from asignatura where Semestre_CodSemestre = '".$id_category."';";

$st = mysql_query($query,$con);

$html="";

while($rows = mysql_fetch_array($st))
{
	$valueSub=$rows['NombreAsignatura'];
	//$visibleSub=Encoding::toUTF8($rows['NombreAsignatura']);
	$visibleSub=$rows['NombreAsignatura'];
	$html.='<option value="'.$valueSub.'">'.$visibleSub.'</option>';
}

echo $html;
?>