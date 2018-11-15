<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
if($_SESSION['usuarionombre']==''){
    header("Location: loginMaestro.php");
}

$esid= $_SESSION['usuarioid'];
$user = $_SESSION['usuario']; 
$query = "SELECT clase.nombre AS clase, maestro.nombre AS maestro, clase.salon, clase.horario, unionClaseEstudiante.calificacion FROM unionClaseEstudiante JOIN estudiante ON estudiante.id=unionClaseEstudiante.estudianteid JOIN clase ON clase.id = unionClaseEstudiante.claseid JOIN maestro ON maestro.id=clase.maestroid WHERE estudiante.id=$esid";

$response = mysqli_query($con, $query);

echo "<table class='table'>";
echo "<tr>
    <th>Clase</th>
    <th>Horario</th> 
    <th>Salon</th> 
    <th>Maestro</th>
    <th>Calificacion</th>
  </tr>";


while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
$query2= 
$send = urlencode($row['id']);
echo "<tr>

<td>" .
 $row['clase'] . 
 "</td><td>" . $row['horario'] . 
 "</td><td ='salon'>" . $row['salon'] .
 "</td><td>" . $row['maestro'] . 
  "</td><td>" . $row['calificacion'] . 
"</td></tr>";
}

echo "</table>";
?>