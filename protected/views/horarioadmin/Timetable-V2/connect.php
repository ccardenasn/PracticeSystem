<?php

require_once("conexion.php");

//$con = mysql_connect("localhost", "sigep", "s1g3p") or die("ERROR EN LA CONEXION");
//$db = mysql_select_db("sigep", $con) or die("ERROR AL CONECTAR A LA BD");

$con=mysql_connect($host,$user,$pw) or die("Problemas con el sevidor");
mysql_select_db($db,$con) or die("Problemas con base de datos"); 

?>