<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
if($_SESSION['usuarionombre']==''){
    header("Location: loginMaestro.php");
}
$masid= $_SESSION['usuarioid'];
$user = $_SESSION['usuario']; 
$query = "SELECT reporte.id as id, descripcion, maestro.nombre AS maestro, estudiante.nombre AS estudiante FROM reporte JOIN maestro ON reporte.maestroid = maestro.id JOIN estudiante ON reporte.estudianteid = estudiante.id where maestro.id=$masid";
$response = mysqli_query($con, $query);


echo "<table class='table'>";
echo "<tr>
    <th>Descripcion</th>
    <th>Estudiante</th> 
  </tr>";


while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
$send = urlencode($row['id']);
echo "<tr><td>" . $row['descripcion'] . "</td><td>" . 
$row['estudiante'] ."</td><td>" . 
"<a href='../Maestro/modificarReporte.php?id=$send' type='button' class='btn btn-primary'>Modificar</a>" ."</td><td>" . 
"<a href='../../dataAccess/borrarreporte.php?id=$send' type='button' class='btn btn-danger'>Borrar</a>" ."</td><td>" . 
"</td></tr>";
}
echo "</table>";

?>




<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>

<a href="../Maestro/agregarreporte.php" type="button" class="btn btn-success">Agregar Reporte</a><br>
<a href="../Maestro/VistaPrincipalMaestro.php" type="button" class="btn btn-info">Regresar</a>

</body>