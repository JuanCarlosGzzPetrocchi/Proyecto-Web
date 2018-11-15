<?php
$con=mysqli_connect("localhost","root","root","escuela");

include_once 'dbConnect.php';
$id = $_GET['id'];
$id2 = urlencode($id);
$query = "SELECT unionClaseEstudiante.id as id,clase.nombre AS clase, estudiante.nombre AS estudiante, unionClaseEstudiante.calificacion AS calificacion FROM clase JOIN unionClaseEstudiante ON clase.id = unionClaseEstudiante.claseid JOIN estudiante ON estudiante.id = unionClaseEstudiante.estudianteid WHERE clase.id= $id";

$response = mysqli_query($con, $query);

echo "<table class='table'>";
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
 "</td><td>" . "<a href='../Maestro/cambiarCalificacion.php?id=$send' type='button' class='btn btn-primary'>Cambiar calificacion</a>".
 "</td><td>" . "<a href='../../dataAccess/quitarEstudiante.php?id=$send' type='button' class='btn btn-danger'>Eliminar estudiante</a>".
"</td></tr>";
}

echo "</table>";

echo "<a href='../Maestro/agregarEstudianteaClase.php?id=$id2' type='button' class='btn btn-success' >Agregar estudiante a esta clase</a> <br>";
echo "<a href='../Maestro/VerClases.php?id=$id' type='button' class='btn btn-info'>Regresar</a>";
?>

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login Maestro</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <center>
        <div id="signup">       
            <h3>Estudiantes en clase de: <?php echo $clasenombre;?></h3>
            
            
        </div>
    </center>
</body>
</html>