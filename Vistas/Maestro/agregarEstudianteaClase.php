<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
$id = $_GET['id'];

$query = "SELECT nombre,id FROM estudiante WHERE estudiante.id NOT IN (SELECT estudianteid FROM unionClaseEstudiante WHERE unionClaseEstudiante.claseid=$id)";

$response = mysqli_query($con, $query);

echo "<form method='post'>";
echo "<select id='estudiante' name='estudiante'>";
while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
	$nombre= $row['nombre'];
	$idEstudiante= $row['id'];
echo "<option value='$idEstudiante'>$nombre</option>";
}
echo "<input type='text' name='calificacion' placeholder='Calificacion' required />";
echo "<input type='submit' class='button'  name='AgregarEstudiante' value='Agregar'/>";
echo "</form>";

if(isset($_POST['AgregarEstudiante'])) {
$estudiante = $_POST['estudiante'];
$calificacion = $_POST['calificacion'];

$query2 = "INSERT INTO unionClaseEstudiante(claseid,estudianteid,calificacion) VALUES ($id, $estudiante, $calificacion)";

if(mysqli_query($con,$query2)){
echo("Estudiante registrado");
}
else{
echo("Mission failed we'll get'em next time");
}

}

echo "<a href='../Vistas/VerEstudiantes.php?id=$id'>Regresar</a>";




?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Agregar estudiante</title>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Agregar estudiante</h3>
        </div>
    </center>
</body>
</html>