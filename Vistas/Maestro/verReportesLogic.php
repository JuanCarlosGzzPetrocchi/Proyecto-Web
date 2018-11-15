<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';
session_start(); 
if($_SESSION['usuarionombre']==''){
    header("Location: loginMaestro.php");
}
$masid= $_SESSION['usuarioid'];
$user = $_SESSION['usuario']; 
$query = "SELECT reporte.id as id, descripcion, maestro.nombre AS maestro, estudiante.nombre AS estudiante FROM reporte JOIN maestro ON reporte.maestroid = maestro.id JOIN estudiante ON reporte.estudianteid = estudiante.id where maestro.id=$masid";
$response = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
        $send = urlencode($row['id']);
        $descripcion = $row['descripcion'];
        $maestro = $row['maestro'];
        $estudiante = $row['estudiante'];
    }
?>