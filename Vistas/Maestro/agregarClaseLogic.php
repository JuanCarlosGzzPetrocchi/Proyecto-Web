<?php
	$con=mysqli_connect("localhost","root","root","escuela");
	include_once 'dbConnect.php';
	session_start(); 
	if($_SESSION['usuarionombre']==''){
    	header("Location: loginMaestro.php");
	}
	if(isset($_POST['RegistrarClase'])) {
		$nombre = $_POST['nombre'];
		$horario = $_POST['horario'];
		$salon = $_POST['salon'];
		$masid = $_SESSION['usuarioid'];

		if(mysqli_query($con,"INSERT INTO clase(nombre,horario,salon,maestroid) VALUES ('$nombre','$horario','$salon',$masid)")){
			echo("clase registrado");
			header("Location: ../Maestro/VerClases.php");
		}
		else{
			echo("Mission failed we'll get'em next time");
		}
	}
?>