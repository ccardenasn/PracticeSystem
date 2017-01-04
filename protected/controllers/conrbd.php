<?php

function containsrbd($rbd,$index)
{
	include('connect.php');
	
	$querya="select count(*) from estudiante where CentroPractica_RBD = '".$rbd[$index]['RBD']."';";
	$execa=mysql_query($querya,$con);
	$resulta=mysql_result($execa,0);
	
	return $resulta;
}