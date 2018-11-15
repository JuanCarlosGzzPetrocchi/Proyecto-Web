<?php
	$con=mysqli_connect("localhost","root","root","escuela");
	include_once 'dbConnect.php';
	session_start(); 
	if($_SESSION['usuarionombre']==''){
    	header("Location: ../Maestro/loginMaestro.php");
	}
	$masid= $_SESSION['usuarioid'];
	$user = $_SESSION['usuario']; 
	$query = "SELECT reporte.id as id, descripcion, maestro.nombre AS maestro, estudiante.nombre AS estudiante FROM reporte JOIN maestro ON reporte.maestroid = maestro.id JOIN estudiante ON reporte.estudianteid = estudiante.id where maestro.id=$masid";
	$response = mysqli_query($con, $query);


	//echo "<table>";
	//echo "<tr>
    //		<th>Descripcion</th>
    //		<th>Maestro</th>
    //		<th>Estudiante</th> 
  	//	</tr>";


	while($row = mysqli_fetch_array($response,MYSQLI_ASSOC)){
		$send = urlencode($row['id']);
		$descripcion = $row['descripcion'];
		$maestro = $row['maestro'];
		$estudiante = $row['estudiante'];
		//echo "<tr><td>" . $row['descripcion'] . "</td><td>" . 
		//$row['maestro'] . "</td><td>" . 
		//$row['estudiante'] ."</td><td>" . 
		//"<a href='../Vistas/modificarReporte.php?id=$send'>Modificar</a>" ."</td><td>" . 
		//"<a href='../dataAccess/borrarreporte.php?id=$send'>Borrar</a>" ."</td><td>" . 
		//"</td></tr>";
	}

	//echo "</table>";

?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			REPORTES
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<header>
			<h1>
			REPORTES De: Pepito Guzman
			</h1>
		</header>
	</head>
	<body>
		<table>
			<tr>
    			<th>Descripcion</th>
    			<th>Maestro</th>
    			<th>Estudiante</th> 
  			</tr>
  			<tr>
  				<td><?php echo $descripcion ?></td>
  				<td><?php echo $maestro ?></td>
  				<td><?php echo $estudiante ?></td>
  				<td><a href='../Vistas/modificarReporte.php?id=$send'>Modificar</a></td>
  				<td><a href='../dataAccess/borrarreporte.php?id=$send'>Borrar</a></td>
  				<td></td>
			</tr>
		</table>
	</body>
</html>