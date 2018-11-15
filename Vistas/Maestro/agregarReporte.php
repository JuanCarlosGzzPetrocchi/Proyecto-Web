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
echo "<select id='reporte' name='Estudiante'>";
while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
    $nombre= $row['nombre'];
    $idEstudiante= $row['id'];
echo "<option value='$idEstudiante'>$nombre</option>";
}
echo "<input type='text' name='Descripcion' placeholder='Descripcion del reporte' required />";
echo "<input type='submit' class='button'  name='RegistrarReporte' value='Agregar'/>";
echo "</form>";


if(isset($_POST['RegistrarReporte'])) {
$descripcion = $_POST['Descripcion'];
$Estudiante = $_POST['Estudiante'];
echo $descripcion;
echo $Estudiante;

if(mysqli_query($con,"INSERT INTO reporte(descripcion,maestroid,estudianteid) VALUES ('$descripcion',$masid,$Estudiante)")){
echo("Reporte registrado");
//header("Location: VerReportes.php");
}
else{
echo("Mission failed we'll get'em next time");
}

}
?>
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>RegistrarReporte</title>
    </head>
    <body>
    <center>
        <div id="registro">       
            <h3>Registro de Reporte</h3>
        </div>
    </center>
    <a href="../Maestro/VerReportes.php">Regresar</a>
</body>
</html>