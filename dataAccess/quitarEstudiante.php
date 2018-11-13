<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$id = $_GET['id'];

$query2 = "SELECT * FROM unionClaseEstudiante WHERE id = $id";
$response = mysqli_query($con, $query2);
$borrar = mysqli_fetch_assoc($response);
$claseid= $borrar['claseid'];
echo $claseid;
$clase = urlencode($claseid);

$query = "DELETE FROM unionClaseEstudiante WHERE id = $id";

if(mysqli_query($con,$query)){
echo("Estudiante borrado");
header("Location: ../Vistas/Maestro/VerEstudiantes.php?id=$claseid");

}
else{
echo("Mission failed we'll get'em next time");
}
?>