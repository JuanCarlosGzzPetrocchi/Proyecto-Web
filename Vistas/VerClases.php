<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
$masid= $_SESSION['usuarioid'];
$user = $_SESSION['usuario']; 
$query = "SELECT * FROM clase WHERE maestroid= $masid";
$response = mysqli_query($con, $query);

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
 "</td><td>" . "<a href='../Vistas/modificarClase.php?id=$send'>Modificar</a>".
 "</td><td>" . "<a href='../dataAccess/borrarclase.php?id=$send'>Borrar</a>".
"</td></tr>";
}

echo "</table>";
?>


<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ver Clases</title>
        
    </head>
    <body>



<a href="../Vistas/agregarclase.php">Agregar Clase</a><br>
<a href="../Vistas/VistaPrincipalMaestro.html">Regresar</a>
<h3>Bienvenido Professor <?php echo $user?> Id: <?php echo $masid ?></h3>

</body>