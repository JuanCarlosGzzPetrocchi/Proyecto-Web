

<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Agregar estudiante</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Agregar estudiante</h3>
            <?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
$id = $_GET['id'];

$query = "SELECT nombre,id FROM estudiante WHERE estudiante.id NOT IN (SELECT estudianteid FROM unionClaseEstudiante WHERE unionClaseEstudiante.claseid=$id)";

$response = mysqli_query($con, $query);

echo "<form method='post'>";
echo "<label>Nombre:</label> <br>";
echo "<select id='estudiante' name='estudiante'>";
while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
    $nombre= $row['nombre'];
    $idEstudiante= $row['id'];
echo "<option value='$idEstudiante'>$nombre</option>";
}
echo "</select> <br>";
echo "<label>Calificacion:</label> <br>";
echo "<input type='text' name='calificacion' placeholder='Calificacion' required /> <br>";
echo "<input type='submit' type='button' class='btn btn-success' name='AgregarEstudiante' value='Agregar'/> <br>";
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

echo "<a href='../Maestro/VerEstudiantes.php?id=$id' type='button' class='btn btn-info'>Regresar</a>";

?>
        </div>
    </center>
</body>
</html>