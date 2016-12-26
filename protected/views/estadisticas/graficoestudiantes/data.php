<?php
include('graficoestudiantes/cargar.php');
//connect to database
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
//select database
mysql_select_db("practicemanagementdatabase", $con);
 
loadgraph();

$id = $_GET['id'];
 //para graficar el tamaño de los int en la base de datos debe ser 10
//define array
//we need two arrays - "male" and "female" so $arr and $arr1 respectively!

$arr 	= array();
$result = array();

//get the result from the table "highcharts_data"
$sql = "select * from graph_data where idcentro = $id";
$q	 = mysql_query($sql);
$j = 0;
while($row = mysql_fetch_assoc($q)){
 
//highcharts needs name, but only once, so give a IF condition
	//if($j == 0){
	//$arr['name'] = 'Numero';
	//$arr1['name'] = 'Female';
	//	$j++;
	//}
	//and the data for male and female is here
	//$arr['name'][] = $row['nombrepractica'];
	$arr['data'][] = array($row['nombrepractica'],$row['numeroalumnos']);
	//$arr1['data'][] = $row['female'];
}

//after get the data for male and female, push both of them to an another array called result
array_push($result,$arr);
//array_push($result,$arr1);
 
//now create the json result using "json_encode"
print json_encode($result, JSON_NUMERIC_CHECK);
 
mysql_close($con);
?>