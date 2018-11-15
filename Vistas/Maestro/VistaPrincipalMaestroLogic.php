<?php
	session_start(); 
  	$user = $_SESSION['usuarionombre'];

  	if($_SESSION['usuarionombre']==''){
	    header("Location: ../Maestro/loginMaestro.php");
	} 
	
	if(isset($_POST['logout'])) {
		session_destroy();
		header("Location: loginMaestro.php");
	}
?>