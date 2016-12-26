<?php
require('connect.php');

$service = $_GET['id'];

$tablequery = "select * from graph_data where idcentro=$service;";
$exectable=mysql_query($tablequery,$con);

echo "<table border='1' style='position:absolute;top:40px;left:10px;'>
<tr>
<th>Numero de Alumnos</th>
<th>Nombre Practica</th>

</tr>";

while($row = mysql_fetch_array($exectable)) {

    echo "<tr>";
    echo "<td>" . $row['numeroalumnos'] . "</td>";
    echo "<td>" . $row['nombrepractica'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysql_close($con);
?>