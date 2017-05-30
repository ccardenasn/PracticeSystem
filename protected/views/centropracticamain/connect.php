<?php

$con = mysql_connect("localhost", "sigep", "s1g3p") or die("ERROR EN LA CONEXION");
$db = mysql_select_db("sigep", $con) or die("ERROR AL CONECTAR A LA base");

$sql = "select RBD,NombreCentroPractica from centropractica;";

$stmt = mysql_query($sql,$con);

?>