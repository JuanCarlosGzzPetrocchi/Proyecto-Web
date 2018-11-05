<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$query = "SELECT * FROM clase";
$response = mysqli_query($con, $query);


echo "<table>";
echo "<tr>
    <th>Clase</th>
    <th>Horario</th> 
    <th>Salon</th> 
    <th>Estudiantes</th>
  </tr>";


while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
echo "<tr><th>" . $row['nombre'] . "</th><th>" . $row['horario'] . "</th><th>" . $row['salon'] ."</th><th>" . $row['maestroid'] . "</th><th>"  . "</th></tr>";
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

<a href="../Vistas/agregarclase.php">Agregar Clase</a>
<a href="../Vistas/VistaPrincipalMaestro.html">Regresar</a>

</body>