<?php
$con=mysqli_connect("localhost","root","root","escuela");

include_once 'dbConnect.php';
$id = $_GET['id'];
$id2 = urlencode($id);
$query = "SELECT unionClaseEstudiante.id as id,clase.nombre AS clase, estudiante.nombre AS estudiante, unionClaseEstudiante.calificacion AS calificacion FROM clase JOIN unionClaseEstudiante ON clase.id = unionClaseEstudiante.claseid JOIN estudiante ON estudiante.id = unionClaseEstudiante.estudianteid WHERE clase.id= $id";

$response = mysqli_query($con, $query);

echo "<table>";
echo "<tr>
    <th>Estudiante</th> 
    <th>Promedio</th> 
  </tr>";
while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
$clasenombre= $row['clase'];
$send = urlencode($row['id']);
echo "
<tr><td>" . $row['estudiante'] . 
 "</td><td>" . $row['calificacion'] . 
 "</td><td>" . "<a href='../Vistas/cambiarCalificacion.php?id=$send'>Cambiar calificacion</a>".
 "</td><td>" . "<a href='../dataAccess/borrarclase.php?id=$send'>Eliminar estudiante</a>".
"</td></tr>";
}

echo "</table>";

echo "<a href='../Vistas/agregarEstudianteaClase.php?id=$id2'>Agregar estudiante a esta clase</a>";
echo "<a href='../Vistas/VerClases.php?id=$id'>Regresar</a>";
?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login Maestro</title>
        <link rel="stylesheet" href="styles/styles.css" type="text/css"/>
    </head>
    <body>
    <center>
        <div id="signup">       
            <h3>Estudiantes en clase de: <?php echo $clasenombre;?></h3>
            
        </div>
    </center>
</body>
</html>