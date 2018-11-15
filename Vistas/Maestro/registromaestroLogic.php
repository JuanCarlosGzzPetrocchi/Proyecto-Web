<?php
	$con=mysqli_connect("localhost","root","root","escuela");

	include_once 'dbConnect.php';

	if(isset($_POST['RegistrarMaestro'])) {
	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];

	if(mysqli_query($con,"INSERT INTO maestro(nombre,clave) VALUES ('$nombre','$clave')")){
		echo "Maestro registrado.";
		header("Location: loginmaestro.php");
	}
	else{
		echo("Mission failed we'll get'em next time");
	}

	}
?>