<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$query = "SELECT reporte.id as id, descripcion, maestro.nombre AS maestro, estudiante.nombre AS estudiante FROM reporte JOIN maestro ON reporte.maestroid = maestro.id JOIN estudiante ON reporte.estudianteid = estudiante.id";
$response = mysqli_query($con, $query);


echo "<table>";
echo "<tr>
    <th>Descripcion</th>
    <th>Maestro</th>
    <th>Estudiante</th> 
  </tr>";


while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
$send = urlencode($row['id']);
echo "<tr><td>" . $row['descripcion'] . "</td><td>" . 
$row['maestro'] . "</td><td>" . 
$row['estudiante'] ."</td><td>" . 
"<a href='../Vistas/modificarReporte.php?id=$send'>Modificar</a>" ."</td><td>" . 
"<a href='../dataAccess/borrarreporte.php?id=$send'>Borrar</a>" ."</td><td>" . 
"</td></tr>";
}
echo "</table>";

?>




<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index</title>
        
    </head>
    <body>

<a href="../Vistas/agregarreporte.php">Agregar Reporte</a><br>
<a href="../Vistas/VistaPrincipalMaestro.html">Regresar</a>

</body>