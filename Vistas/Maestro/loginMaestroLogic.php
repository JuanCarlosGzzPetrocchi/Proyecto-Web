<?php
	$con=mysqli_connect("localhost","root","root","escuela");

	include_once 'dbConnect.php';

	if(isset($_POST['loginMaestro'])) {
		$nombre = $_POST['nombre'];
		$clave = $_POST['clave'];

		$query = "SELECT * FROM maestro WHERE nombre='$nombre'";

		$response = mysqli_query($con, $query);
		$row = mysqli_fetch_array($response,MYSQLI_ASSOC);
		session_start();
		if($row["clave"] == $clave)
		{
			$_SESSION['usuarionombre'] = $row['nombre'];
			$_SESSION['usuarioid'] = $row['id'];
			$cookie_name = "user";
			$cookie_value = $row['nombre'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			header("Location: VistaPrincipalMaestro.php");
		}
		else{
			echo("Wrong Credentials");
		}
	}
?>