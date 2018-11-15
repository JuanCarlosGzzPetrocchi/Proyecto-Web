
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>RegistrarReporte</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Registro de Reporte</h3>
            <?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
if($_SESSION['usuarionombre']==''){
    header("Location: loginMaestro.php");
}
$masid= $_SESSION['usuarioid'];
$query = "SELECT nombre,id FROM estudiante";
$response = mysqli_query($con, $query);

echo "<form method='post'>";
echo "<label>Nombre del estudiante: </label><br>";
echo "<select id='reporte' name='Estudiante'>";
while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
    $nombre= $row['nombre'];
    $idEstudiante= $row['id'];
echo "<option value='$idEstudiante'>$nombre</option>";
}
echo "</select> <br>";
echo "<label>Descripcion del incidente: </label><br>";
echo "<textarea id='desc' name='Descripcion' placeholder='Descripcion del reporte' required/> </textarea><br>";
echo "<input type='submit' type='button' class='btn btn-success'  name='RegistrarReporte' value='Agregar'/>";
echo "</form>";


if(isset($_POST['RegistrarReporte'])) {
$descripcion = $_POST['Descripcion'];
$Estudiante = $_POST['Estudiante'];
echo $descripcion;
echo $Estudiante;

if(mysqli_query($con,"INSERT INTO reporte(descripcion,maestroid,estudianteid) VALUES ('$descripcion',$masid,$Estudiante)")){
echo("Reporte registrado");
header("Location: VerReportes.php");
}
else{
echo("Mission failed we'll get'em next time");
}

}
?>
        </div>
    </center>
    <a href="../Maestro/VerReportes.php" type="button" class="btn btn-info">Regresar</a>
</body>
</html>