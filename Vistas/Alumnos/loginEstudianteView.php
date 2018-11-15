<?php 
	//include('Proyecto-Web/Controller/Alumno/loginEstudianteLogic.php');
	include('../Alumnos/loginEstudianteLogic.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			ALUMNOS
		</title>
		<link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<head>
			
		</header>
	</head>
	<body>
		<center>
			<h1>Login Alumnos: </h1>
			<div id="signup">
			<form method="post">
				<label>Nombre</label>
				<input type="text" name="nombre" placeholder="Nombre Alumno" required/>
				<label>Contrasena</label>
				<input type="password" name="clave" placeholder="Contraseña" required/>
				<input type="submit" type="button" class="btn btn-primary"  name="loginAlumno" value="Entrar">
			</form>
		</div>

		</center>
		<a href="../../Vistas/Index.html" type="button" class="btn btn-info">Regresar</a>
	</body>
</html>