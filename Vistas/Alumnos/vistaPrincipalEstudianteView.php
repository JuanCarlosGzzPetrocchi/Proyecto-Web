<?php 
	include('../../Controller/Alumno/vistaPrincipalEstudianteLogic.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			ALUMNOS
		</title>
		<link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<center>
		<div id="signup">
			<h3>
				Bienvenido Alumno: <?php echo $user?>
			</h3>
			<img src="../../css/logo.png"></br>
			<a href="../Alumnos/clasesAlumno.php">
   				<input type="button" class="btn btn-info" value="Ver Clases"/>
			</a>
			<a href="../Alumnos/reportesAlumno.php">
   				<input type="button" class="btn btn-info" value="Ver Reportes"/>
			</a>
			<form method="post">
                <input type="submit" type="button" class="btn btn-primary"  name="logout" value="Logout"/>
            </form>
		</div>
		</center>
	</body>
</html>