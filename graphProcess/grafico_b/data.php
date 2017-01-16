<?php
include('cargar.php');
include_once('forceutf/Encoding.php');

$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
//select database
mysql_select_db("practicemanagementdatabase", $con);
 
loadgraph();

$id = $_GET['id'];

$arr 	= array();
$result = array();

$sql = "select * from graph_data where idcentro = $id";
$q	 = mysql_query($sql);
$j = 0;

while($row = mysql_fetch_assoc($q)){
	
	$arr['data'][] = array(Encoding::toUTF8($row['nombrepractica']),$row['numero']);
	//$arr1['data'][] = $row['female'];
}

array_push($result,$arr);

print json_encode($result, JSON_NUMERIC_CHECK);
 
mysql_close($con);
?>