<?php
	session_start(); 
 	$user = $_SESSION['usuarionombre'];
 	
 	if($_SESSION['usuarionombre']==''){
	    header("Location: ../Alumnos/loginEstudianteView.php");
	}

	if(isset($_POST['logout'])) {
		session_destroy();
		header("Location: ../Alumnos/loginEstudianteView.php");
	}
?>