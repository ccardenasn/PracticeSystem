<?php
include_once('connect.php');

$data = $_POST['horario'];
$ser=serialize($data);
$query = "insert into horarios(nombre,descripcion,horario,fecha) values ('agg', 'mas agg','".$ser."','2017-01-22');";

mysql_query($query,$con);
mysql_close($con);

?>