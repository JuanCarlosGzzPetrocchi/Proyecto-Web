<?php include('vistaPrincipalEstudianteLogic.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			ALUMNOS
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="signup">
			<h3>
				Bienvenido Alumno: <?php echo $user?>
			</h3>
			<a href="../Vistas/clasesAlumno.php">
   				<input type="button" value="Ver Clases"/>
			</a>
			<a href="../Vistas/reportesAlumno.php">
   				<input type="button" value="Ver Reportes"/>
			</a>
			<form method="post">
                <input type="submit" class="button"  name="logout" value="Logout"/>
            </form>
		</div>
	</body>
</html>