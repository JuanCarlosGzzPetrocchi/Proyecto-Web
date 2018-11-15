<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$id = $_GET['id'];

$query = "DELETE FROM clase WHERE id = $id";

if(mysqli_query($con,$query)){
echo("clase borrado");
header("Location: ../Vistas/Maestro/VerClases.php");

}
else{
echo("¡No puedes borrar una clase si tienes estudiantes!");
}
?>