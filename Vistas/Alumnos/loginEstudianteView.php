<?php include('loginEstudianteLogic.php');?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			ALUMNOS
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<header>
			<h1>
			LogIn Alumnos:
			</h1>
		</header>
	</head>
	<body>
		<div id="signup">
			<form method="post">
				<label>Nombre</label>
				<input type="text" name="nombre" placeholder="Nombre Alumno" required/><br>
				<label>Contrasena</label>
				<input type="password" name="clave" placeholder="Contraseña" required/><br>
				<input type="submit" class="button" name="loginAlumno" value="Entrar">
			</form>
		</div>
	</body>
</html>