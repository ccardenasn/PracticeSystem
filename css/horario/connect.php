<?php

$con = mysql_connect("localhost", "root", "") or die("ERROR EN LA CONEXION");
$db = mysql_select_db("practicemanagementdatabase", $con) or die("ERROR AL CONECTAR A LA BD");

$sql = "select * from asignatura;";

$stmt = mysql_query($sql,$con);

?>