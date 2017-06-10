<?php
require_once("conexion.php");

$con=mysql_connect($host,$user,$pw) or die("Problemas con el sevidor");
mysql_select_db($db,$con) or die("Problemas con base de datos"); 
?>