<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
if($_SESSION['usuarionombre']==''){
    header("Location: loginMaestro.php");
}

$masid= $_SESSION['usuarioid'];
$user = $_SESSION['usuario']; 
$query = "SELECT * FROM clase WHERE maestroid= $masid";
$response = mysqli_query($con, $query);

echo "<table class='table'>";
echo "<tr>
    <th>Clase</th>
    <th>Horario</th> 
    <th>Salon</th> 
    <th>Num de Estudiantes</th>
  </tr>";


while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
$send = urlencode($row['id']);
$id= $row['id'];
$query2 ="SELECT COUNT(clase.id) as count FROM clase JOIN unionClaseEstudiante ON clase.id=unionClaseEstudiante.claseid WHERE clase.id = $id";
$response2 = mysqli_query($con, $query2);
$numEstudiantes = mysqli_fetch_assoc($response2);

echo "<tr>
<td name='nombre'>" .
 $row['nombre'] . 
 "</td><td name='horario'>" . $row['horario'] . 
 "</td><td ='salon'>" . $row['salon'] .
 "</td><td>" . $numEstudiantes['count'] . 
  "</td><td>" . "<a href='../Maestro/verEstudiantes.php?id=$send' type='button' class='btn btn-primary'>Ver Estudiantes</a>".
 "</td><td>" . "<a href='../Maestro/modificarClase.php?id=$send' type='button' class='btn btn-primary'>Modificar</a>".
 "</td><td>" . "<a href='../../dataAccess/borrarclase.php?id=$send' type='button' class='btn btn-danger'>Borrar</a>".
"</td></tr>";
}

echo "</table>";
?>


<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ver Clases</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>



<a href="../Maestro/agregarclase.php" type="button" class="btn btn-success">Agregar Clase</a><br>
<a href="../Maestro/VistaPrincipalMaestro.php" type="button" class="btn btn-info">Regresar</a>

</body>