<?php
include('cargar.php');
include_once('forceutf/Encoding.php');
//connect to database
$con = mysql_connect("localhost","sigep","s1g3p");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("sigep", $con);
 
loadgraph();

$id = $_GET['id'];


//para graficar el tamaño de los int en la base de datos debe ser 10
$arr 	= array();
$result = array();

$sql = "select * from graph_data where idcentro = $id";
$q	 = mysql_query($sql);
$j = 0;

while($row = mysql_fetch_assoc($q)){
    $arr['data'][] = array(Encoding::toUTF8($row['nombrepractica']),$row['numero']);
}

array_push($result,$arr);
print json_encode($result, JSON_NUMERIC_CHECK);
 
mysql_close($con);
?>