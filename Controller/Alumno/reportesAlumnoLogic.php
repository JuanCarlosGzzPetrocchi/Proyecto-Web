<?php

	$con=mysqli_connect("localhost","root","root","escuela");
	include_once 'dbConnect.php';
	session_start(); 
	if($_SESSION['usuarionombre']==''){
    	header("Location: loginEstudianteView.php");
	}

	$masid= $_SESSION['usuarioid'];
	$user = $_SESSION['usuario']; 
	$query = "SELECT reporte.id as id, descripcion, maestro.nombre AS maestro  FROM reporte JOIN maestro ON reporte.maestroid = maestro.id JOIN estudiante ON reporte.estudianteid = estudiante.id where estudiante.id=$masid";
	$response = mysqli_query($con, $query);

	$resultado = array();
  	$i = 0;

	while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
		$send = urlencode($row['id']);
		$resultado[$i] = "<tr>" . 
			"<td>" . $row['descripcion'] . "</td>" . 
			"<td>" . $row['maestro'] ."</td>" . 
		"</tr>";

		$i = $i + 1;
	}

?>
