<?php
	$con=mysqli_connect("localhost","root","root","escuela");
	include_once 'dbConnect.php';
	session_start(); 
	$id = $_GET['id'];

	$query = "SELECT nombre,id FROM estudiante WHERE estudiante.id NOT IN (SELECT estudianteid FROM unionClaseEstudiante WHERE unionClaseEstudiante.claseid=$id)";

	$response = mysqli_query($con, $query);

	//Guarda en un arreglo las opciones
    $resultado = array();
    //contador
    $i = 0;

	while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
   	 	$nombre = $row['nombre'];
   	 	$idEstudiante = $row['id'];

		$resultado[$i] = "<option value='$idEstudiante'>$nombre</option>";

		$i = $i + 1;
	}

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

	$button = "<a href='../Maestro/VerEstudiantes.php?id=$id' type='button' class='btn btn-info'>Regresar</a>";
?>