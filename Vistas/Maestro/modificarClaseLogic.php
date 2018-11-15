<?php
	
	session_start(); 
  	$user = $_SESSION['usuarionombre'];

  	if($_SESSION['usuarionombre']==''){
	    header("Location: ../Maestro/loginMaestro.php");
	} 

	$con=mysqli_connect("localhost","root","root","escuela");
	include_once 'dbConnect.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM clase WHERE id = $id LIMIT 1";
	$response = mysqli_query($con, $query);
	$clase = mysqli_fetch_assoc($response);

	if(isset($_POST['ModificarClase'])) {
		$nombre = $_POST['nombre'];
		$horario = $_POST['horario'];
		$salon = $_POST['salon'];

		$sql = "UPDATE clase SET nombre = '$nombre', horario = '$horario', salon = '$salon' WHERE id ='$id'";
		if ($con->query($sql) === TRUE) {
    		echo "Record updated successfully";
		} else {
    		echo "Error updating record: " . $con->error;
		}
	}

?>