<?php
	
	session_start(); 
  	$user = $_SESSION['usuarionombre'];

  	if($_SESSION['usuarionombre']==''){
	    header("Location: ../Maestro/loginMaestro.php");
	} 

	$con=mysqli_connect("localhost","root","root","escuela");
	include_once 'dbConnect.php';

	$id = $_GET['id'];
	$query = "SELECT unionClaseEstudiante.calificacion as calificacion, unionClaseEstudiante.claseid as claseid, estudiante.nombre as nombre  FROM unionClaseEstudiante JOIN estudiante ON unionClaseEstudiante.estudianteid = estudiante.id WHERE unionClaseEstudiante.id = $id LIMIT 1";
	$response = mysqli_query($con, $query);
	$cambio = mysqli_fetch_assoc($response);
	$claseid = $cambio['claseid'];

	if(isset($_POST['CambiarCalificacion'])) {
		$calificacion = $_POST['calificacion'];


		$sql = "UPDATE unionClaseEstudiante SET calificacion = '$calificacion' WHERE id ='$id'";
		if ($con->query($sql) === TRUE) {
		   header("Location: ../../Vistas/Maestro/VerEstudiantes.php?id=$claseid");		} else {
    		echo "Error updating record: " . $con->error;
		}
	}

	$button = "<a href='../Maestro/VerEstudiantes.php?id=$claseid' type='button' class='btn btn-info'>Regresar</a>";

?>