<?php
$con=mysqli_connect("localhost","root","root","escuela");
include_once 'dbConnect.php';

$id = $_GET['id'];

$query = "DELETE FROM clase WHERE id = $id";

if(mysqli_query($con,$query)){
echo("clase borrado");
header("Location: ../Vistas/VerClases.php");

}
else{
echo("Mission failed we'll get'em next time");
}
?>