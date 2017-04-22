<?php

$con = mysql_connect("localhost", "root", "") or die("ERROR EN LA CONEXION");
$db = mysql_select_db("practicemanagementdatabase", $con) or die("ERROR AL CONECTAR A LA BD");

mysql_set_charset("UTF8",$con); 

?>