<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$query = "SELECT * FROM clase";
$response = mysqli_query($con, $query);

// if(isset($_GET['modify'])) {
//   $_GET['modify'];
//   header("Location: modificarClase.php");
// }

echo "<table>";
echo "<tr>
    <th>Clase</th>
    <th>Horario</th> 
    <th>Salon</th> 
    <th>Maestro</th>
  </tr>";


while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
$send = urlencode($row['id']);
echo "<tr>

<td name='nombre'>" .
 $row['nombre'] . 
 "</td><td name='horario'>" . $row['horario'] . 
 "</td><td ='salon'>" . $row['salon'] .
 "</td><td>" . $row['maestroid'] . 
 "</td><td>" . "
  <a href='../Vistas/modificarClase.php?id=$send'>Modificar</a>
".
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



<a href="../Vistas/agregarclase.php">Agregar Clase</a><br>
<a href="../Vistas/VistaPrincipalMaestro.html">Regresar</a>

</body>