<?php

$con = mysql_connect("localhost", "sigep", "s1g3p") or die("ERROR EN LA CONEXION");
$db = mysql_select_db("sigep", $con) or die("ERROR AL CONECTAR A LA BD");

mysql_set_charset("UTF8",$con); 

?>