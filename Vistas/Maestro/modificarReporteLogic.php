<?php

	$con=mysqli_connect("localhost","root","root","escuela");
	include_once 'dbConnect.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM reporte WHERE id = $id LIMIT 1";
	$response = mysqli_query($con, $query);
	$reporte = mysqli_fetch_assoc($response);

	if(isset($_POST['ModificarReporte'])) {
		$descripcion = $_POST['descripcion'];
		$estudiante = $_POST['estudiante'];


		$sql = "UPDATE reporte SET descripcion = '$descripcion' WHERE id ='$id'";
		if ($con->query($sql) === TRUE) {
    		echo "Record updated successfully";
		} else {
    		echo "Error updating record: " . $con->error;
		}
	}

?>